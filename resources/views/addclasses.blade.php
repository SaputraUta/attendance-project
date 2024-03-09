@extends('layouts.main')

@section('container')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb adminx-page-breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add classes</li>
        </ol>
    </nav>

    <div class="pb-3">
        <h1>Add classes</h1>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="" method="">
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama kelas</label>
                        <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" name="fakultas" id="fakultas" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Tingkat</label>
                        <input type="text" class="form-control" name="tingkat" id="tingkat" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
