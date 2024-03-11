@extends('layouts.main')

@section('container')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb adminx-page-breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Materials</li>
        </ol>
    </nav>

    <div class="pb-3">
        <h1>Materials</h1>
    </div>

    <a href="/materials/create" class="btn btn-primary btn-block mb-3">Add Materials</a>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Materials name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->materi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
