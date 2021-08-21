<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifEmailLength extends Migration
{
	public function up()
	{
		$field = ['email' => [
			'type'=> 'varchar',
			'constraint' => 50
		]];
		$this->forge->modifyColumn('customers', $field);
	}

	public function down()
	{
		//
	}
}
