<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(){
        return view('frontend.products.products')->with('products',Product::all())->with('page',__('web.product'));
    }
}
