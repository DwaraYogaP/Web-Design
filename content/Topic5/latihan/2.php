<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<style>
    body {
        font-weight: bold;
    }
    .blue {
        color: blue;
    }

    .red {
        color: red;
    }

    .purple {
        color: purple;
    }
</style>
<body>
    <?php
        $nama = 'Dwara Yoga Pradana';
        $kampus = 'UNIVERSITAS NEGERI YOGYAKARTA';
        $fakultas = 'Teknik';
        $jurusan = 'Teknologi Informasi';
        $kelas = 'I';
        $nim = '20537144006';

        echo "Hai, perkenalkan nama saya adalah " . "<font color='red'>" . $nama . "</font>. ". "Saya adalah mahasiswa " . "<font color='purple'>" . $kampus . "</font>" . ", di fakultas " . "<span class='red'>" . $fakultas. "</span>" . "<br>";
        echo "Saat ini saya kuliah di jurusan " . "<span class='blue'>" . $jurusan . "</span>" . ", kelas " . "<span class='blue'>" . $kelas . "</span>" . " dan nomor mahasiswa saya adalah " . "<span class='purple'>" . $nim . ".";
    ?>
</body>
</html>