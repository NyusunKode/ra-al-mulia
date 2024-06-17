<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = "registrasis";
    protected $primaryKey = "id";

    protected $enumStatus = [
        'false',
        'true'
    ];

    protected $enumJenisKelamin = [
        'Laki Laki',
        'Perempuan'
    ];

    protected $fillable = [
        "id_user",
        "nama_lengkap_anak",
        "nama_panggilan_anak",
        "nik",
        "jenis_kelamin",
        "ttl_anak",
        "anak_ke",
        "agama",
        "pendidikan_anak",
        "alamat_anak",
        "ttl_ortu",
        "pekerjaan_ortu",
        "pendidikan_ortu",
        "alamat_ortu",
        "status"
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
            'Laki Laki',
            'Perempuan'
        ];
    }
}
