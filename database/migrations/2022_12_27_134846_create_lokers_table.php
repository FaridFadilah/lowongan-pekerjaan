<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kota_id');
            $table->foreignId('company_id');
            $table->foreignId('category_id');
            $table->foreignId('type_id');
            $table->string('name');
            $table->text('deskripsi');
            $table->bigInteger('sallary');
            $table->integer('kuota');
            $table->text('min_pengalaman');
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
        Schema::dropIfExists('lokers');
    }
};
