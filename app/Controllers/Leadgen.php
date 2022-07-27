<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Leadgen extends BaseController
{
    public function index()
    {
    	$data['title'] = 'Lead Generation | EDGE Linking Inc';

        return view('header',$data)
        	. view('leadgen')
        	. view('footer');
    }
}
