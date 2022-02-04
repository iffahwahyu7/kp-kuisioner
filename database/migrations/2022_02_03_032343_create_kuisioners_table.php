<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisioners', function (Blueprint $table) {
            $table->id('no_responden');
            $table->string('nama_responden', 100);
            $table->string('no_hp', 15);
            $table->integer('jenis_pelayanan');
            $table->timestamp('tgl_survey');
            $table->integer('umur');
            $table->integer('kelompok_umur');
            $table->integer('jenis_kelamin');
            $table->integer('pendidikan_terakhir');
            $table->integer('pekerjaan_utama');
            $table->integer('suku_bangsa');
            $table->integer('u1');
            $table->integer('u2');
            $table->integer('u3');
            $table->integer('u4');
            $table->integer('u5');
            $table->integer('u6');
            $table->integer('u7');
            $table->integer('u8');
            $table->integer('u9');
            $table->text('saran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuisioners');
    }
}
