<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class SupplierController extends Controller
{
    //
    public function index(){
        return view("supplier");
    }
}
