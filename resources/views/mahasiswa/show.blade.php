@extends('layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Show Data Mahasiswa</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-6 offset-lg-3">
        <div class="card">
            <div class="card-header">
                <h3>Detail Mahasiswa</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <p>{{ $mahasiswa->nama }}</p>
                </div>
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <p>{{ $mahasiswa->kelas }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
