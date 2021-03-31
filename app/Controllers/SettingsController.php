<?php


namespace App\Controllers;


use App\Models\User;
use CodeIgniter\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('shared/header');
        echo view('changepassword');
        echo view('shared/footer');

    }

    public function save() {
        helper(['form']);
        $rules = [
            'password' => 'required|min_length[3]|max_length[30]',
            'password_confirm' => 'matches[password]',
        ];

        if($this->validate($rules)) {
            $model = new User();

            $session = Session();
            $id = (int)$session->get('id');

            $data  = [
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->update($id, $data);
            $locale = $session->get('lang');
            return redirect()->to('../' . $locale . '/movies');
        }else {
            $data['validation'] = $this->validator;
            echo view('shared/header');
            echo view('changepassword', $data);
            echo view('shared/footer');
        }
    }

}