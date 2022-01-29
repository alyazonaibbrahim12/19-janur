<?php
    session_start();
    if (isset($_SESSION['status'])) {
    $nama = $_SESSION['nama'];
    echo $jabatan = $_SESSION['jabatan'];
    include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan SMK Taruna Bangsa</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        video{
            position : fixed ;
            z-index  :-100;
        }
        #myvidio{
            position : fixed ;
            right:0;
            botton:0;
            min-width:100%;
            min-height:100%;
        }
    </style>
</head>
<body>
<video autoplay muted loop i="myvidio">
<source src="rusuh.mp4" type=video/mp4>
</video>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <center><h1>Perpustakaan SMK Taruna Bangsa</h1></center>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/04_mywebsite_12rpl2/admin.php">Admin</a>
                            </li>
                            <?php
                            if ($_SESSION['jabatan'] == 'Kepala perpustakaan') {
                            ?>
                            
                            <?php
                            }
                            ?><li class="nav-item">
                                <a class="nav-link" href="?page=petugas">Petugas</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" href="?page=anggota">Anggota</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=buku">Buku</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> 
                        <a href="?page=logout"><button class="btn btn-danger">Logout</button></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                if(isset($_GET['page']))
                {
                    if ($_GET['page']=="anggota") 
                    {
                        include('anggota.php');
                    }elseif($_GET['page']=="buku")
                     {
                        include('buku.php');
                    }elseif($_GET['page']=="petugas")
                     {
                        include('petugas.php');
                    }elseif($_GET['page']=="perpustakaan")
                    {
                       include('perpustakaan.php');
                    }elseif($_GET['page']=="logout")
                    {
                       include('logout.php');
                   }
                }else{
                    echo "<br><br><center><h3>Selamat Datang ".$nama."</h3></center><br><br>";
                    echo "<h1><center>".$jabatan." SMK TARUNA BANGSA</center><h1>";
                }
                
                ?>
            </div>
            
        </div>
    </div>

    <div class="col text-center color=black">
                COPYRIGHT @ALYAZONA IBRAHIM

    </div>
<br>
<br>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
else
{
    ?>
    <script>
        window.location.href='http://localhost/04_alyazona_12rpl2/admin.php?page=petugas';
    </script>
    <?php
}
?>