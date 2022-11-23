<?php
    $nim = '20537144006';
    $nama = 'Dwara Yoga Pradana';
    $umur = 20;
    $nilai = 80;
    $status = true;

    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama <br>";
    print "Umur : " . $umur; print "<br>";
    printf ("Nilai : %.2f<br>", $nilai);
    if ($status) {
        echo "Status : Aktif";
    } else {
        echo "Status : Tidak Aktif";
    }
?>