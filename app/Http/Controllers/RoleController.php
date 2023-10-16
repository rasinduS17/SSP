<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class RoleController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;


        if ($role == '0') {
            $products = Product::get();
            return view('admin.admin', compact('product'));
        } else {
            $products = Product::get();
            return view('home.customer', compact('products'));
        }
    }


    public function product()
    {
        $products = Product::all();
        return view('home.product',compact('product'));
    }
}
