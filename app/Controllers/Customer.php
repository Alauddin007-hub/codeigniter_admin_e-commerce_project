<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\OrderModel;
use App\Models\PaymentModel;
use App\Models\WishlistModel;


class Customer extends BaseController
{
    private $customer;
    public function __construct()
    {
        $this->customer = new CustomerModel();
    }
    public function index()
    {
        $data['items'] = $this->customer->findAll();
        $data['title'] = "Customer List";
       return view("customer/index", $data);
    }

    public function customer_details()
    {
        $data['title'] = "Customer Details";
        return view("customer/customerDetails",$data);
    }
}
