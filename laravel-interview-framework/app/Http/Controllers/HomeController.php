<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the default page.
     * 
     * @param Request $request http request
     * 
     * @return string view template
     */
    public function index(Request $request)
    {
        return view('app/home/home', ['version' => getenv('APP_VERSION')]);
    }
}
