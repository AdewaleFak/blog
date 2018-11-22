<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //

    public function index(){
        $cds=Product::all();
        return view('product.list')->with('cds',$cds);


    }
}
