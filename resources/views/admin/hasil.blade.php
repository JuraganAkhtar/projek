
@extends('admin.admin')

@section('content')
<link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="page-heading">
  <h2>Hasil Pengaduan</h2>
</div>

<table class="table table-bordered" id="table1">
  <thead>
    <th scope="col">No</th>
    <th scope="col">Isi Laporan</th>
    <th scope="col">Alamat Kejadian</th>
    <th scope="col">Tanggal Kejadian</th>
    <th scope="col">Lampiran</th>
    <th scope="col">Tanggapan</th>
    <th scope="col">Status</th>





  </thead>
  <tbody>
    @foreach ($pengaduans as $pengaduan)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $pengaduan->isi }}</td>
        <td>{{ $pengaduan->lokasi}}</td>
        <td>{{ $pengaduan->tanggal}}</td>
        <td>{{ $pengaduan->file}}</td>
        <td>{{ $pengaduan->tanggapan}}</td>
        <td>{{ $pengaduan->status}}</td>

      </tr>
   @endforeach

  </tbody>

</table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js/pages/simple-datatables.js"></script>
    @endsection
