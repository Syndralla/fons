@extends('layouts.app')

@section('content')
<h1> Edit Client Details</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
      {!! Form::open (['action'=> ['DashboardController@update', $person->id], 'method'=> 'POST'])!!}  
    <form>
   <div class="form-group">
    <label for="exampleInputFirstname">Firstname</label>
    <input type="text" class="form-control" id="exampleInputFirstname" name="firstname" placeholder="Firstname">
  </div>
     <div class="form-group">
    <label for="exampleInputSurname">Surname</label>
    <input type="text" class="form-control" id="exampleInputSurname" name="surname" placeholder="Surname">
  </div>
     <div class="form-group">
    <label for="exampleInputID">ID</label>
    <input type="text" class="form-control" id="exampleInputID" name="userid" placeholder="ID">
  </div>
     <div class="form-group">
    <label for="exampleInputHomeaddress">Homeaddress</label>
    <input type="text" class="form-control" id="exampleInputHomeaddress" name="address" placeholder="Homeaddress">
  </div>
  <div class="form-group">
    <label for="exampleInputPhonenumber">Phonenumber</label>
    <input type="text" class="form-control" id="exampleInputPhonenumber" name="phone" placeholder="Phonenumber">
  </div>
   <div class="form-group">
    <label for="exampleInputGender">Gender</label>
    <input type="text" class="form-control" id="exampleInputGender" name="gender" placeholder="Gender">
  </div>
     <button type="submit" class="btn btn-outline-primary ">Save</button>
     <button type="button" class="btn btn-outline-warning">reset</button>
   <button type="button" class="btn btn-outline-danger">Cancel</button>
</form>
        </div>
    </div>
</div>
 {{Form::hidden('_method','PUT')}}  
    <form>
{!! Form::close() !!}  
@endsection
