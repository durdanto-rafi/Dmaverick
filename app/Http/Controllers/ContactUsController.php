<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function getPage(Request $request)
    {
        return view('contact-us.index');
    }
}
