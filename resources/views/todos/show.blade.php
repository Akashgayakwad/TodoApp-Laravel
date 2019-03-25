@extends('layout.app')

@section('content')
  <a href="/" class="btn btn-info text-light mt-3">Go Back</a>
  <hr class="dropdown-divider mb-2 mt-2">
  <div class="float-right clearfix">
    <a href="/todo/{{$todo->id}}/edit" class="btn text-light btn-info float-left mr-2">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
       {{ Form::hidden('_method', 'DELETE')}}
       {{ Form::bsSubmit('Delete')}}
    {!! Form::close() !!}
  </div>
  <h3 class="text-success"><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
  <p class="bg-danger text-warning rounded" style="display: inline-block">{{$todo->due}}</p>
  <p>{{$todo->body}}</p>
  <hr class="dropdown-divider">
@endsection
