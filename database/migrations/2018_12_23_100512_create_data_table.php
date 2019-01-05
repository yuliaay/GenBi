<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('nama');
            $table->string('nim');
            $table->string('jenis_kelamin');
            $table->string('universitas');
            $table->string('fakultas');
            $table->float('ipk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->string('suku_bangsa');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('minat_bakat');
            $table->string('keterampilan');
            $table->string('potensi');
            $table->string('aktivitas_sosial');
            $table->string('bersedia_aktif');
            $table->string('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
