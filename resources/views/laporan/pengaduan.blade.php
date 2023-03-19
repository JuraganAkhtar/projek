@extends('admin.admin')


@section('content')
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <div class="page-heading">
                <h3>Laporan Pengaduan</h3>
            </div>

            <div class="page-content container">
                <section class="row">
                    <form action="" method="post" class="" id="table1">
                            <div class="text-end">
                                <!-- Button trigger modal -->
                                <a href="/cetak" target="_blank" class="btn btn-outline-primary mb-3"
                                    >
                                    Cetak Pengaduan
                            </a>
                            </div>
                     </div>
            </form>

            <table class="table table-bordered">
                <thead>
                  <th scope="col">No</th>
                  <th scope="col">Isi Laporan</th>
                  <th scope="col">Alamat Kejadian</th>
                  <th scope="col">Tanggal Kejadian</th>
                  <th scope="col">Lampiran</th>
                  <th scope="col">Status</th>

                </thead>
                    <tbody>
                        @foreach ($pengaduans as $pengaduan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengaduan->isi }}</td>
                            <td>{{ $pengaduan->lokasi}}</td>
                            <td>{{ $pengaduan->tanggal}}</td>

                        </td>


            <td ><a href="" data-bs-toggle="modal"
                data-bs-target="#exampleModal{{ $pengaduan->id }}"><img
                    src="{{ asset('/storage/' . $pengaduan->lampiran) }}" class="col-lg-8"
                    alt=""></a><br>
        </td>
                                    @if ($pengaduan->status == 'Menunggu')
                                        <td class="text-primary">{{ $pengaduan->status }}</td>
                                    @elseif ($pengaduan->status == 'Ditolak')
                                        <td class="text-danger">{{ $pengaduan->status }}</td>
                                    @elseif ($pengaduan->status == 'Selesai')
                                        <td class="text-success">{{ $pengaduan->status }}</td>
                                    @elseif ($pengaduan->status == 'Diproses')
                                        <td class="text-warning">{{ $pengaduan->status }}</td>
                                    @else()
                                        <td class="text-primary">{{ $pengaduan->status }}</td>
                                    @endif


                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </section>
        </div>
        @include('laporan.modal-cetak')
        <footer class="">

        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
@endsection
