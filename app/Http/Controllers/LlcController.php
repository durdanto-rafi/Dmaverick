<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LlcController extends Controller
{
    public function getPage(Request $request)
    {
        return view('llc.index');
    }
}
