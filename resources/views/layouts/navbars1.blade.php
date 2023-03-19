<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

 <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #A9A9A9;">
    <div class="container-fluid">


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav col-lg-9">
          <img src="img/pengaduan.png" style="height:50px;">
              <li class="nav-item">
                <a class="nav-link " href="#pengaduan" style="color:#000000; font-size: 20px">pengaduan</a>
              </li>

          </ul>
        </ul>
    <div class=" col-lg-3 text-end float-end">
        <a href="/home"><button type="button" class="btn btn-dark" ><i class="fa-solid fa-user"></i></i> @auth {{ auth()->user()->username }} @endauth</button></a>
        <a href="/"><button type="button"  onclick="return confirm('yakin ingin keluar?')"
          class="btn btn-secondary"><i class="fa-solid fa-right-from-bracket"></i></i>Keluar </button></a>
      </div>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
@yield('content')
</body>
</html>
