<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>UABT UB | Daftar Anggota</title>
    <link rel="icon" type="image/x-icon" href="/img/logouabt.png">
    <link rel="stylesheet" href="{{asset('/css/daftaranggota.css')}}">

</head>
<body id="body">
    <div class="container">
        <form action="/daftaranggota" method="POST" enctype="multipart/form-data">
            @csrf
<!-- <div class="card"> -->
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim') }}">
                    @if (session('error2'))
                        <div class="alert alert-danger">{{ session('error2') }}</div>
                    @endif
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
                <label for="exampleFormControlInput1" class="form-label">Angkatan</label>
                <input type="text" class="form-control" id="angkatan" name="angkatan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat Domisili</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                    <option>PILIH</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <button type="submit" class="btn btn-primary disabled">Create...

            </button>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="alert-success-center">
        </form>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>