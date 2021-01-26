@extends('layout')
@section('content')

<div class="container">
   
   <div class="jumbotron">

     <!-- Image and text -->
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="">
            <i class="feather-user-plus"></i>
            Creating Student Form
          </a>
        </div>
      </nav>

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

      <form action="/uni" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
      </div>

      <div class="form-group">
        <label for="rollno">Roll Number</label>
        <input type="integer" class="form-control" name="rollno" placeholder="eg@ IT-4" value="{{old('rollno')}}">
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject" placeholder="Information Technology" value="{{old('subject')}}">
      </div>

      <div class="form-group">
        <label for="nameno">ID Number</label>
        <input type="integer" class="form-control" name="idno" placeholder="eg@ 12/ASaNa(N)123456" value="{{old('idno')}}">
      </div>

      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="integer" class="form-control" name="email" placeholder="example@gmailcom" value="{{old('email')}}">
      </div>

      <div class="form-group">
        <label for="address">Your Address</label>
        <input type="integer" class="form-control" name="address" placeholder="Enter Address" value="{{old('address')}}">
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="integer" class="form-control" name="phone" placeholder="Enter 09777777777" minlength="9" maxlength="11" required value="{{old('phone')}}">
      </div>

      <div class="form-group">
        <label class="form-label" for="customFile">Image upload</label>
        <input type="file" name="rimage" />
      </div>

      <input type="submit" class="btn btn-primary">
      
    </form>
   </div>
        
</div>

    
@endsection

    