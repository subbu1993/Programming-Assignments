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
                DB::table('tags')->insert([
                //,
                'value' => $faker->text($maxNbChars = 10),
                ]);
        }
    }
}
