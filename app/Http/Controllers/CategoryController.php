<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class CategoryController extends Controller
{
    //
    public function index(){
        return view("category");
    }
}
