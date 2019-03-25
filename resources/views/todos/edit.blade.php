@extends('layout.app')
@section('content')
  <a href="/todo/{{$todo->id}}" class="btn btn-info  text-light mt-3 mb-2">Go Back</a>
  <h1>Edit Todo</h1>
  {!! Form::open(['action' => ['TodosController@update',$todo->id], 'method' => 'POST']) !!}
	   {{ Form::bsText('text',$todo->text)}}
     {{ Form::bsTextArea('body',$todo->body)}}
     {{ Form::bsText('due',$todo->due)}}
     {{ Form::hidden('_method', 'PUT')}}
     {{ Form::bsSubmit('Save!!')}}
  {!! Form::close() !!}
@endsection
