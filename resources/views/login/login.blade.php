<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UABT UB | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <link rel="icon" type="image/x-icon" href="/img/logouabt.png">

</head>

<body>
    <!-- Login -->
    <img src="/img/logouabt.png" alt="Image" class="image1">
    <div class="container" id="rata-tengah">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gunakan akun @student.ub.ac.id">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <a class="btn btn-primary" href="/" role="button">Login</a>
            <br>
            <div id="emailHelp" class="form-text" name="tulisan">Belum punya akun?</div>
            <a class="btn btn-danger" href="/daftar" role="button">Daftar</a>
    </div>
    </form>
    <!-- End Login -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>