@extends('admin.admin')

@section('content')
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="page-heading">
  <h2>Data User</h2>
</div>

<table class="table table-bordered" id="table1">
  <thead>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">NIK</th>
    <th scope="col">No.Telepon</th>
    <th scope="col">level</th>
  </thead>


    @foreach ($pengaduans as $pengaduan)
    <tr>
       <td>{{ $loop->iteration }}</td>
       <td>{{ $pengaduan->nama }}</td>
       <td>{{ $pengaduan->nik}}</td>
       <td>{{ $pengaduan->telp}}</td>
       <td>{{ $pengaduan->level}}</td>

      </tr>
   @endforeach

</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/js/pages/simple-datatables.js"></script>
    @endsection
