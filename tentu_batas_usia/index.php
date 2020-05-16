<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php

    // untuk menghilangkan error
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    error_reporting(E_ERROR);

    // kode dibawah sini saya dapat dari w3schools untuk mengamankan form dari hacker
    $nama = $umur  = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $umur = test_input($_POST['umur']);
        $nama = test_input($_POST['nama']);
    }

    // kode pemrosesan berada disini


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <!-- tampilan dimulai dari sini -->
    <div class="container">
        <div class="row">
            <!-- kolom dibawah adalah col dummy supaya object jadi center atau tengah -->
            <div class="col-lg-2"></div>
            <!-- kolom dibawah ini adalah kolom asli -->
            <div class="col-lg-8 xs-auto mt-lg-5 border p-4 rounded">
                <h3 class="text-capitalize text-center mb-4 h1 font-weight-bold">Program penentu Batas usia</h3>

                <div class="alert alert-primary text-center h1 align-middle" role="alert">
                    <h3 class=" text-center  text-capitalize">Hello, <?="<b>" .$nama. "</b>"; ?></h3>
                </div>
                <?php
                switch ($umur) {
                    case ($umur > 0 && $umur <= 3):
                ?>
                        <div class="alert alert-danger text-center h3 align-middle" role="alert">
                            <p> Anda Masuk Kategori <b>Batita</b></p>
                        </div>
                    <?php
                        break;
                    case ($umur > 3 && $umur <= 5):
                    ?>
                        <div class="alert alert-danger text-center h3 align-middle" role="alert">
                            <p> Anda Masuk Kategori <b>Balita</b></p>
                        </div>
                    <?php
                        break;
                    case ($umur > 5 && $umur <= 12):
                    ?>
                        <div class="alert alert-danger text-center h3 align-middle" role="alert">
                            <p> Anda Masuk Kategori <b>Anak-Anak</b></p>
                        </div>
                    <?php
                        break;
                    case ($umur > 12 && $umur <= 17):
                    ?>
                        <div class="alert alert-danger text-center h3 align-middle" role="alert">
                            <p> Anda Masuk Kategori <b>Remaja</b></p>
                        </div>
                    <?php
                        break;
                    case ($umur > 17 && $umur <= 30):
                    ?>
                        <div class="alert alert-danger text-center h3 align-middle" role="alert">
                            <p> Anda Masuk Kategori <b>Pemuda</b></p>
                        </div>
                    <?php
                        break;
                    case ($umur > 30 && $umur <= 60):
                    ?>
                        <div class="alert alert-danger text-center h3 align-middle" role="alert">
                            <p> Anda Masuk Kategori <b>Dewasa</b></p>
                        </div>
                    <?php
                        break;
                    case ($umur > 60):
                    ?>
                        <div class="alert alert-danger text-center h3 align-middle" role="alert">
                            <p>Anda Masuk Kategori <b>Lansia</b> </p>
                        </div>






                <?php
                }

                ?>
                <!-- ini adalah tempat dimana form atau input diberikan dan dikirim/diproses ke atas -->

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group mt-4">
                        <label for="exampleInputPassword1" class="font-weight-bold">Masukkan Nama anda</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleInputPassword1" class="font-weight-bold">Masukkan Umur anda</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="umur">
                    </div>
                    <input type="submit" class="btn btn-primary"></input>
                </form>
            </div>
            <!-- ini adalah col dummy  -->
            <div class="col-lg-2"></div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>