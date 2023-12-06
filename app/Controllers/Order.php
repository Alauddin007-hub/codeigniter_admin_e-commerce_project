<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function index()
    {
        return view('order/index');
    }

    public function details(){
        return view('order/order_details');
    }
}
