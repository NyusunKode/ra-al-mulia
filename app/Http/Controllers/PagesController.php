<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function homePage()
    {
        $informasi = Informasi::orderBy('id', 'DESC')->take(3)->get();

        return view('pages.home', compact('informasi'));
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

    public function registrationPage()
    {
        return view('pages.registration');
    }

    public function informationPage()
    {
        $user = Auth::user();
        $informasi = informasi::all();

        return view('pages.information', compact('user', 'informasi'));
    }

    public function detailInformationPage($id)
    {
        $user = Auth::user();
        $informasi = Informasi::find($id);

        return view('pages.detail-information', compact('user', 'informasi'));
    }

    public function dashboardPage()
    {
        $user = Auth::user();
        $roles = $user->roles->pluck('name');
        $statusRegistration = Registrasi::where('id_user', $user->id)->first();

        $registration = Registrasi::query()->where('id_user', $user->id)->get();

        if (!Auth::check()) {
            return redirect('/login');
        }

        if ($roles->contains('peserta')) {
            if ($statusRegistration->status == array_search('false', Registrasi::getStatusOptions())) {
                Auth::logout();
                return redirect('/login')->with('ERROR', 'Pendaftaran belum dikonfirmasi oleh Admin.');
            } else {
                return view('pages.peserta.dashboard', compact('user', 'roles', 'registration'));
            }
        } else {
            return view('pages.admin.dashboard', compact('user', 'roles'));
        }
    }

    public function registrasiPage()
    {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        $registration = Registrasi::query()->get();

        return view('pages.admin.registrasi', compact('user', 'roles', 'registration'));
    }

    public function detailPage($id)
    {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        $registration = Registrasi::find($id);

        return view('pages.peserta.detail-registration', compact('user', 'roles', 'registration'));
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
