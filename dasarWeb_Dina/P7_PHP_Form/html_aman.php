<!DOCTYPE html>
<html>

<head>
    <title>HTML Injection</title>
</head>

<body>
    <h2 style="text-align: center;">Form Input</h2>

    <?php 
    $inputErr = "";
    $input = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["input"])){
            $inputErr = "Inputkan data dahulu!";
        } else {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

            echo "<p>Hasil input: $input</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Inputkan data: </label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>" required>
        <span class="error"><?php echo $inputErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>