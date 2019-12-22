<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_depan', 50)->nullable(false);
            $table->string('nama_belakang', 50)->nullable(true);
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('email', 50)->unique();
            $table->enum('mata_pelajaran', ['Algoritma', 'PDO', 'PBO'])->nullable(true);
            $table->string('no_telepon', 50)->nullable(false);
            $table->text('alamat');
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
        Schema::dropIfExists('gurus');
    }
}
