<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
    	$data['title'] = 'EDGE Linking Inc';

        return view('header',$data)
        . view('home')
        .view('footer');
    }

}
