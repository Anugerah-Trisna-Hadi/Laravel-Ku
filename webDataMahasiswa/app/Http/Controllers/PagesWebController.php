<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesWebController extends Controller
{
    //
    public function index()
    {
    	return view('index');
    }
    public function about()
    {
    	return view('about',['nama' => 'Anugerah Trisna Hadi']);
    }
}
