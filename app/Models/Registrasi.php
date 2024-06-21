<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = "registrasis";
    protected $primaryKey = "id";
    protected $fillable = [
        "id_user",
        "nama_lengkap_anak",
        "nama_panggilan_anak",
        "ttl_anak",
        "usia",
        "jenis_kelamin",
        "agama",
        "anak_ke",
        "bersaudara",
        "status_dalam_keluarga",
        "ayah",
        "pekerjaan_ayah",
        "pendidikan_ayah",
        "alamat_ayah",
        "ibu",
        "pekerjaan_ibu",
        "pendidikan_ibu",
        "alamat_ibu",
        "no_hp_ortu",
        "sejarah_sakit",
        "status",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public static function getStatusOptions()
    {
        return [
            'false',
            'true'
        ];
    }

    public static function getJenisKelaminOptions()
    {
        return [
            'Laki-laki',
            'Perempuan'
        ];
    }

    public static function getAgama()
    {
        return [
            'Islam',
            'Kristen',
            'Katolik',
            'Hindu',
            'Budha',
            'Konghucu'
        ];
    }
}
