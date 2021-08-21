<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CustomerSeeder extends Seeder
{
	public function run()
	{
		$model = model('CustomerModel');
		$faker = \Faker\Factory::create();

		for ($i = 0; $i < 10; $i++) {
			$model->insert([
				'first_name'       =>    $faker->name,
				'last_name'        =>    $faker->name,
				'email'		       =>    $faker->email,
				'mobile_no'        =>    $faker->phoneNumber,
				'gender'           =>    'male',
				'created_at'  =>    Time::createFromTimestamp($faker->unixTime()),
				'updated_at'  =>    Time::now()
			]);
		}
	}
}
