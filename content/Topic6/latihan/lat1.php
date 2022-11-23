<?php
    echo '<title>Latihan 1</title>';
    // $hour = date("h");
    $hour = 9;
    echo '<h2>Jam ' . $hour . '</h2><br>';
    if($hour <= 10) {
        echo '<h1>Selamat Pagi</h1>';
    } else if($hour <= 15) {
        echo '<h1>Selamat Siang</h1>';
    } else if($hour <= 18) {
        echo '<h1>Selamat Sore</h1>';
    } else {
        echo '<h1>Selamat Malam</h1>';
    }
?>