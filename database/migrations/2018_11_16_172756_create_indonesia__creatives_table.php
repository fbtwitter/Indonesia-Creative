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
        Schema::create('Info_User', function (Blueprint $table) {
            $table->increments('id_info_user',10);
            $table->string('nama_depan',100);
            $table->string('nama_belakang',100);
            $table->string('jenis_kelamin',10);
            $table->string('email');
            $table->string('alamat',100);
            $table->timestamps();
        });

        Schema::create('Hak_akses', function (Blueprint $table) {
            $table->increments('id_Hak_akses',10);
            $table->string('hak_akses');
            $table->primary('id_Hak_akses');
        });

        Schema::create('Login', function (Blueprint $table) {
            $table->string('password');
            $table->string('usename');
            $table->primary('password');
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
        Schema::dropIfExists('Hak_akses');
        Schema::dropIfExists('Info_User');
    }
}
