<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComplainModel;

class ComplainController extends BaseController
{
    private $complain;

    public function __construct()
    {
    $this->complain = new ComplainModel();
    }   
     public function index()
    {
        
        $data['items'] = $this->complain->findAll();
        $data['title'] = "Complain List";
       return view('Complain/complain_list',$data);
    }
}
