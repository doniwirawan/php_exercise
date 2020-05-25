
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Hitung Luas Segitiga</title>
</head>

<body>
<?php
  
  // untuk menghilangkan error
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  error_reporting(E_ERROR);

  // kode dibawah sini saya dapat dari w3schools untuk mengamankan form dari hacker
  $alas  = "";
  $tinggi  = "";

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $alas = test_input($_POST['alas']);
    $tinggi = test_input($_POST['tinggi']);
  }

  // kode pemrosesan berada disini
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi']; 
    $hasil = 0.5 * $alas * $tinggi;

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 ml-auto mr-auto border mt-lg-5 p-4 rounded">
            <h1 class="text-center">Hitung Luas Segitiga</h1>
            
                <div class="alert alert-danger" role="alert">
                    <p class="font-weight-bold">Panjang alas : <?= $alas;?><br>Tinggi Segitiga : <?= $tinggi;?> <br>Luas segitiga adalah : <?= $hasil;?></p> 
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="alas" class="">Alas Segitiga</label>
                        <input type="text" class="form-control" id="alas" name="alas">
                    </div>
                    <div class="form-group">
                        <label for="tinggi" class="">Tinggi Segitiga</label>
                        <input type="text" class="form-control" id="tinggi" name="tinggi">
                    </div>
                    <button type="submit" class="btn btn-primary">Hitung</button>
                </form>
            </div>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>