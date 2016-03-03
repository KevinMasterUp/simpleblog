<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	/*
	  所有生成测试用例文件调用入口文件 
	*/


	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ArticleTableSeeder');
		$this->call('PageTableSeeder');
		$this->call('SentrySeeder');

	}

}
