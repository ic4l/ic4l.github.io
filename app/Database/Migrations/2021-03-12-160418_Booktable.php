<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Booktable extends Migration
{
	public function up()
	{
		$this->forge->addField([
      'BID'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
			'ISBN'     	=> ['type' => 'VARCHAR', 'constraint' => '255'],
			'title'     	=> ['type' => 'VARCHAR', 'constraint' => '255'],
		 	'publisher'      		=> ['type' => 'VARCHAR', 'constraint'  => '255'],
		 	'author'      		=> ['type' => 'VARCHAR', 'NULL' => TRUE, 'constraint' => '255'],
			'editor'      		=> ['type' => 'VARCHAR', 'NULL' => TRUE, 'constraint' => '255'],
			'layouter'    	=> ['type' => 'VARCHAR', 'constraint' => '255', 'NULL' => TRUE, 'default' => 'Waiting Approval'],
			'copyright'      		 	=> ['type' => 'VARCHAR', 'NULL' => TRUE, 'constraint' => '255'],
			'printing'    => ['type' => 'DATE'],
			'designer'      => ['type' => 'DATE'],
			'page'    	=> ['type' => 'VARCHAR', 'constraint' => '255', 'default' =>  'default.jpg'],
			'genre'     	=> ['type' => 'ENUM', 'constraint' => '"Approved", "No", "Waiting"', 'default' =>  'No'],
			'category'   	=> ['type' => 'DATETIME'],
			'created_at'   	=> ['type' => 'DATETIME'],
			'updated_at'   	=> ['type' => 'DATETIME'],
			'deleted_at'   	=> ['type' => 'DATETIME'],
  ]);
  $this->forge->addKey('BID', TRUE);
  $this->forge->createTable('book_tbl');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('book_tbl');
	}
}
