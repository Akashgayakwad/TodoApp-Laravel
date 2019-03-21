@extends('layout.app')

@section('content')
  <a href="/" class="btn btn-info">Go Back</a>
  <h3 class="text-success"><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
  <div class="bg-danger text-warning rounded float-right">{{$todo->due}}</div>
  <p>{{$todo->body}}</p>
  <hr class="dropdown-divider">
@endsection
