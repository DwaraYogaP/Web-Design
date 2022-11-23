<?php
    $nilai = 75;
    printf("Nilai = " . $nilai . "<br>");
    echo 'Keterangan : <span>';
    if($nilai >= 60) {
        echo 'LULUS';
    } else {
        echo 'TIDAK LULUS';
    }
?>