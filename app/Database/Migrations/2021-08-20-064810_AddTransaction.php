<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransaction extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_id'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'amount' => [
				'type' => 'float',
			],
		]);
		$this->forge->addField("start_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("end_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
		$this->forge->addKey('id', true);
		$this->forge->createTable('transactions', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('transactions', TRUE);

	}
}
