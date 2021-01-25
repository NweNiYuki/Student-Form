@extends('layout')
@section('content')

<div class="container">
   
   <div class="jumbotron">
     <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="views/logo/create.jpg" alt=""  width="30" height="24" class="d-inline-block align-top">
      Creating Student Form
    </a>
  </div>
</nav>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="" placeholder="Enter Name">
      </div>

      <div class="form-group">
        <label for="rollno">Roll Number</label>
        <input type="integer" class="form-control" id="rollno" placeholder="eg@ IT-4">
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" placeholder="Information Technology">
      </div>

      <div class="form-group">
        <label for="idno">ID Number</label>
        <input type="integer" class="form-control" id="idno" placeholder="eg@ 12/ASaNa(N)123456">
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="integer" class="form-control" id="address" placeholder="Enter Address">
      </div>

      <input type="submit" class="btn btn-primary">
      
   </div>
        
</div>

    
@endsection

    