<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      $shirts = product::all();
      return view('front.home',compact('shirts'));
    }


    public function shirts()
    {
      $shirts = product::all();
      return view('front.shirts',compact('shirts'));
    }


    public function shirt()
    {
      return view('front.shirt');
    }
}
