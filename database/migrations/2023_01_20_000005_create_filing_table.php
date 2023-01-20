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
        Schema::create('filing', function (Blueprint $table) {
            $table->id();
            $table->date('initial_date');
            $table->date('effective_date');
            $table->date('last_evemt');
            $table->date('event_date_filed');
            $table->date('event_effective_date');
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
