<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $admin = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'admin@test.com',
            'password' => password_hash('password', PASSWORD_DEFAULT)
        ];

        $this->db->table('users')->insert($admin);
    }
}