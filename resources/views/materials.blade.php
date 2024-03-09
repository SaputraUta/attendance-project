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

    <a href="/addmaterials" class="btn btn-primary btn-block mb-3">Add Materials</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Materials name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>IPA</td>
            </tr>
            <tr>
                <td>IPS</td>
            </tr>
            <tr>
                <td>Bahasa Indonesia</td>
            </tr>
        </tbody>
    </table>
@endsection
