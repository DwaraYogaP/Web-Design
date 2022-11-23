<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="php.png">
    <title>PHP</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <button id="login-btn">Login</button>
        </ul>
    </nav>
    <div id="jumbotron">
        <div>
            <h1>SELAMAT DATANG</h1>
        </div>
    </div>

    <div id="isi">
        <div class="content">
            <?php
                echo '<h1><center>Selamat Datang di PHP</center></h1> <br>';
                echo date("l, jS F Y");

                echo '<h2>Hitung Luas Persegi Panjang</h2><br>';
            ?>
            <form action="" method="GET">
            <table>
                <tr>
                    <td><label for="">Masukkan panjang</label></td>
                    <td><input type="text" name="panjang"></td>
                </tr>
                <tr>
                    <td><label for="">Masukkan lebar</label></td>
                    <td><input type="text" name="lebar"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="hitung">Hitung</button></td>
                </tr>
                <tr>
                    <td><label for="">Hasil</label></td>
                    <td>
                        <?php
                            if ($_GET) {
                                $panjang = $_GET['panjang'];
                                $lebar = $_GET['lebar'];

                                $luas = $panjang * $lebar;
                                echo $luas . 'cm<sup>2</sup>';
                            }
                        ?>
                    </td>
                </tr>
            </table>
            </form> <br>

            <?php
                echo '<h2>Data Diri</h2>';

                $nama = 'Dwara Yoga Pradana';
                $nim = '20537144006';
                $jurusan = 'Teknologi Informasi';
            ?>

            <table>
                <tr>
                    <td>Nama</td>
                    <td>:
                        <?php
                            echo $nama;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:
                    <?php
                            echo $nim;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:
                    <?php
                            echo $jurusan;
                        ?>
                    </td>
                </tr>
            </table>
            
            
        </div>
        <div class="content" id="home">
            <h3>HOME</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
            </p>
        </div>

        <div class="content" id="about">
            <h3>ABOUT</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
            </p>

            <div class="box">
                <div class="box-content">
                    <h5>Box 1</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="box-content">
                    <h5>Box 2</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="box-content">
                    <h5>Box 3</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="box-content">
                    <h5>Box 4</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>

        <div class="content" id="contact">
            <h3>CONTACT US</h3>
            <div id="contact-content">
                <div>
                    <p>Desain Web <br>
                    Teknologi Informasi <br>
                    Universitas Negeri Yogyakarta</p>
                </div>

                <div>
                    <h1>Desain Web</h1>
                    <p><a href="">Tentang Kami</a></p>
                </div>

                <div>
                    <p><a href="">Blog</a></p>
                    <p><a href="">Reward</a></p>
                </div>

                <div>
                    <p><a href="">Hubungi Kami</a></p>
                    <p><a href="">FAQ</a></p>
                </div>
            </div>
        </div>      
    </div>

    <footer>
        <h5>&copy;Dwara Yoga Pradana</h5>
    </footer>
</body>
</html>