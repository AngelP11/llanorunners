<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompetitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 150; $i++) {
        	$valorGender = $faker->randomElement(['M', 'F']);

        	if ($valorGender == 'M') {
        		$valorName = $faker->firstNameMale;
        	} else {
        		$valorName = $faker->firstNameFemale;
        	}

        	\DB::table('competitors')->insert([
        		'name' => $valorName . ' ' . $faker->lastName,
        		'identification' => $faker->unique()->randomNumber('7', true),
        		'birthdate' => $faker->dateTimeThisCentury('now', date_default_timezone_get()),
        		'gender' => $valorGender,
        		'telephone' => $faker->phoneNumber,
        		'email' => $faker->unique()->email,
        		'club' => $faker->word,
        		'references_number' => $faker->numerify('########'),
        		'payment_date' => $faker->dateTimeThisCentury('now', date_default_timezone_get()),
        	]);
        }
    }
}
