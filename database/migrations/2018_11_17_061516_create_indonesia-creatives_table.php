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
      //Fungsi untuk update database setiap kali migrate
      Schema::create('Login', function (Blueprint $table) {
          $table->integer('id_user')->nullable();
          $table->string('password',20);
          $table->string('email',50);
          $table->integer('hak_akses')->default(3);
          $table->primary('email');
      });
      Schema::create('Info_user', function (Blueprint $table) {
          $table->increments('id_info_user');
          $table->string('nama_depan',100)->nullable();
          $table->string('nama_belakang',100)->nullable();
          $table->string('jenis_kelamin',10)->nullable();
          $table->string('domisili',100)->nullable();
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
        Schema::dropIfExists('Info_User');
    }
}
