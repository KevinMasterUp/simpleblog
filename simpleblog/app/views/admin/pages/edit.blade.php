@extends('admin._layouts.default')
 
@section('main')
 
    <h2>编辑页面</h2>

    {{ Notification::showAll() }}
     
    @if ($errors->any())
         {{ implode('<br>', $errors->all()) }}
    @endif

    {{ Form::model($page, array('method' => 'put', 'route' => array('admin.pages.update', $page->id))) }}

            {{ Form::label('title', 'Title') }}
            {{ Form::text('title') }}</br></br>

            {{ Form::label('body', 'Content') }}
            {{ Form::textarea('body') }}</br></br>

            {{ Form::submit('更新', array('class' => 'btn btn-success btn-save btn-large')) }}

    {{ Form::close() }}
 
@stop