@extends('layouts.navbars')
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
         <a href="#mulai" class="btn  col-2" style="background-color:darkgray;">mulai</a>
        </div>

    </div>
  </div>
<div class id="mulai">
<div class="container-fluid pt-5 pb-5 mt-5 "  >
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
  </div>


    <div class="row  pt-5 pb-5 mt-5 ">
      <div class="col-lg-4">
        <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9; width:300px;" >
            <div class="card-body">
                <div class="text-center">
                <i class="fa-sharp fa-solid fa-pen-to-square fa-5x"></i>
            </div>
              <h5 class="card-title text-center mt-3" >Tulis Laporan</h5>
              <p class="card-text align-center  text-center mx-auto">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
            </div>
      </div>
      </div>
      <div class="col-lg-4" >
        <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9;width:300px; " >
        <div class="card-body">
                        <div class="text-center">
                            <i class="fa-solid fa-arrow-rotate-right fa-5x"></i>
                        </div>
                        <h5 class="card-title text-center mt-3">Proses Verifikasi</h5>
                        <p class="card-text align-center  text-center mx-auto">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang</p>
                      </div>
        </ul>
      </div>
      </div>

      <div class="col-lg-4">
        <div class="panel mx-auto shadow-sm p-3 rounded" style="background-color:#f9f9f9; width:300px; ">
            <div class="card-body">
                <div class="text-center">
                    <i class="fa-solid fa-check-to-slot fa-5x"></i>
                    </div>
                <h5 class="card-title text-center mt-3">Selesai</h5>
                <p class="card-text align-center text-center mx-auto">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
              </div>
      </div>
      </div>
  </div>
  </div>
</div>

<div class id="tentang">
<div class="pt-5 pb-5 mt-5">
    <div class="text-center mt-3 "id="tentang">
      <h1>TENTANG KAMI</h1>
    </div>
      <p style="font-size: 15px;">Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu, untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu saluran pengaduan secara Nasional.

        Untuk itu Pemerintah Republik Indonesia membentuk Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional - Layanan Aspirasi dan Pengaduan Online Rakyat  adalah layanan penyampaian semua aspirasi dan pengaduan masyarakat Indonesia  Lembaga pengelola Aspera adalah Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (Kementerian PANRB) sebagai Pembina Pelayanan Publik, Kantor Staf Presiden (KSP) sebagai Pengawas Program Prioritas Nasional dan Ombudsman Republik Indonesia sebagai Pengawas Pelayanan Publik. LAPOR! telah ditetapkan sebagai Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional berdasarkan Peraturan Presiden Nomor 76 Tahun 2013 dan Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 3 Tahun 2015.

        Pelayanan Pengaduan Masyarakat dibentuk untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak masyarakat agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan publik yang berwenang menanganinya. bertujuan agar:

        Penyelenggara dapat mengelola pengaduan dari masyarakat secara sederhana, cepat, tepat, tuntas, dan terkoordinasi dengan baik;
        Penyelenggara memberikan akses untuk partisipasi masyarakat dalam menyampaikan pengaduan; dan
        Meningkatkan kualitas pelayanan publik.</p>

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
