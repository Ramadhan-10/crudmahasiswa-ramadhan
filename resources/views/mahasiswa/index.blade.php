@extends('layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>CRUD Mahasiswa</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}">Create New Mahasiswa</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success mt-3">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-hover mt-3">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->kelas }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                    <a class="btn btn-info btn-sm" href="{{ route('mahasiswa.show', $mahasiswa->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
