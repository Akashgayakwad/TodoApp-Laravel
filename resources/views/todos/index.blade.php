@extends('layout.app')
@section('content')
</section>
<h1 class="text-center">todos</h1>
@if(count($todos) > 0)
  @foreach($todos as $todo)
  <div class="Well clearfix">
    <h3 class="text-success">{{$todo->text}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bg-danger text-warning rounded float-right">{{$todo->due}}</span></h3>
    <p>{{$todo->body}}</p>
  </div>
  @endforeach
@endif
@endsection
