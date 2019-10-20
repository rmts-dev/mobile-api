<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    function index()
    {
      return view('practice.startigLaravel');
    }
}
