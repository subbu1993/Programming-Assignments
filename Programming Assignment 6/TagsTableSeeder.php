<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$faker = Faker\Factory::create();

        $limit = 40;
        for($i = 0; $i < $limit; $i++)
	{
               $tag =  DB::table('tags')->insert([
                //,
                'value' => $faker->text($maxNbChars = 10),
                ]);
		
        }
	
	$stories = App\Story::get();
	foreach($stories as $story)
	{
		$tag_id = rand(1,count(App\Tag::get()));
		DB::table('story_tag')->insert([
		'story_id' => $story->id,
		'tag_id' =>   $tag_id,
		]);
	}
    }
}
