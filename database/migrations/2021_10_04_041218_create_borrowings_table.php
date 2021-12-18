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
            $table->string('name');
            $table->string('kelas');
            $table->bigInteger('no_hp');
            $table->string('alamat');
            $table->integer('book_id')->unsigned();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('jumlah_pinjam');
            $table->foreign('book_id')->references('id')->on('books');
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
