@extends('layout.app')
@section('content')
</section>
<h1 class="text-center">ToDos</h1>
@if(count($todos) > 0)
  @foreach($todos as $todo)
  <div class="Well clearfix">
    <h3 class="text-success"><a href="todo/{{$todo->id}}">{{$todo->text}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bg-danger text-warning rounded float-right">{{$todo->due}}</span></a></h3>
    <hr class="dropdown-divider">
  </div>
  @endforeach
@endif
@endsection
