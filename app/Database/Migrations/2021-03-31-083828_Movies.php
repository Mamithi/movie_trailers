<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Movies extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'users_id' => [
                'type' => 'INT'
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'desc' => [
                'type' => 'VARCHAR',
                'constraint' => 1000
            ],
            'thumbnail' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'video' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'release_date' => [
                'type' => 'datetime'
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('id');
//        $this->forge->addForeignKey('users_id','users','id');
        $this->forge->createTable('movies');
    }

    public function down()
    {
        $this->forge->dropTable('movsies');
    }
}
