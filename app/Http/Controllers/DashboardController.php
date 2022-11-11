<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    // public function show(){
    //     $products = Product::all();
    //     return view('products.index', compact('products'));
    // }

    public function show(){
        $products = Product::latest()->paginate(5);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function produk(){
        return view('products.create');
    }
}

