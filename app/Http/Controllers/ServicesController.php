<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getPage(Request $request)
    {
        return view('services.index');
    }
}
