<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function homePage()
    {
        return view('pages.home');
    }

    public function loginPage()
    {
        return view('pages.auth.login');
    }

    public function dashboardPage()
    {
        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        if (!Auth::check()) {
            return redirect('/login');
        }
        
        return view('pages.admin.dashboard', compact('user'));
    }
    public function informasiPage()
    {
        $user = Auth::user();
        $roles = $user->roles->pluck('name');
        $informasi = informasi::all();

        if (!Auth::check()) {
            return redirect('/login');
        }
        
        return view('pages.admin.informasi', compact('user', 'informasi'));
    }
}
