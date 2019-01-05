<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertemuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertemuans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jenis_pertemuan')->unsigned();
            $table->foreign('id_jenis_pertemuan')->references('id')->on('jenis_pertemuans')->onDelete('CASCADE');
            $table->string('pertemuan');
            $table->date('tanggal_pertemuan');
            $table->text('tempat');
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
        Schema::dropIfExists('pertemuans');
    }
}
