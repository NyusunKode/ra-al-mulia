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
            $table->string('ttl_anak');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('anak_ke');
            $table->string('bersaudara');
            $table->string('status_dalam_keluarga');
            $table->string('ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->longText('alamat_ayah');
            $table->string('ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->longText('alamat_ibu');
            $table->string('no_hp_ortu');
            $table->string('sejarah_sakit')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
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
