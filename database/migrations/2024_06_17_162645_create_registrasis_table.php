<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrasis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->string('nama_lengkap_anak');
            $table->string('nama_panggilan_anak');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('ttl_anak');
            $table->string('anak_ke');
            $table->string('agama');
            $table->string('pendidikan_anak');
            $table->string('alamat_anak');
            $table->string('ttl_ortu');
            $table->string('pekerjaan_ortu');
            $table->string('pendidikan_ortu');
            $table->string('alamat_ortu');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasis');
    }
};
