<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getPage(Request $request)
    {
        return view('index.index');
    }
}
