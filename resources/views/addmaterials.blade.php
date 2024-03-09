@extends('layouts.main')

@section('container')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb adminx-page-breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add materials</li>
        </ol>
    </nav>

    <div class="pb-3">
        <h1>Add materials</h1>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="" method="">
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama materi</label>
                        <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
