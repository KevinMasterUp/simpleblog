<?php

   /*
    	page控制器 负责blog页面的blog page的增添删改
   */

namespace App\Controllers\Admin;
 
use Page; //page 调用model
use Input, Notification, Redirect, Sentry, Str;


class PagesController extends \BaseController {
 
    public function index()
    {
        return \View::make('admin.pages.index')->with('pages', Page::all()); // 带数据'pages'调用index.blade.php page::all 查询全部
    }

    public function show($id)
    {
        return \View::make('admin.pages.show')->with('page', Page::find($id))->withAuthor(Sentry::findUserById(Page::find($id)->user_id)->name);//调用show 参数page中和user中用户信息
    }

    public function create()
    {
        return \View::make('admin.pages.create');// 调用create.blade.php
    }

    /*
    	增加
    */
    public function store()
    {
			$page          = new Page;
			$page->title   = Input::get('title');
			$page->body    = Input::get('body');
			$page->user_id = Sentry::getUser()->id;
            $page->save();
 
            Notification::success('新增页面成功！');
 
            return Redirect::route('admin.pages.index', $page->id);

    }

    /*
    	编辑
    */

    public function edit($id)
    {
        return \View::make('admin.pages.edit')->with('page', Page::find($id)); //edit.blade.php
    }

    /*
        更新
    */
    public function update($id)
    {

		$page          = Page::find($id);
		$page->title   = Input::get('title');
		$page->body    = Input::get('body');
		$page->user_id = Sentry::getUser()->id;
        $page->save();
        Notification::success('更新页面成功！');

        return Redirect::route('admin.pages.index', $page->id);
    }

 	 /*
    	删除
    */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        Notification::success('删除成功！');
        return Redirect::route('admin.pages.index');
    }

}

