<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Info_User extends Migration
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
            $table->string('email')->unique();
            $table->string('alamat',100);
            $table->timestamps();
            $table->primary('id_info_user');
        });

        Schema::create('Hak_akses', function (Blueprint $table) {
            $table->increments('id_Hak_akses',10);
            $table->string('hak_akses');
            $table->primary('password');
        });

        Schema::create('Login', function (Blueprint $table) {
            $table->string('password')->index();
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
        Schema::dropIfExists('users');
    }
}
