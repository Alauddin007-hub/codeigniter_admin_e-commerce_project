<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Customer extends BaseController
{
    public function index()
    {
       return view("customer/index");
    }

    public function customer_details(){
        return view("customer/customerDetails");
    }
}
