<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;


class Customer extends BaseController
{
    private $customer;
    public function __construct(){
        $this->customer = new CustomerModel();
    }
    public function index()
    {
        $data['items'] = $this->customer->findAll();
        $data['title'] = "Customer List";
       return view("customer/index", $data);
    }

    public function customer_details(){
        return view("customer/customerDetails");
    }
}
