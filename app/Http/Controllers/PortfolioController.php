<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getPage(Request $request)
    {
        return view('portfolio.index');
    }
}
