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
}
