<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotalEarningController extends Controller
{
    public function taxCalculate()
    {
        return view('backend.pages.total_earning.tax_calculate');
    }
    public function subscriptionEarning()
    {
        return view('backend.pages.total_earning.subscription_earning');
    }
    public function withdrawEarning()
    {
        return view('backend.pages.total_earning.withdraw_earning');
    }
    public function commissionEarning()
    {
        return view('backend.pages.total_earning.commission_earning');
    }
}
