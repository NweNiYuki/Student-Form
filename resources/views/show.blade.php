@extends('layout')
@section('content')

    <div class="container">
    <div class="jumbotron">
        <div class="card" style="width: 30rem;">
          
            <img src="{{'/images/'. $students->cover }}"  class="card-img-top" alt=""  height="300" align="center">
           
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Name >>{{ $students->name }}</li>
              <li class="list-group-item">Roll No >> {{ $students->rollno }}</li>
              <li class="list-group-item">Subject >> {{ $students->subject }}</li>
              <li class="list-group-item">IDNo >> {{ $students->idno }}</li>
              <li class="list-group-item">Email >> {{ $students->email }}</li>
              <li class="list-group-item">Address >> {{ $students->address }}</li>
              <li class="list-group-item">Phone >> {{ $students->phone }}</li>
              
            </ul>
            <div class="card-body">
              <a href="/uni" class="card-link">Back</a>
              <a href="#" class="card-link">Print Preview</a>
            </div>

            <div class="card-body">
              <h5 class="card-title"> <i class="feather-user-check"></i> {{ $students->name }}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          
        </div>
    </div>
    </div>

@endsection