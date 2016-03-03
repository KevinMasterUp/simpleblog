@extends('admin._layouts.default')
 
@section('main')
 
    <h2>内容</h2>

        <h3>{{ $page->title }}</h3>
        	<div style="font-family: 楷体">
        	{{ $page->body }}
        	</div> </br>
            由{{ $author }}发布于{{ $page->created_at }}
       		</br>
            最后更新{{ $page->updated_at }}
 
@stop