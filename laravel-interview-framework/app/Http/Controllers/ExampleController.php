<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;



class ExampleController extends Controller
{


    /**
     * Create an example and display its data.
     * 
     * @param Request $request http request
     * 
     * @return string view template
     */
    public function createExample()
    {
        $validated = request()->validate([
            'code' => 'required',
            'description' => 'required',
        ]);

        $data = Example::create($validated);

        return view('app/home/home', [
            'data' => $data,
            'version' => getenv('APP_VERSION')
        ]);
    }
}
