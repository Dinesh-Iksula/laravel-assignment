<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    function index(Request $request){
        return view("property-detail.index");
    }

    function formValidations(){
        return view("property-detail.form-validations");
    }
}
