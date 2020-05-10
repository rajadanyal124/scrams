<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info\Country;

class OnchangeController extends Controller
{
    public function index(){
     $countries=Country::all();
     dd($countries);
        return view('onchange.index');
    }
}
