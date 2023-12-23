<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class SigninController extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        return view('login');
    }

    public function login(){
        
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $formpass = $this->request->getVar('pass');
                   
        $data = $userModel->where('user_email', $email)->first();
       
        if($data){
            $dbpass = $data['user_password'];
            $varified = password_verify($formpass, $dbpass);
                if($varified){
                    $userData = [
                        "name" => $data['user_name'],
                        "email" => $data['user_email'],
                        "user_role" =>  $data['user_role'],
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($userData);
                    return redirect()->to('/');

                //     if($data['user_role']=="Admin"){
                //              return redirect()->to('/');
                //     }
                //     if($data['user_role']=="Editor"){
                //         return redirect()->to('/editor');
                //    }

                    
                   
                }   else {
                    $session->setFlashdata('Success', 'Your Password is incorrect');
                    return redirect()->to('/signin');
                }
    
        } else {
            $session->setFlashdata('Success', 'Your Email is incorrect');
            return redirect()->to('/signin');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('signin');
    }
}
