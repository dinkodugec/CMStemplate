<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
   public function index()
   {
    return view('home-master');
   }

   public function show()
   {
    return view('blog-post');
   }
}
