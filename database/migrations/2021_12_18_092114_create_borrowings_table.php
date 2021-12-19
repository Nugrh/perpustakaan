<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id');
            $table->string('name');
            $table->string('nis');
            $table->string('kelas');
            $table->string('jurusan');
            $table->date('tanggal_pinjam');
            $table->integer('durasi');
            $table->date('tanggal_kembali');
            $table->bigInteger('no_hp')->nullable();
            $table->integer('jumlah');

            $table->foreign('book_id')
                ->references('id')->on('books')
                ->onDelete('cascade');

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
        Schema::dropIfExists('borrowings');
    }
}
