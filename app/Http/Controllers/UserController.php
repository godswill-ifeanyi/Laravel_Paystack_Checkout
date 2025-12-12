<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function products() {
        $products = Product::latest()->get();

        return view('user.products')->with('products', $products);
    }

    public function profile() {
        return view('user.profile');
    }
}
