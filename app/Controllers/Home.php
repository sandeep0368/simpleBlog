<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('pages/home');
		echo view('templates/footer');
	}

	public function add_customer()
	{
		echo view('templates/header');
		echo view('pages/addCustomer');
		echo view('templates/footer');
	}
}
