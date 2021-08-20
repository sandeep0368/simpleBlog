<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionSeeder extends Seeder
{
	public function run()
	{
		$model = model('TransactionModel');
		for ($i = 0; $i < 50; $i++) {
			$model->insert([
				'user_id'      => static::faker()->randomNumber(),
				'amount' => static::faker()->randomFloat(null, 1.0),
			]);
		}
	}
}
