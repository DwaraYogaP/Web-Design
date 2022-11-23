<?php
    echo '<title>Latihan 3</title>';
    $tahun = 2014;
    $kabisat = $tahun % 4;
    $result = ($kabisat == 0) ? 'Kabisat' : 'Bukan Kabisat';

    echo '<h2>Tahun ' . $tahun . ' ' . $result;
?>