<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
//use App\Http\Controllers\backend;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      return view('index');
    }
}
