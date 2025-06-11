<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get(); // WAJIB ADA INI
        $users = User::all(); // Juga perlu karena view pakai $users

        return view('dashboard', compact('products', 'users'));
    }
}

