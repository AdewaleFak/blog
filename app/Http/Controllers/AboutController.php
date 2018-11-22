<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $mydata = [
            'name' => 'Wale',
            'email' => 'ade@gmail.com',
            'program' => 'ITS'
        ];
        $country = "Canada";
        return view('infos.about', compact('mydata', 'country'));
        return view('infos.about',['mydata' => $mydata, 'country' => $country]);
        return view('infos.about') ->with('mydata', $mydata)
                                         ->with('country', $country);


    }
}
