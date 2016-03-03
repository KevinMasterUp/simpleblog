@extends('admin._layouts.default')

@section('main')

    {{ Notification::showAll() }}

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>lastUpdateTime</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td><a href="{{ URL::route('admin.pages.show', $page->id) }}">{{ $page->title }}</a></td>
                    <td>{{ $page->updated_at }}</td>
                    <td>
                        <a href="{{ URL::route('admin.pages.edit', $page->id) }}" class="btn btn-success btn-mini pull-left">编辑</a>
                    </td>
                    <td>
<!--                    {{ Form::open(array('route' => array('admin.pages.edit', $page->id))) }}
                            <button type="submit" href="{{ URL::route('admin.pages.edit', $page->id) }}">编辑</button>
                        {{ Form::close() }}  为什么不能这样写？？
 -->                     
                        {{ Form::open(array('route' => array('admin.pages.destroy', $page->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
                              <button type="submit" href="{{ URL::route('admin.pages.destroy', $page->id) }}" >删除</button>
                        {{ Form::close() }}
                    </td>
                
            @endforeach
        </tbody>
        <td>
        <a style="font-size: 30px" href="{{ URL::route('admin.pages.create') }}">新建</a>
        </td>
        </tr>
    </table>

@stop