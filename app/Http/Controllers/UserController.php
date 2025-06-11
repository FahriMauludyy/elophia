<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();
    
        if ($request->has('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%");
        }
    
        $users = $query->get();
    
        return view('dashboard', compact('users')); // ⬅️ arahkan ke dashboard.blade.php
    }

    public function updateRole(Request $request, User $user)
{
    $request->validate([
        'role' => 'required|in:admin,karyawan',
    ]);

    $user->role = $request->role;
    $user->save();

    return back()->with('success', 'Role updated successfully.');
}

   

}
