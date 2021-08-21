<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			[
				'id' => 1,
				'name' => 'mark',
				'mobile_no' => '+91 9502960368',
				'taken_amount' => 45000,
				'interest' => '5%',
				'days' => 30
			],
			[
				'id' => 1,
				'name' => 'Shin Chan',
				'mobile_no' => '+91 9502960368',
				'taken_amount' => 5000,
				'interest' => '5%',
				'days' => 45
			],
			[
				'id' => 1,
				'name' => 'Heroshi',
				'mobile_no' => '+91 9502960368',
				'taken_amount' => 68000,
				'interest' => '5%',
				'days' => 45
			]
		];
		echo view('pages/home', compact('data'));
	}
	public function add_customer()
	{
		echo view('pages/addCustomer');
	}
}
