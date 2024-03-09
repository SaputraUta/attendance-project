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
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="" method="">
                        <div class="form-group">
                            <label for="id_user">ID Asisten</label>
                            <input type="text" class="form-control" id="id_user" name="id_user"
                                placeholder="Masukkan ID Asisten" required>
                        </div>
                        <select class="form-select mb-3" name="classes" id="classes" aria-label="Default select example" required>
                            <option selected>Select classes</option>
                            <option value="XI A">XI A</option>
                            <option value="XI B">XI B</option>
                            <option value="XI C">XI C</option>
                        </select>
                        <select class="form-select mb-3" name="material" id="material" aria-label="Default select example" required>
                            <option selected>Select material</option>
                            <option value="IPS">IPS</option>
                            <option value="IPA">IPA</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        </select>
                        <select class="form-select mb-3" name="teaching_role" id="teaching_role"
                            aria-label="Default select example" required>
                            <option selected>Select teaching role</option>
                            <option value="Leader">Leader</option>
                            <option value="Assitant">Assitant</option>
                            <option value="Technician">Technician</option>
                        </select>
                        <div class="form-group">
                            <label for="code">Absence code</label>
                            <input type="text" class="form-control" id="code" name="code"
                                placeholder="Masukkan Kode Absen" required>
                        </div>
                        <div class="alert alert-info">
                            <p>*Please ask other assistant for the code</p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Check-in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
