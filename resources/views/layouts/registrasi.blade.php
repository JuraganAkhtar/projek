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
    background-color: #A9A9A9!important;
}
.global-container{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: gray;
}
.login-form{
    width: 480px;
    height: 660px;
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
    <title>Registrasi</title>
  </head>
  <body>
    <div class="global-container mt-5">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">D A F T A R</h1>
            </div>
            <div class="card-text">
                <form action="/registrasi" method="post">
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputNik1" class="form-label">Nik</label>
                      <input type="number"  name="nik" class="form-control" id="exampleInputNik1">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputNama1" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputNama1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                      </div>
                    <input type="hidden" name="level" value="masyarakat">
                    <div class="mb-3">
                      <label for="exampleInputNo.Telepon1" class="form-label">No.Telepon</label>
                      <input type="number"  name="telp" class="form-control" id="exampleInputNo.Telepon1">
                    </div>
                    <div class="mb-3 form-check ">
                    <p>sudah punya akun? <a href="/masuk">masuk</a> </p>
                    </div>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary ">Daftar</button>
                </div>
                  </form>
            </div>
        </div>
    </div>


  </body>
</html>
