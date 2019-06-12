@extends('layouts.app')
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.css">
</head>
@section('content')
<div class='container'>
 <table data-toggle="table" class="table table-striped" data-search="true"
 data-pagination="true">
    <nav class="navbar navbar-light bg-light">
   <ul class="nav navbar-nav navbar-right">
                    <li><a href="/addperson"> Add New</a></li>           
                    </ul>
  </nav>
</nav>
@include('inc.messages')
<thead>
    <tr>
      <th scope="col">  <div class="p-3 mb-2 bg-info text-white">Ref#</div></th>
      <th scope="col">  <div class="p-3 mb-2 bg-info text-white">Firstname</div></th>
      <th scope="col">  <div class="p-3 mb-2 bg-info text-white">Surname</div></th>
      <th scope="col">  <div class="p-3 mb-2 bg-info text-white">User-ID</div></th>
      <th scope="col">  <div class="p-3 mb-2 bg-info text-white">Phone</div></th>
      <th scope="col">  <div class="p-3 mb-2 bg-info text-white">Date</div></th>
    </tr>
  </thead>
  
    <tbody>
  @if(count($persons) > 0)
    @foreach($persons as $person)
    <tr>
      <td scope="row">{{$person->id}} </td>
      <td>{{$person->firstname}}</td>
      <td>{{$person->surname}}</td>
      <td>{{$person->userid}}</td>
      <td>{{$person->phone}}</td>
      <td>{{$person->created_at}}</td>
    </tr>
    @endforeach
    @endif
  
</table>
    </tr>
 
</div>

<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.js"></script>
</tbody>
@endsection