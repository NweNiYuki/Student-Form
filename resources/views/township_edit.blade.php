@extends('layout')
@section('content')

<div class="container">
  
        <h1>Edit Township</h1>
       
        <form action="/township/{{ $township->id }}" method="post">
            @csrf
            @method("PATCH")
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Township</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $township->name }}" >
                </div>
            
                <div class="form-group col-md-6">
                    <label for="shortname">ShortName</label>
                    <input type="text" id="shortname" name="shortname" class="form-control" value="{{ $township->shortname }}"  >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="code">Code</label>
                    <input type="text" id="code" name="code" class="form-control" value="{{ $township->code }}"  >
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <textarea name="description"  class="form-control">{{ $township->description }} </textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary">
            <a href="/township" class="btn btn-info" >Back...</a>
        
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
                
                <tr>
                    <td>{{ $township->id }}</td>
                    <td>{{ $township->name }}</td>
                    <td>{{ $township->shortname }}</td>
                    <td>{{ $township->code }}</td>
                    <td>{{ $township->description }}</td>
                </form>
               
                    <td>
                        
                        <a href="/township/{{ $township->id }}/township_edit"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="edit"><i class="feather-edit"></i></button></a>
                    </td>
                    <form action="/township/{{ $township->id }}" method="post">
                        @csrf
                        @method("DELETE")
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="remove"><i class="feather-trash-2"></i></button>
                           
                        </td>
                </tr>
               
            </tbody>
        </table>
   
</div>
@endsection