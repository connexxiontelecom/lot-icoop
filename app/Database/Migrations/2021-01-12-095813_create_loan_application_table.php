<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLoanApplicationTable extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField(
			[
				'loan_app_id' =>[
					'type' => 'INT',
					'constraint' => 11,
					'auto_increment' => true,
				],

				'staff_id' =>[
					'type' => 'INT',
					'null'=>true,
				],

				'name' =>[
					'type' => 'VARCHAR',
					'null'=>true,
					'constraint'=>50
				],
				'duration' =>[
					'type' => 'INT',
					'null'=>true,
				],
				'amount' =>[
					'type' => 'DOUBLE',
					'null'=>true,
					'default'=>0
				],
				'loan_terms' =>[
					'type' => 'TEXT',
					'null'=>true
				],
				'guarantor' =>[
					'type' => 'INT',
					'null'=>true
				],
				'verified_by' =>[
					'type' => 'INT',
					'null'=>true
				],
				'verify_date'=>[
					'type'=>'DATETIME',
					'null'=>true
				],
				'approved_by' =>[
						'type' => 'INT',
						'null'=>true
					],
				'approve_date' =>[
						'type' => 'DATETIME',
						'null'=>true
					],
				'verify' =>[
						'type' => 'INT',
						'null'=>true,
						'default'=>0
					],
				'approve' =>[
						'type' => 'INT',
						'null'=>true,
						'default'=>0
					],
				'applied_date' =>[
						'type' => 'DATETIME',
						'null'=>true
					],
				'applied_by' =>[
						'type' => 'INT',
						'null'=>true
					],



			]
		);
		$this->forge->addKey('loan_app_id', true);
		$this->forge->createTable('loan_applications');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
