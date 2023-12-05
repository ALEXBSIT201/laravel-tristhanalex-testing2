<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class OrderdetailController extends Controller
{
    //
    public function index(){
        return view("orderdetail");
    }
}
