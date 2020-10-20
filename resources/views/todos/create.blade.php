@extends('layouts.app')
    @section('content')
      <h1>Create Todos</h1>
      
        {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{Form::text('text', '', ['class' => 'form-control', 'placeholder' => 'Enter Text'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('body', 'Content') }}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter Content'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('due', 'Due On') }}
        {{Form::text('due', '', ['class' => 'form-control', 'placeholder' => 'Enter Due Date'])}}
        </div>
        
        <div class="form-group">
         {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        </div>
        
        
        {!! Form::close() !!}
@endsection