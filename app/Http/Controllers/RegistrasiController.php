<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validasi = $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:8|confirmed',
                'nama_lengkap_anak' => 'required|string|max:255',
                'nama_panggilan_anak' => 'required|string|max:255',
                'usia' => 'required|numeric',
                'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
                'agama' => 'required|string',
                'anak_ke' => 'required|numeric|min:1',
                'bersaudara' => 'required|numeric|min:1',
                'status_dalam_keluarga' => 'required|string|max:255',
                'ayah' => 'required|string|max:255',
                'pekerjaan_ayah' => 'required|string|max:255',
                'pendidikan_ayah' => 'required|string|max:255',
                'alamat_ayah' => 'required|string|max:500',
                'ibu' => 'required|string|max:255',
                'pekerjaan_ibu' => 'required|string|max:255',
                'pendidikan_ibu' => 'required|string|max:255',
                'alamat_ibu' => 'required|string|max:500',
                'no_hp_ortu' => 'required|numeric',
            ]);

            $ttl_anak = null;
            if ($request->has('tempat_lahir_anak') && $request->has('tanggal_lahir_anak')) {
                $formattedDateAnak = Carbon::createFromFormat('Y-m-d', $request->tanggal_lahir_anak)->format('d F Y');
                $ttl_anak = $request->tempat_lahir_anak . ', ' . $formattedDateAnak;
            }

            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->no_telp = $request->no_hp_ortu;
            $user->save();

            $user->assignRole('peserta');

            Registrasi::create([
                'id_user' => $user->id,
                'nama_lengkap_anak' => $request->nama_lengkap_anak,
                'nama_panggilan_anak' => $request->nama_panggilan_anak,
                'ttl_anak' => $ttl_anak,
                'usia' => $request->usia,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'anak_ke' => $request->anak_ke,
                'bersaudara' => $request->bersaudara,
                'status_dalam_keluarga' => $request->status_dalam_keluarga,
                'ayah' => $request->ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'pendidikan_ayah' => $request->pendidikan_ayah,
                'alamat_ayah' => $request->alamat_ayah,
                'ibu' => $request->ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'pendidikan_ibu' => $request->pendidikan_ibu,
                'alamat_ibu' => $request->alamat_ibu,
                'no_hp_ortu' => $request->no_hp_ortu,
                'sejarah_sakit' => $request->sejarah_sakit,
                'status' => array_search('false', Registrasi::getStatusOptions())
            ]);

            return redirect()->back()->with('SUCCESS', 'Data anda berhasil didaftarkan.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Error register:', ['error' => $e->getMessage()]);
            return redirect()->back()->with('ERROR', 'Gagal melakukan pendaftaran.');
        }
    }

    public function acceptRegistration($id)
    {
        $registration = Registrasi::findOrFail($id);

        try {
            $registration->status = array_search('true', Registrasi::getStatusOptions());
            $registration->save();

        } catch (\Exception $e) {
            Log::error('Error register:', ['error' => $e->getMessage()]);
            return redirect()->back()->with('ERROR', 'Gagal melakukan konfirmasi.');
        }

        return redirect()->back()->with('SUCCESS', 'Pendaftaran berhasil diterima.');
    }
}
