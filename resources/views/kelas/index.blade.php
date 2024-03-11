@extends('layouts.main')

@section('container')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb adminx-page-breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Classes</li>
        </ol>
    </nav>

    <div class="pb-3">
        <h1>Classes</h1>
    </div>

    <a href="/kelas/create" class="btn btn-primary btn-block mb-3">Add Classes</a>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama kelas</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tingkat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $item)
                <tr>
                    <td>{{ $item->nama_kelas }}</td>
                    <td>{{ $item->fakultas }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->tingkat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
