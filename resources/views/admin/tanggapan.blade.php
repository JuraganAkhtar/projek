@extends('admin.admin')

@section('content')
<link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="page-heading">
  <h2>Tanggapan</h2>
</div>
<div class="card">
    <div class="card-body">
        <form action="/create-tanggapan{{ $record->id }}"method="post" >
            @csrf
            <div class="mb-3">
              <label for="" >Tanggapan</label>
            </div>
            <div class="mb-3">
            <textarea  name="tanggapan" id="" class="form-control" rows="2">{{ $record->tanggapan }}</textarea>
            </div>
            <div class="mb-3">
                <div class="col-md-3">
                    <label for="">Status</label>
                </div>
            <div class="col-md-4">
            <select name="status"  name="status" class="form-control">
              <option disabled="{{ $record->status }}">{{ $record->status }}</option>
              <option value="Menunggu">Menunggu</option>
              <option value="Diproses">Diproses</option>
                <option value="Selesai">Selesai</option>
                <option value="Ditolak">Ditolak</option>
            </select>
            </div>
            </div>
            <button type="submit"
            class="btn btn-light mt-5">Kirim</button>
          </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    @endsection
