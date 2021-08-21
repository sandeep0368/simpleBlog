<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
	public function up()
	{
		$this->forge->addField('id primary key auto increament');
		$this->forge->addField("first_name varchar(20)");
		$this->forge->addField("last_name varchar(20)");
		$this->forge->addField("mobile_no varchar(20)");
		$this->forge->addField("email varchar(20)");
		$this->forge->addField("gender enum('male','female')");
		$this->forge->addField("created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
		$this->forge->addField("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
		$this->forge->createTable('customers', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('customers', TRUE);
	}
}
