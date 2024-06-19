@extends('layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Edit Data Mahasiswa</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}">Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger mt-3">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card mt-4">
        <div class="card-body">
            <div class="mb-3">
                <label for="nama" class="form-label"><strong>Nama:</strong></label>
                <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label"><strong>Kelas:</strong></label>
                <input type="text" name="kelas" value="{{ $mahasiswa->kelas }}" class="form-control" id="kelas" placeholder="Kelas">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
