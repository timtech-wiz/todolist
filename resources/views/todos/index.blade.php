@extends('layouts.app')
    @section('content')
      <h1>All Todos</h1>
      @if(count($todos) > 0)
         @foreach($todos as $todo)
      <div class="well">
          <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
          <p>{{$todo->body}}</p>
          <small class="btn btn-danger">{{$todo->due}}</small>
      </div>
         @endforeach
      @endif   
@endsection