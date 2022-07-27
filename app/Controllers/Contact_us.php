<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Contact_us extends BaseController
{
    public function index()
    {
    	$data['title'] = 'Contact Us | EDGE Linking Inc';

        return view('header',$data)
        	. view('contact_us')
        	. view('footer');
    }
}
