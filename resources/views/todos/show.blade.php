@extends('layouts.app')
    @section('content')
       <div class="well">
          <h3>{{$todo->text}}</h3>
          <p>{{$todo->body}}</p>
          <small class="btn btn-danger">{{$todo->due}}</small>
          <hr>
          <a class="btn btn-default" href="/todo/{{$todo->id}}/edit">Edit</a>
          
          {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
          {{ Form::hidden('_method', 'DELETE')}}
          {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
          {!! Form::close() !!}
          
      </div>
@endsection