<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BrandModel;


class BrandController extends BaseController
{
    private $brand;
    public function __construct(){
        $this->brand = new BrandModel();
    }
    public function index()
    {
        $data['brands'] = $this->brand->findAll();
        return view('brand/brandList', $data);
    }
    public function create(){
        return view('brand/addBrand');
    }
    public function store(){
        
    }
}
