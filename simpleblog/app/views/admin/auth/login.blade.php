@extends('admin._layouts.default')

@section('main')

    <h1> kk blog页面登录</h1>
    {{ Form::open() }}

      @if ($errors->has('login'))

        {{ $errors->first('login', ':message') }}
      
      @endif

        
        {{ Form::label('email', 'Email') }}        
        {{ Form::text('email') }}</br></br>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }} </br></br>    
        {{ Form::submit('Login', array('class' => 'btn btn-inverse btn-login')) }}

    {{ Form::close() }}
  
@stop