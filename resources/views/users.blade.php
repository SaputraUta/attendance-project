@extends('layouts.main')

@section('container')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb adminx-page-breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </nav>

    <div class="pb-3">
        <h1>Users</h1>

    </div>

    <a href="/adduser" class="btn btn-primary btn-block mb-3">Add User</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Join date</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mark</td>
                <td>27-10-23</td>
                <td>Asssistant</td>
            </tr>
            <tr>
                <td>Jacob</td>
                <td>08-12-21</td>
                <td>PJ</td>
            </tr>
            <tr>
                <td>Saputra</td>
                <td>09-03-02</td>
                <td>Staff</td>
            </tr>
        </tbody>
    </table>
@endsection
