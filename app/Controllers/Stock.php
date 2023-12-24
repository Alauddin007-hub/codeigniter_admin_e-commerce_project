<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Stock extends BaseController
{
    public function index()
    {
        $data['title'] = "Store List";
        return view('Stock/index',$data);
    }
}
