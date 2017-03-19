<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){

        $name= 'Ayodeji';

        return view('pages.about',compact('name'));
    }

    public function contact(){

        return view('pages.contact');
    }



}
