<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Eventtable extends Migration
{
	public function up()
	{
		$this->forge->addField([
      'EID'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
		 	'UID'      			=> ['type' => 'INT'],
			'category'     	=> ['type' => 'VARCHAR', 'constraint' => '255'],
		 	'tema'      		=> ['type' => 'VARCHAR', 'constraint'  => '255'],
		 	'judul'      		=> ['type' => 'VARCHAR', 'NULL' => TRUE, 'constraint' => '255'],
			'kata'      		=> ['type' => 'VARCHAR', 'NULL' => TRUE, 'constraint' => '255'],
			'progress'    	=> ['type' => 'VARCHAR', 'constraint' => '255', 'NULL' => TRUE, 'default' => 'Waiting Approval'],
			'wag'      		 	=> ['type' => 'VARCHAR', 'NULL' => TRUE, 'constraint' => '255'],
			'start_date'    => ['type' => 'DATE'],
			'end_date'      => ['type' => 'DATE'],
			'brochure'    	=> ['type' => 'VARCHAR', 'constraint' => '255', 'default' =>  'default.jpg'],
			'approve'     	=> ['type' => 'ENUM', 'constraint' => '"Approved", "No", "Waiting"', 'default' =>  'No'],
			'created_at'   	=> ['type' => 'DATETIME'],
			'updated_at'   	=> ['type' => 'DATETIME'],
  ]);
  $this->forge->addKey('EID', TRUE);
  $this->forge->createTable('event_tbl');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('event_tbl');
	}
}
