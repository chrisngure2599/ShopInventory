<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['total_products'] =new \App\Models\StockDetail;
        $data['sales_transactions'] =new  \App\Models\SalesDetail;
        $data['suppliers'] =new \App\Models\SupplierDetail;
        $data['customers'] =new \App\Models\CustomerDetail;

        return view('home')->with('data',$data);
    }
}
