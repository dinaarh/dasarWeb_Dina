<?php
    $pattern = '/[a-z]/'; // Cocokkan huruf kecil.
    $text = 'This is a Sample Text.';
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }

    echo"<br><hr>";
    $pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
    $text = 'There are 123 apples.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo"<br><hr>";
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // Output: I like banana pie.

    echo"<br><hr>";
    $pattern = '/go*d/'; // cocokkan "god", "good", "gooood", dll
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><hr>";
    $pattern = '/go?d/'; // (o bisa muncul 0 atau 1 kali)
    $text = 'good god is good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><hr>";
    $pattern = '/go{1,2}d/'; // (o muncul antara 1 dan 2 kali)
    $text = 'god is good';
    if (preg_match_all($pattern, $text, $matches)) {
        echo "Cocokkan: " . implode(', ', $matches[0]);
    } else {
        echo "Tidak ada yang cocok!";
    }

?>