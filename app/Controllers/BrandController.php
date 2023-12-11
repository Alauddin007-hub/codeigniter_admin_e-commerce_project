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
        $data = [
            'brand_name' =>$this->request->getVar('bname'),
            'brand_description' =>$this->request->getVar('description'),
        ];
        // print_r($data);
         $rules = [
            'bname' => 'required|max_length[30]|min_length[3]',
            'description' => 'required|max_length[150]|min_length[10]',
         ];

         if(! $this->validate($rules)){
            return view('brand/addBrand');
         } else {
            $this->brand->insert($data);
            $session = session();
            $session->setFlashdata('msg','Category Inserted and uploaded Successfully');
            $this->response->redirect('/brand');
         }
    }
}
