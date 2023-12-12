<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;


class Products extends BaseController
{
    private $product;
    private $category;
    private $brand;

    public function __construct(){
        $this->product = new ProductModel;
        $this->category = new CategoryModel;
        $this->brand = new BrandModel;
    }
    public function index()
    {
        $data['items'] = $this->product->findAll();
        $data['title'] = "Product List";
        return view("product/index",$data);
    }

    public function entry()
    {
        $data['title'] = "Product Entry";

        $this->product->join('category_name','brand_name','category_id = tbl_product.category_id','brand_id = tbl_product.brand_id');
        $data['cats'] = $this->category->findAll();
        $data['bans'] = $this->brand->findAll();

        return view("product/addProduct",$data);
    }

    public function store(){
        $data = [
            'product_title' =>$this->request->getVar("pname"),
            'product_image' =>$this->request->getFile("pimg")->getName(),
            'product_short_description' =>$this->request->getVar("psd"),
            'product_long_description' =>$this->request->getVar("pld"),
            'product_price' =>$this->request->getVar("pprice"),
            'product_quantity' =>$this->request->getVar("pquantity"),
            'product_category' =>$this->request->getVar("cat"),
            'product_brand' =>$this->request->getVar("brand"),
           ];

           
    
            print_r($data);
    
    //        $rules = [
    //         'name' => 'required|max_length[30]|min_length[3]',
    //         'price' => 'required|numeric',
    //         'sku'    => 'required|min_length[4]',
    //         'photo'    => 'uploaded[photo]|max_size[photo,3072]|ext_in[photo,jpg,jpeg,webp]',
    //        ];
    
    //        if (! $this->validate($rules)) {
    //         return view('products/create');
    //         } else {
    //             // echo WRITEPATH;
    //             $img = $this->request->getFile('photo');
    //             $img->move(base_url('/assets/uploads/'). 'uploads');
    //             $this->product->insert($data);
    //             $session = session();
    //             $session->setFlashdata('msg','Product Inserted and uploaded Successfully');
    //             $this->response->redirect('/product');
    // }
}

    public function edit($id){

    }

    public function update($id){

    }

    public function delete($id){

    }
}
