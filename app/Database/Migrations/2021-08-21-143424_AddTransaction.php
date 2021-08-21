<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransaction extends Migration
{
	public function up()
	{
		$this->forge->addField('id int primary key not null auto_increment');
		$this->forge->addField('customers_id int not null');
		// $this->forge->addForeignKey('customers_id', 'customers', 'id');
		$this->forge->addField('CONSTRAINT FOREIGN KEY (customers_id) REFERENCES customers(id)');
		$this->forge->addField('amount float');
		$this->forge->addField('intrest float');
		$this->forge->addField('start_date varchar(20)');
		$this->forge->addField('end_date varchar(20)');
		$this->forge->createTable('transactions');
	}

	public function down()
	{
		$this->forge->dropTable('transactions', TRUE);
	}
}
