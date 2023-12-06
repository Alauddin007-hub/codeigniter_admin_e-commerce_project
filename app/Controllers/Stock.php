<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Stock extends BaseController
{
    public function index()
    {
        return view('Stock/index');
    }
}
