@extends('Layouts.navbars1')
@section('konten')
<link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
<div class="container-fluid pt-5 pb-5 mt-5" >
    <div class="row justify-content-evenly">
      <div class="col-lg-6">
        <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9;" >
            <h1>Apa Itu Pengaduan Masyarakat?</h1>
        <p>Sistem laporan pengaduan masyarakat yang dibuat untuk memudahkan masyarakat untuk memberikan laporan atau informasi kepada pihak yang berwenang,Dengan hadirnya sistem pelaporan pengaduan oniline ini,diharapkan setiap suara masyarakat bisa didengar dan ditindaklanjuti oleh pihak yang berwenang</p>
      </div>
      </div>
      <div class="col-lg-6" >
        <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9; " >
            <h1>Tujuan Pengaduan Masyarakat</h1>
        <ul>
            <li>Memberikan informasi atau laporan yang jelas kepada pihak yang berwenang supaya bisa ditindak lebih lanjut</li>
            <li>Mempermudah masyarakat untuk berkomunikasi dengan pihak yang berwenang</li>
            <li>Meningkatkan kualitas pelayanan publik</li>
        </ul>
      </div>
      </div>

  </div>
  </div>

          <div class="row ">
                <div class="col-1 col-lg-3  mt-5 mb-5">
                  <div class="card border border-0 card" data-aos="zoom-in" style="background-color:#f9f9f9; width:300px">
                    <div class="card-body">
                        <div class="text-center">
                        <i class="fa-sharp fa-solid fa-pen-to-square fa-5x"></i>
                    </div>
                      <h5 class="card-title text-center mt-3" >Tulis Laporan</h5>
                      <p class="card-text align-center  text-center mx-auto">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
                    </div>
                  </div>
                  </div>

                  <div class="col-2 col-lg-3  mt-5 mb-5">
                    <div class="card border border-0 card" data-aos="zoom-in"style="background-color:#f9f9f9; width:300px ">
                      <div class="card-body">
                        <div class="text-center">
                            <i class="fa-sharp fa-solid fa-pen-to-square fa-5x"></i>
                        </div>
                        <h5 class="card-title text-center mt-3">Proses Verifikasi</h5>
                        <p class="card-text align-center  text-center mx-auto">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang</p>
                      </div>
                    </div>
                  </div>

                 </div>
              </div>
              <div class="col-2 col-lg-3  mt-5 mb-5">
                <div class="card border border-0 card" data-aos="zoom-in"style="background-color:#f9f9f9; width:300px ">
                  <div class="card-body">
                    <div class="text-center">
                        <i class="fa-sharp fa-solid fa-pen-to-square fa-5x"></i>
                    </div>
                    <h5 class="card-title text-center mt-3">Proses Verifikasi</h5>
                    <p class="card-text align-center text-center mx-auto">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang</p>
                  </div>
                </div>
              </div>

             </div>
          </div>

      </div>
    </div>

    </div>
  </div>
  <div class="panel mx-auto col-lg-10 col-10 col-sm-6 col-md-6 mt-5 pb-5 rounded shadow mb-5" data-aos="zoom-in" style="background-color: #DCDCDC">
    <form action="">
    <div class="container-fluid pt-5">
      <div class="row row justify-content-evenly">
          <h1><center> Sampaikan Laporan Anda</center></h1>

        <div class="mb-3 col-lg-6 ">

          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Isi Laporan"></textarea>
        </div>
        <div class="mb-3 col-lg-6">

          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Lokasi Kejadian"></textarea>
        </div>


        </div>
      </div>
      <div class="mb-3 col-lg-5 mx-3">
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">

      </div>

        <div class="mb-3 col-lg-5 mx-3">

          <input class="form-control" type="file" id="formFile">
        </div>

        <div class="d-flex justify-content-center mt-4">
          <button type="submit"
              class="btn btn-light mx-1 col-lg-2 col-md-4 col-sm-4 col-4 shadow ">Kirim</button>
      </div>
      </form>
    </div>
  </div>

  <div class="container-fluid"style="background-color:#f9f9f9; " >
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center"><h1>1000</h1></div>
      <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center"><h6>Sudah Melapor</h6></div>
    </div>
   </div>



   <footer class="mt-5 pt-5 text-center text-white shadow" style="background-color:#DCDCDC;">
    <!-- Grid container -->
    <div class="container p-4">


      <p align="center">Copyright @ 2023</p>
      <p align="center">Akhtar Muhammad Hamdjah</p>

    <!-- Copyright -->
  </footer>
  <!-- Footer -->



                </div>
            </div>
        </div>
    </div>
</div>

@endsection


