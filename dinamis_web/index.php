<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- my own style -->
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar dimulai dari sini -->
    <div class="jumbotron jumbotron-fluid m-0">
        <div class="container">
            <h1 class="display-4 text-center">Doni Wirawan</h1>
            <p class="lead text-center">Halaman Web Dinamis Pertama Saya</p>
        </div>
    </div>

    <!-- navbar dimulai dari sini -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand" href="#">
                Doni Wirawan
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=tutorial">Tutorial</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>




    <!-- body dimulai dari sini -->

    <div class="badan">


        <?php
        if (isset($_GET['page'])) {

            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "halaman/home.php";
                    break;
                case 'tentang':
                    include "halaman/tentang.php";
                    break;
                case 'tutorial':
                    include "halaman/tutorial.php";
                    break;

                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        } else {
            include "halaman/home.php";
        }

        ?>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>