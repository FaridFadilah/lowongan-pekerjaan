<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('applies', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('cv_id');
            $table->foreignId('loker_id');
            $table->longText('deskripsi');
            $table->string('status_apply')->default('belum dibaca');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('applies');
    }
};