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
        Schema::create('agents', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_business')->references('id')->on('businesses');
            $table->string('name');
            $table->string('type')->nullable();
            $table->date('name_changed')->nullable();
            $table->string('phone')->nullable();
            $table->string('county')->nullable();
            $table->string('standing')->nullable();
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
        Schema::dropIfExists('agents');
    }
};
