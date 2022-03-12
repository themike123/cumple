<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Invitacion extends Migration
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
			'nombre'       => [
					'type'           => 'VARCHAR',
					'constraint'     => 100,					
			],
			'numero_personas'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'nombre_tutor'      => [
					'type'           =>'VARCHAR',
					'constraint'     => 100,					
			],
			'email'      => [
				'type'           =>'VARCHAR',
				'constraint'     => 100,					
			],
			'celular' => [
					'type'           => 'VARCHAR',
					'constraint'     => 50,					
			],
			'telefono' => [
					'type'           => 'VARCHAR',
					'constraint'     => 50,					
			],
			'domicilio' => [
					'type'           => 'VARCHAR',
					'constraint'     => 200,					
			],
			'referencia' => [
				'type'           => 'TEXT',
		]
		];
		$this->forge->addField($fields);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('invitacion');
	}

	public function down()
	{
		$this->forge->dropTable('invitacion');
	}
}
