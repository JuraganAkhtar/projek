<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <table class="table table-striped">
        <thead>
            <tr class="">
                <th scope="col">No</th>
             
                <th scope="col" >Isi Laporan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Tanggapan</th>
                <th scope="col">Lampiran</th>
                <th scope="col">Status</th>
             
               
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduans as $pengaduan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pengaduan->isi }}</td>
                <td>{{ $pengaduan->lokasi}}</td>
                <td>{{ $pengaduan->tanggal}}</td>
                <td>{{ $pengaduan->tanggapan}}</td>

            </td>

            <td ><a href="" data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{ $pengaduan->id }}"><img
                        src="{{ asset('/storage' . $pengaduan->lampiran) }}" class="col-lg-8"
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
    <script type="text/javascript">
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
