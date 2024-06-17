<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InformasiController extends Controller
{
    public function addData(Request $request)
    {
        $request->validate([
            "judul"=>"required|string|max:255",
            "thumbnail"=>"required|image|mimes:png,jpg|max:2048",
            "isi"=>"required|string",
        ]);

        try {
            $filePaththumbnail = $request->file('thumbnail')->store('thumbnails', 'public');

            $directory = public_path('images/thumbnail');
            if (!File::isDirectory($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            informasi::create([
                'judul'=>$request['judul'],
                'thumbnail'=>$filePaththumbnail,
                'isi'=>$request['isi'],
            ]);
        } catch (\Exception $e) {
            return redirect('/informasi')->with('ERROR', 'Gagal membuat data');
        }

        return redirect('/informasi')->with('SUCCESS', 'Data berhasil ditambahkan.');
    }

    public function updateData($id, Request $request)
    {
        $request->validate([
            "judul"=>"required|string|max:255",
            "isi"=>"required|string",
        ]);

        try {
            $dataInformasi = informasi::findOrFail($id);
            $dataInformasi->judul = $request->input("judul");
            $dataInformasi->isi = $request->input("isi");
            if ($request->hasFile('thumbnail')) {
                $existingThumbnail = $dataInformasi->thumbnail;
                if ($existingThumbnail) {
                    $existingThumbnailPath = public_path('storage/' . $existingThumbnail);
                    if (File::exists($existingThumbnailPath)) {
                        File::delete($existingThumbnailPath);
                    }
                }
                $filePaththumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
                $dataInformasi->thumbnail = $filePaththumbnail;
            }
            $dataInformasi->save();

        } catch (\Exception $e) {
            return redirect('/informasi')->with('ERROR', 'Gagal mengubah data');
            }
        return redirect('/informasi')->with('SUCCESS', 'Data berhasil di ubah');
    }

    public function destroyData($id)
    {
        try {
            $dataInformasi = informasi::findOrFail($id);
            
            $existingThumbnail = $dataInformasi->thumbnail;
            if ($existingThumbnail) {
                $existingThumbnailPath = public_path('storage/' . $existingThumbnail);
                if (File::exists($existingThumbnailPath)) {
                    File::delete($existingThumbnailPath);
                }
            }
    
            $dataInformasi->delete();
        } catch (\Exception $e) {
            return redirect('/informasi')->with('ERROR', 'Gagal menghapus data: ' . $e->getMessage());
        }
    
        return redirect('/informasi')->with('SUCCESS', 'Data berhasil dihapus');
    }
}
