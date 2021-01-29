@extends('layout')
@section('content')

    <h1 class="mt-5 mb-5">
        <i class="feather-users"></i>
        Manage Student List 
    </h1>
    <div class="input-group">
        <div class="form-outline">
          <input id="search-input" type="search" id="form1" class="form-control" />
          <label class="form-label" for="form1">Search</label>
        </div>
        <button id="search-button" type="button" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </div>
  
    <div style="float: right">
       <a href="uni/create" ><button  style="color: #FF9800" class="btn btn-dark"><i class="feather-plus"></i> Add New Student</button></a>
       
    </div>

    <table class="table table-striped table-bordered">
        
        <tr>
            <th><i class="feather-align-justify"></i> ID</th>
            <th><i class="feather-user-check"></i> Name</th>
            <th>Roll Number</th>
            <th>Subject</th>
            <th>ID Number</th>
            <th><i class="feather-mail"></i> Your Email</th>
            <th><i class="feather-home"></i> Your Address</th>
            <th><i class="feather-phone-call"></i> Phone</th>
            <th>Image </th>
            <th>Actions</th>
        </tr>

        <tr>
            @foreach ($uni as $student)

            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->rollno }}</td>
            <td>{{ $student->subject }}</td>
            <td>{{ $student->idno }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->phone }}</td>
           
            <td>
               
                <img src="{{'/images/'. $student->cover }}" alt=""  height="130" width="130">
        
            </td>
       
            
            <td>
                    
                <a href="show/{{$student->id}}"><button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="view detail">View</button></a>

                
                <a href="/uni/{{$student->id}}/edit"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="edit"><i class="feather-edit"></i></button></a>
                
            </td>
            
            <td>
                <form action="/uni/{{ $student->id }}" method="post">
                    @csrf
                    @method("DELETE")

                <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="remove"><i class="feather-trash-2"></i></button>

                </form>
                
            </td>
        
        </tr>

    
        @endforeach

  
    </table>

@endsection