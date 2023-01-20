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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_business')->references('id')->on('businesses');
            $table->foreignId('id_agent')->references('id')->on('agent');
            $table->foreignId('id_members')->references('id')->on('members');
            $table->string('type');
            $table->string('street');
            $table->string('zip_code');
            $table->string('state');
            $table->string('city');
            $table->date('address_changed');
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
        Schema::dropIfExists('address');
    }
};
