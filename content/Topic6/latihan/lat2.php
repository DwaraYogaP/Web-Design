<?php
    echo '<title>Latihan 2</title>';
    echo '<h1>Menentukan Kelulusan</h1><br>';
?>

<form action="" method="GET">
    <table>
        <tr>
            <td><label for="">Masukkan Nilai</label></td>
            <td><input type="text" name="nilai" id=""></td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
        <tr>
            <td>
            <?php
                if($_GET) {
                    $nilai = $_GET['nilai'];

                    if ($nilai > 85) {
                        echo 'Hasil = A';
                    } else if ($nilai > 70) {
                        echo 'Hasil = B';
                    } else if ($nilai > 60) {
                        echo 'Hasil = C';
                    } else if ($nilai > 30) {
                        echo 'Hasil = D';
                    } else {
                        echo "TIDAK LULUS";
                    }
                }
            ?>
            </td>
        </tr>
    </table>
</form>

