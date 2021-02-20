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

      <form action="/student" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name" onkeyup="this.value = this.value.toUpperCase();" value="{{old('name')}}">
      </div>

      <div class="form-group">
        <label for="rollno">Roll Number</label>
        <input type="integer" class="form-control" name="rollno" placeholder="eg@ IT-4" value="{{old('rollno')}}">
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject" placeholder="Information Technology" onkeyup="this.value = this.value.toUpperCase();" value="{{old('subject')}}">
      </div>


     <div class="form-row">
    
        <div class="form-group col-md-1">
          <label for="initial">Initial</label>
          <select id="initial" name="initial" class="form-control">{{ old('initial')}}
            <option selected>12</option>
            <option>1</option>
            <option>16</option>
            <option>6</option>
            <option>5</option>
            <option>3</option>
            <option>7</option>
            <option>7</option>
            <option>7</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="township">Township</label>
          <select id="township_id" name="township_id" class="form-control">{{ old('township_id')}}
            @foreach ($township as $value )
            <option value="{{ $value->id }}">{{ $value->shortname }}</option>
            @endforeach

          </select>
        </div>
        <div class="form-group col-md-1">
          <label for="nation">Nation</label>
          <select id="nation" name="nation" class="form-control">{{ old('nation')}}
            <option selected>N</option>
            <option>C</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="idno">Your Id Number</label>
          <input type="text" name="idno" class="form-control" minlength="6" maxlength="6" value="{{ old('idno')}}" >
        </div>
     </div>

      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="integer" class="form-control" name="email" placeholder="example@gmailcom" onkeyup="this.value = this.value.toLowerCase();" value="{{old('email')}}">
      </div>

      <div class="form-group">
        <label for="address">Your Address</label>
        <input type="integer" class="form-control" name="address" placeholder="Enter Address" onkeyup="this.value = this.value.toUpperCase();" value="{{old('address')}}">
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="integer" class="form-control" name="phone" placeholder="Enter 09777777777" minlength="9" maxlength="11" required value="{{old('phone')}}">
      </div>

      <div class="form-group">
        <label class="form-label" for="customFile">Image upload</label>
        <input type="file" name="rimage"  value="{{ old('rimage')}}"/>
      </div>

      <input type="submit" class="btn btn-primary">
      <a href="/student" class="btn btn-info" >Back...</a>
      
    </form>
   </div>
        
</div>

    
@endsection

    