<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Editorial extends BaseController
{
    public function index()
    {
    	$data['title'] = 'Editorial | EDGE Linking Inc';

        return view('header',$data)
        	. view('editorial')
        	. view('footer');
    }
}
