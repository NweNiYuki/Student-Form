@extends('layout')
@section('content')

<div class="container">
  
        <h1>Add New Township</h1>
       
        <form action="/township" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Township</label>
                    <input type="text" id="name" name="name" class="form-control" >
                </div>
            
                <div class="form-group col-md-6">
                    <label for="shortname">ShortName</label>
                    <input type="text" id="shortname" name="shortname" class="form-control" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="code">Code</label>
                    <input type="text" id="code" name="code" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <textarea name="description"  class="form-control"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary">
            <a href="/student" class="btn btn-info" >Back...</a>
        
       </div>
        <br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Township</th>
                    <th>ShortName</th>
                    <th>code</th>
                    <th>Description</th>
                    <th>Modify</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($townships as $nrc)
                <tr>
                    <td>{{ $nrc->id }}</td>
                    <td>{{ $nrc->name }}</td>
                    <td>{{ $nrc->shortname }}</td>
                    <td>{{ $nrc->code }}</td>
                    <td>{{ $nrc->description }}</td>
                </form>

                <td>
                        <a href="/township/{{ $nrc->id }}/township_edit"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="edit"><i class="feather-edit"></i></button></a>
                </td>
                <form action="/township/{{ $nrc->id }}" method="post">
                    @csrf
                    @method("DELETE")
                    <td>
                        <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="remove"><i class="feather-trash-2"></i></button>
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
   
</div>
@endsection