<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index(){
    	return view('content');
    }

    public function catergories(){
        return view('catergories_content');
    }

    public function contact(){
        return view('contact_content');
    }

    public function products(){
        return view ('products_content');
    }
}


