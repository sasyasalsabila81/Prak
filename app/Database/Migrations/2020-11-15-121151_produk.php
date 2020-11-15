<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'              => [
				'type' => 'INT',
				'costraint' => 11, 
				'auto_incremen' => true,
			],
			'nama_produk' => [
				'type' => 'VARCHAR',
				'constraint' => 128,
			],
			'deskripsi_produk' => [
				'type' => 'TEXT',
				'constraint' => 128,
			],
			'craeted' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('produk');
	}



	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('produk');
	}
}
