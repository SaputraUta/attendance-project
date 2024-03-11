@extends('layouts.main')

@section('container')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb adminx-page-breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <div class="pb-3">
        <h1>Attendance form</h1>
    </div>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($attendance)
                        <form action="/" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="attendance_id" value="{{ $attendance->id }}">
                            <button type="submit" class="btn btn-danger">Check-out</button>
                        </form>
                    @else
                        <form action="/" method="POST">
                            @csrf
                            <select class="form-select mb-3" name="id_kelas" id="id_kelas"
                                aria-label="Default select example" required>
                                <option selected>Select classes</option>
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                            @error('id_kelas')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                            <select class="form-select mb-3" name="id_material" id="id_material"
                                aria-label="Default select example" required>
                                <option selected>Select material</option>
                                @foreach ($materials as $material)
                                    <option value="{{ $material->id }}">{{ $material->materi }}</option>
                                @endforeach
                            </select>
                            @error('id_material')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                            <select class="form-select mb-3" name="teaching_role" id="teaching_role"
                                aria-label="Default select example" required>
                                <option selected>Select teaching role</option>
                                <option value="Leader">Leader</option>
                                <option value="Assitant">Assitant</option>
                                <option value="Technician">Technician</option>
                            </select>
                            @error('teaching_role')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="code">Absence code</label>
                                <input type="text" class="form-control" id="code" name="code"
                                    placeholder="Masukkan Kode Absen" required>
                                @error('code')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="alert alert-info">
                                <p>*Please ask other assistant for the code</p>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Check-in</button>
                            </div>
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
