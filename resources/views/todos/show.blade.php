@extends('layout.app')

@section('content')
  <a href="/" class="btn btn-info mt-3">Go Back</a>
  <hr class="dropdown-divider mb-2 mt-2">
  <a href="/todo/{{$todo->id}}/edit" class="btn btn-info float-right">Edit</a>
  <h3 class="text-success"><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
  <p class="bg-danger text-warning rounded" style="display: inline-block">{{$todo->due}}</p>
  <p>{{$todo->body}}</p>
  <hr class="dropdown-divider">
@endsection
