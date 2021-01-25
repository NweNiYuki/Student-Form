@extends('layout')
@section('content')

<h1 class="mt-5 mb-5">
    Manage Student List </h1>
    <table class="table table-striped table-bordered">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Subject</th>
            <th>ID Number</th>
            <th>Your Email</th>
            <th>Your Address</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Mg Mg</td>
            <td>2</td>
            <td>IT</td>
            <td>12/nak333</td>
            <td>exam@mail.com</td>
            <td>Insein</td>
            <td>726382892</td>
            <td>
                <button class="btn btn-info">View</button>
            </td>
        </tr>

    </table>

@endsection