<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;


class CategoryController extends BaseController
{
    private $category;
    public function __construct(){
        $this->category = new CategoryModel();
    }
    public function index()
    {
        $data['items'] = $this->category->findAll();
        return view('category/categoryList',$data);
    }
    public function create(){
        return view('category/addCategory');
    }
    public function store(){
        $data = [
            'category_name' =>$this->request->getVar('cname'),
            'category_description' =>$this->request->getVar('description'),
        ];
        // print_r($data);
         $rules = [
            'cname' => 'required|max_length[30]|min_length[3]',
            'description' => 'required|max_length[150]|min_length[10]',
         ];

         if(! $this->validate($rules)){
            return view('category/addCategory');
         } else {
            $this->category->insert($data);
            $session = session();
            $session->setFlashdata('msg','Category Inserted and uploaded Successfully');
            $this->response->redirect('/category');
         }

        // if($data){
        //     $this->category->insert($data);
        //     $session = session();
        //     $session->setFlashdata('msg','Category Inserted and uploaded Successfully');
        //     $this->response->redirect('/category');
        // } else {
        //     $this->response->redirect('category/addCategory');
        // }
    }
}
