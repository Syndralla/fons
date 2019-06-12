@extends('layouts.app')

@section('content')
<a href="/dashboard" class="btn btn=default">Go Back</a>
<h1>{{$person->}}</h1>
<div>
{!!$person->firstname!!}
{!!$person->surname!!}
{!!$person->userid!!}
{!!$person->address!!}
{!!$person->phone!!}
{!!$person->gender!!}
{!!$person->created_at!!}
<a href="/dashboard/{{$person->id}}/edit" class="btn btn-default"> Edit</a>
@endsection
