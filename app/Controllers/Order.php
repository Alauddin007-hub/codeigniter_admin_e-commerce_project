<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;


class Order extends BaseController
{
    private $order;
    public function __construct(){
        $this->order = new OrderModel;
    }
    public function index()
    {
        $data['orders'] = $this->order->findAll();
        $data['title'] = "Order List";
        return view('order/index', $data);
    }

    public function details(){
        return view('order/order_details');
    }
}
