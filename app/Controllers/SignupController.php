<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class SignupController extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function index()
    {
        $data = [];
        // $userModel = new UserModel();
        // $data['status'] = $userModel->findAll();
        return view('registration',$data);
    }
    public function store(){
    //     echo "Hello";
    //     $data = [
    //                     'user_name' => $this->request->getVar('name'),
    //                     'user_email' => $this->request->getVar('email'),
    //                     'user_password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
    //     ];
    //     print_r($data);
    //    $user = new UserModel();
    //    $user->save($data);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[tbl_user.user_email]',
            'pass'          => 'required|min_length[4]|max_length[255]',
            'conpass'       => 'matches[pass]'
        ];

       if($this->validate($rules)){
            $data = [
                'user_name' => $this->request->getVar('name'),
                'user_email' => $this->request->getVar('email'),
                'user_role' => $this->request->getVar('role'),
                'user_password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),

                
            ];
            print_r($data);
            $userModel = new UserModel();
            $userModel->save($data);
            $session = session();
            $session->setFlashdata('Success', 'Signup Completed');
            return redirect()->to('/signin');

       } else {
            $data['validation'] = $this->validator;
            return view('registration', $data);
       }

    }
}
