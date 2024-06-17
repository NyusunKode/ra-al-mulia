<?php

namespace App\Http\Controllers;
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

    public function visiPage()
    {
        return view('pages.visi');
    }

    public function historiPage()
    {
        return view('pages.histori');
    }

    public function teacherPage()
    {
        return view('pages.teacher');
    }

    public function facilitiesPage()
    {
        return view('pages.facilities');
    }

    public function contactPage()
    {
        return view('pages.contact');
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
}
