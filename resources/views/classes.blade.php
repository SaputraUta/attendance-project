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

    <a href="/addclasses" class="btn btn-primary btn-block mb-3">Add Classes</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Class name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>XI B</td>
            </tr>
            <tr>
                <td>XI D</td>
            </tr>
            <tr>
                <td>XI C</td>
            </tr>
        </tbody>
    </table>
@endsection
