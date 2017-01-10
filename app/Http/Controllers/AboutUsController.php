<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function getPage(Request $request)
    {
        return view('about-us.index');
    }
}
