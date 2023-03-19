<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">


<style>
    body{
    height: 100%;
    background-color: #A9A9A9 !important;
}
.global-container{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: gray;
}
.login-form{
    width: 380px;
    height: 450px;
    padding: 20px;
    background-color:white !important;
    border-radius: 20px;
}
.card-title{
    font-weight: 900;
    scroll-padding-top: 20px;
}
.btn{
    background: whitesmoke !important;
    color: #222d32 !important;
    transform: translateY(10px);
    font-size: 14px;
    border-radius: 10px !important;
}
</style>
    <title>login</title>
  </head>
  <body>
    <div class="global-container mt-5">
        <div class="card login-form">
            @if (session()->has('loginerror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginerror') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-body">
                <h1 class="card-title text-center">M A S U K</h1>
            </div>
            <div class="card-text">
                <form action="/masuk" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputEmail1">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                     Belum Punya Akun?<a href="/registrasi">Daftar</a>
                    </div>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary ">Masuk </button>
                </div>
                  </form>
            </div>
        </div>
    </div>


  </body>
</html>
