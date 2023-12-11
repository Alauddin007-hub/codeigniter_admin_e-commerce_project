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

    }
}
