<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cd;
class CdController extends Controller
{
    //
    public function list(){
       $cds=Cd::all();
       return view('cds.list')->with('cds',$cds);


    }


}
