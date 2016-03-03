@extends('admin._layouts.default')
 
@section('main')
 
    <h2>新增一个页面</h2>

    {{ Notification::showAll() }}
     
    @if ($errors->any())
         {{ implode('<br>', $errors->all()) }}
    @endif

    {{ Form::open(array('route' => 'admin.pages.store')) }}

            {{ Form::label('title', 'Title') }}
            
            {{ Form::text('title') }}</br></br>

            {{ Form::label('body', 'Content') }}
           
            {{ Form::textarea('body') }}</br></br>

            {{ Form::submit('新增') }}
            
    {{ Form::close() }}

@stop