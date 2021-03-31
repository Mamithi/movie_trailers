<?php


namespace App\Controllers;



use App\Models\User;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index() {
        helper(['form']);
        $data  = [];
        echo view('register', $data);
    }

    public function save() {
        helper(['form']);

        $rules = [
          'firstname' => 'required|min_length[3]|max_length[30]',
          'lastname' => 'required|min_length[3]|max_length[30]',
          'password' => 'required|min_length[3]|max_length[30]',
          'password_confirm' => 'matches[password]',
          'email' => 'required|valid_email',
        ];

        if($this->validate($rules)) {
            $model = new User();
            $data  = [
              'firstname' => $this->request->getVar('firstname'),
              'lastname' => $this->request->getVar('lastname'),
              'email' => $this->request->getVar('email'),
              'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),

            ];
            $model->save($data);
            return redirect()->to('/login');
        }else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }

}