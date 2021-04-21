<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

    class bookController extends Controller
    {
     public function about () { 
         return view('about'); 
 } 
 public function list () { 
 $list = array( 
 'Hurt By The North - 228pg - mystery', 
 'isle of man - 110pg - history',
 'what if  - 113pg - Fantasy',
 'Breathe of the wild - 543pg - Fantasy'
 ); 
 return view('list', compact('list')); 
 } 
}