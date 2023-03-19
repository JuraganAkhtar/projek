@extends('layouts.navbars1')
@section('content')
<link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
<div class="container-fluid">
    <div class="row ">
      <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="background-color: #F5F5F5" >
        <img src="img/landing.png"  style="height:400px;" class="justify-content-start img-fluid" srcset="">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6 pt-5 pb-5 " style=" font-family:comic sans ms; font-size:50px; background-color:#f5f5f5">
         <p> PELAYANAN PENGADUAN MASYARAKAT</p>
         <h6>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h6>
         <a href="#mulai" class="btn  col-2" style="background-color:darkgray; ">mulai</a>
        </div>

    </div>
  </div>





<div class id="pengaduan">
  <div class="panel mx-auto col-lg-10 col-10 col-sm-6 col-md-6 mt-5 pb-5 rounded shadow mb-5" data-aos="zoom-in" id="pengaduan" style="background-color: #DCDCDC">
    <form action="/create" method="POST" enctype="multipart/form-data" >
      @csrf
    <div class="container-fluid pt-5">
      <div class="row row justify-content-evenly">
          <h1 class="text-center">Sampaikan Laporan Anda</h1>
{{-- <input type="hidden" name="tanggapan" value=""> --}}
{{-- <input type="hidden" name="status" value="menunggu"> --}}
        <div class="mb-3 col-lg-6 ">
          <textarea class="form-control" id="exampleFormControlTextarea1"name="isi" rows="5" placeholder="Isi Laporan" value={{ old('isi') }}></textarea>
        </div>
        <div class="mb-3 col-lg-6">

          <textarea class="form-control" id="exampleFormControlTextarea1" name="lokasi" rows="5" placeholder="Lokasi Kejadian"></textarea>
        </div>


        </div>
      </div>
      <div class="mb-3 col-lg-5 mx-3">
        <input type="date" class="form-control" name="tanggal" id="exampleFormControlInput1" placeholder="">

      </div>

        <div class="mb-3 col-lg-5 mx-3">

          <input type="file" name="file" class="form-control" id="formFile">
        </div>

        <div class="d-flex justify-content-center mt-4">
          <button type="submit" onclick="return confirm('Laporan Terkirim')"
              class="btn btn-light mx-1 col-lg-2 col-md-4 col-sm-4 col-4 shadow ">Kirim</button>
      </div>
    </div>
      </form>
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
