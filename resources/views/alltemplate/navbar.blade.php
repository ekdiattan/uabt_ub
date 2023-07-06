<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/navbar.css')}}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand" id="navbar1">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <a href="/">
                    <img src="/img/logouabt.png" alt="class=" d-inline-block align-text-top" id="img1" >
                </a>
                <ul class="navbar-nav" id="tulisan">
                    <li class="nav-item" id="beranda">
                        <a class="nav-link" aria-current="page" href="/" style="color: white;">Beranda</a>
                    </li>
                    <li class="nav-item" id="sejarah">
                        <a class="nav-link" href="/sejarah" style="color: white;">Sejarah</a>
                    </li>
                    <li class="nav-item" id="berita">
                        <a class="nav-link" href="/berita" style="color: white;">Berita</a>
                    </li>
                    <li class="nav-item" id="pengurus">
                        <a class="nav-link" href="/pengurus" style="color: white;">Pengurus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login" style="color: white;">Daftar</a>
                    </li>
                    <form class="d-flex" role="search" id="search">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <marquee behavior="" direction="">Selamat datang di webiste Unit Aktivitas Bulutangkis Universitas Brawijaya,Malang Jawa Timur</marquee>
    <!-- End Navbar -->

</body>

</html>