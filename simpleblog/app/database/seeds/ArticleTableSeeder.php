<?php

/*
  seeds 文件夹 生成各种测试用例
*/

use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Article::create([
			  'title'   => $faker->sentence($nbWords = 6),
			  'slug'    => 'first-post',
			  'body'    => $faker->paragraph($nbSentences = 5),
			  'user_id' => 1,
			]);
		}
	}

}