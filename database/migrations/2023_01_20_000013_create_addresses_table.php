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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('business_id')->references('id')->on('businesses')->nullable();
            $table->foreignId('agent_id')->references('id')->on('agents')->nullable();
            $table->foreignId('member_id')->references('id')->on('members')->nullable();
            $table->string('type');
            $table->string('street');
            $table->string('zip_code')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->date('address_changed')->nullable();
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
        Schema::dropIfExists('addresses');
    }
};
