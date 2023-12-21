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

        $rules = [
            'pname' => 'required|max_length[30]',
            // 'pimg' => 'uploaded[pimg]|max_size[pimg,2048]|ext_in[photo,jpg,jpeg,png]',
        ];
        if (!$this->validate($rules)) {
            return redirect('product/entry');
        } else {
            $img = $this->request->getFile('pimg');
            $img_name = $img->getRandomName();
            $img->move('assets/uploads', $img_name);

            $data = [
                'product_title' =>$this->request->getVar("pname"),
                'product_short_description' =>$this->request->getVar("psd"),
                'product_long_description' =>$this->request->getVar("pld"),
                'product_price' =>$this->request->getVar("pprice"),
                'product_quantity' =>$this->request->getVar("pquantity"),
                'product_category' =>$this->request->getVar("cat"),
                'product_brand' =>$this->request->getVar("brand"),
                'product_image' => $img_name,
            ];
            //  print_r($data);
            $this->product->insert($data);
            $session = session();
            $session->setFlashdata('msg', 'Successfully Added');
            return $this->response->redirect('/product');
        }

}

    public function edit($id){
        $data['cats'] = $this->category->findAll();
        $data['bans'] = $this->brand->findAll();
        $data['product'] = $this->product->find($id);
        $data['title'] = "Product Edit";
        // print_r($data);
        return view("product/edit",$data);
        // echo $id;
    }

    public function update($id){
        $rules = [
            'pname' => 'required|max_length[30]',
            // 'pimg' => 'uploaded[pimg]|max_size[pimg,2048]|ext_in[photo,jpg,jpeg,png]',
        ];
        if (!$this->validate($rules)) {
            return redirect('product/entry');
        } else {
            $img = $this->request->getFile('pimg');
            $img_name = $img->getRandomName();
            $img->move('assets/uploads', $img_name);

            $data = [
                'product_title' =>$this->request->getVar("pname"),
                'product_short_description' =>$this->request->getVar("psd"),
                'product_long_description' =>$this->request->getVar("pld"),
                'product_price' =>$this->request->getVar("pprice"),
                'product_quantity' =>$this->request->getVar("pquantity"),
                'product_category' =>$this->request->getVar("cat"),
                'product_brand' =>$this->request->getVar("brand"),
                'product_image' => $img_name,
            ];
            //  print_r($data);
            $this->product->update($id, $data);
            $session = session();
            $session->setFlashdata('msg', 'Successfully Added');
            return $this->response->redirect('/product');
        }
    }

    public function delete($id){
        $this->product->where('product_id', $id);
       $this->product->delete();
       $session = session();
       $session->setFlashdata('msg', 'Deleted Successfully');
       $this->response->redirect('/product');
    }
}
