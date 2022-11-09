<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function show(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }
}

