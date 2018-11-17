<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndonesiaCreativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Info_user', function (Blueprint $table) {
            $table->increments('id_info_user',10);
            $table->string('nama_depan',100);
            $table->string('nama_belakang',100);
            $table->string('jenis_kelamin',10);
            $table->string('domsili',100);
            $table->string('email',100);
            $table->timestamps();
        });

        Schema::create('Login', function (Blueprint $table) {
            $table->string('password',10);
            $table->string('usename',50);
            $table->primary('password');
        });

        Schema::create('Hak_Akses', function (Blueprint $table) {
            $table->increments('id_hak_akses',10);
            $table->string('hak_akses,50');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Login');
        Schema::dropIfExists('Hak_Akses');
        Schema::dropIfExists('Info_User');
    }
}
