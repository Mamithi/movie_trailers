<?php


namespace App\Controllers;


use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index() {
        $session = Session();
        echo "welcome back, ".$session->get('firstname');
    }
}