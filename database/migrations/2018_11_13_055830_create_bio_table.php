<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tanggal_lahir');
            $table->string('Hobby');
            $table->string('foto')->Nullable();
            $table->string('file')->Nullable();
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
        Schema::drop('bio');
    }
}
