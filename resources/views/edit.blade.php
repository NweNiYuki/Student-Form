@extends('layout')
@section('content')

<div class="container">
   
   <div class="jumbotron">

     <!-- Image and text -->
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="">
            <i class="feather-user-plus"></i>
            Updating Student Form
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

      <form action="/student/{{ $student->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" onkeyup="this.value = this.value.toUpperCase();" value="{{ $student->name}}">
      </div>

      <div class="form-group">
        <label for="rollno">Roll Number</label>
        <input type="integer" class="form-control" id="rollno" name="rollno" placeholder="eg@ IT-4" value="{{ $student->rollno }}">
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Information Technology" onkeyup="this.value = this.value.toUpperCase();" value="{{ $student->subject }}">
      </div>

      <div class="form-row">
    
        <div class="form-group col-md-1">
          <label for="initial">Initial</label>
          <select id="initial" name="initial" class="form-control">
            <option>{{ $student->initial}}</option>
            <option>1</option>
            <option>12</option>
            <option>6</option>
            <option>5</option>
            <option>3</option>
            <option>7</option>
            <option>7</option>
            <option>7</option>
          </select>
        </div>
        {{-- {{$student->townshipstate}} --}}
        <div class="form-group col-md-2">
          <label for="township_id">Township</label>
          <select  name="township_id" id="township_id" class="form-control" >
            @foreach ($township as $value)
            <option value="{{ $value->id }}"
              {{ $student->townshipstate->id == $value->id ? "selected" : "" }}> {{ $value->shortname }}
            </option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-1">
          <label for="nation">Nation</label>
          <select id="nation" name="nation" class="form-control"> 
            <option>{{ $student->nation }}</option>
            <option>C</option>
            <option>N</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="idno">Your Id Number</label>
          <input type="text" name="idno" id="idno" class="form-control" value="{{ $student->idno }}" >
        </div>
     </div>
     
      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="integer" class="form-control" name="email" id="email" placeholder="example@gmailcom" onkeyup="this.value = this.value.toLowerCase();" value="{{ $student->email }}">
      </div>
 
      <div class="form-group">
        <label for="address">Your Address</label>
        <input type="integer" class="form-control" name="address" id="address" placeholder="Enter Address" onkeyup="this.value = this.value.toUpperCase();" value="{{ $student->address }}">
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="integer" class="form-control" name="phone" id="phone" placeholder="Enter 09777777777" minlength="9" maxlength="11" required value="{{ $student->phone }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="customFile">Image upload</label>
        <input type="file"  name="rimage" />
        <img src="{{ '/images/'. $student->cover }}" alt="" height="100">
      </div>

      <input type="submit" class="btn btn-primary">
      <a href="/student" class="btn btn-info" >Back...</a>
      
    </form>
   </div>
        
</div>

    
@endsection

    