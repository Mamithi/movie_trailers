<?php


namespace App\Controllers;


use App\Models\User;
use CodeIgniter\Controller;
use phpDocumentor\Reflection\Types\True_;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = Session();
        $model = new User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verifyPassword = password_verify($password, $pass);
            if ($verifyPassword) {
                $sessionData = [
                    'id' => $data['id'],
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'email' => $data['email'],
                    'logged_in' => true
                ];
                $session->set($sessionData);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Credentials');
                return redirect() - to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Uer Does not exist');
            return redirect()->to('/login');
        }


    }

    public function logout()
    {
        $session = Session();
        $session->destroy();
        return redirect()->to('/login');
    }

}