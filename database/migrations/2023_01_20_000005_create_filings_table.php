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
        Schema::create('filings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->date('initial_date')->nullable();
            $table->date('effective_date')->nullable();
            $table->date('last_event')->nullable();
            $table->date('event_date_filed')->nullable();
            $table->date('event_effective_date')->nullable();
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
        Schema::dropIfExists('filing');
    }
};
