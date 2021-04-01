<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $admin = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'admin@gmail.com',
            'password' => password_hash('password', PASSWORD_DEFAULT)
        ];

        $this->db->table('users')->insert($admin);

        $user = [
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'email' => 'user@gmail.com',
            'password' => password_hash('password', PASSWORD_DEFAULT)
        ];

        $this->db->table('users')->insert($user);
    }
}