@extends('layouts.default')

@section('content')
  <h1>Create New User</h1>

  {!! Form::open(['route' => 'create']) !!}

  <div>
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name') !!}
    {!! $errors->first('name') !!}
  </div>

  <div>
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email') !!}
    {!! $errors->first('email') !!}
  </div>

  <div>{!! Form::submit('Create User') !!}</div>

  {!! Form::close() !!}
@stop
