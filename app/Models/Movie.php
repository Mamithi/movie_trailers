<?php


namespace App\Models;


use CodeIgniter\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $allowedFields = ['users_id','title', 'desc', 'thumbnail', 'video', 'release_date', 'created_at', 'updated_at'];
}