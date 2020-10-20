@extends('layouts.app')
    @section('content')
      <h1>Edit Todos</h1>
      
        {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{Form::text('text', $todo->text, ['class' => 'form-control', 'placeholder' => 'Enter Text'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('body', 'Content') }}
        {{Form::textarea('body', $todo->body, ['class' => 'form-control', 'placeholder' => 'Enter Content'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('due', 'Due On') }}
        {{Form::text('due', $todo->due, ['class' => 'form-control', 'placeholder' => 'Enter Due Date'])}}
        </div>
        
        <div class="form-group">
        {{ Form::hidden('_method', 'PUT') }}
         {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
        </div>
        
        
        {!! Form::close() !!}
@endsection