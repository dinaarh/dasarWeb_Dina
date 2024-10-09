<!DOCTYPE html>
<html>

<head>
    <title>HTML Injection</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <h2 style="text-align: center;">Form Input</h2>

    <?php 
    $inputErr = "";
    $emailErr = "";
    $input = "";
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["input"])){
            $inputErr = "Inputkan data dahulu!";
        } else {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email harus diisi!";
        } else {
            $email = $_POST['email'];
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Lanjutkan dengan pengolahan email yang aman
                echo "<p>Data berhasil diterima!</p>";
                echo "<p>Hasil input: $input</p>";
                echo "<p>Email: $email</p>";
            } else {
                // Tangani input yang tidak valid
                $emailErr = "Format email tidak valid.";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Inputkan data: </label><br>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>" required>
        <span class="error"><?php echo $inputErr; ?></span><br><br>

        <label for="email">Inputkan email: </label><br>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>" required>
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>