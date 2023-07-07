<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>UABT UB | Daftar Anggota</title>
    <link rel="icon" type="image/x-icon" href="/img/logouabt.png">

</head>
<body>
    <form action="/daftar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas">
            </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</body>
</html>