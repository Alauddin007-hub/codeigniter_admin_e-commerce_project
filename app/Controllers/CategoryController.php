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
        $data['title'] = "Category List";
        return view('category/categoryList',$data);
    }
    public function create(){
        $data['title'] = "Add Category";
        return view('category/addCategory',$data);
    }
    public function store(){
        $data = [
            'category_name' =>$this->request->getVar('cname'),
            'category_description' =>$this->request->getVar('description'),
        ];
        // print_r($data);
         $rules = [
            'cname' => 'required|max_length[30]|min_length[3]',
            'description' => 'required|max_length[200]|min_length[10]',
         ];

         if(! $this->validate($rules)){
            return redirect('category/create');
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
