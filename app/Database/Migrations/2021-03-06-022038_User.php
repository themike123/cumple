<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$fields = [
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true
			],
			'username'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '20',
					'unique'         => true,
			],
			'password'      => [
					'type'           =>'VARCHAR',
					'constraint'     => 100,
					'null'        	 => false,
			],
			'email' => [
					'type'           => 'VARCHAR',
					'constraint'     => 50,
					'null'           => true,
			]
		];
		$this->forge->addField($fields);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
