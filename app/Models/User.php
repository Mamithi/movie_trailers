<?php


namespace App\Models;

use CodeIgniter\Model;


class User extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'created_at', 'updated_at'];
}