<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageCountryController extends Controller
{
    public function index()
    {
        return view('backend.pages.manage_country.index');
    }

    public function countryState($id){
        return view('backend.pages.manage_country.state');
    }

    public function countryTax(){
        return view('backend.pages.manage_country.tax');
    }
}
