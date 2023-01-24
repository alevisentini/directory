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
        Schema::create('documents', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_business')->references('id')->on('businesses');
            $table->string('type')->nullable();
            $table->string('url')->nullable();
            $table->date('date')->nullable();
            $table->integer('cert_code')->nullable();
            $table->string('description')->nullable();
            $table->string('file_number')->nullable();
            $table->integer('page_count')->nullable();
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
        Schema::dropIfExists('documents');
    }
};
