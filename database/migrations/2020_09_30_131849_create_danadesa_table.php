<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanadesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danadesa', function (Blueprint $table) {
            $table->id();
            $table->char('tentang');
            $table->char('filelaporan');
            $table->char('keterangan');

            $table->foreignId('users_id');
            $table->foreign('users_id')
                  ->references('id')->on('users');
                  
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
        Schema::dropIfExists('danadesa');
    }
}
