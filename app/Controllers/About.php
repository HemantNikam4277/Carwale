<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class About extends BaseController
{
    public function index()
    {
    	$data['title'] = 'About | EDGE Linking Inc';

        return view('header',$data)
        	. view('about')
        	. view('footer');
    }
}
