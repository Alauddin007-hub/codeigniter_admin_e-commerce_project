<?php

namespace App\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\CustomerModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Models\UserModel;


class Home extends BaseController
{
    protected $brand = '';
    protected $category = '';
    protected $customer = '';
    protected $product = '';
    protected $order = '';
    protected $user = '';

    public function __construct()
    {
        $this->brand = new BrandModel;
        $this->category = new CategoryModel;
        $this->customer = new CustomerModel;
        $this->product = new ProductModel;
        $this->order = new OrderModel;
        $this->user = new UserModel;
    }
    public function index(): string
    {
        $data['totalbrand'] = $this->brand->countAllResults();
        $data['totalcategory'] = $this->category->countAllResults();
        $data['totalcustomer'] = $this->customer->countAllResults();
        $data['totalproduct'] = $this->product->countAllResults();
        $data['totalorder'] = $this->order->countAllResults();
        $data['totaluser'] = $this->user->countAllResults();
        $data ['title'] = "Dashboard";
        return view('dashboard',$data);
    }
}
