<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $name = 'Raido';
        return view('welcome', ['name' => $name]);
    }
    public function Page1(){
        return view("Page1");
    }
    public function Page2(){
        return view("Page2");
    }
}
