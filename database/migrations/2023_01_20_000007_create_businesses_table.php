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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('status_id')->references('id')->on('statuses')->nullable();
            $table->foreignId('activity_id')->references('id')->on('activities')->nullable();
            $table->foreignId('type_id')->references('id')->on('types')->nullable();
            $table->foreignId('filing_id')->references('id')->on('filings')->nullable();
            $table->foreignId('state_id')->references('id')->on('states');
            $table->string('name')->unique();
            $table->string('file_number')->nullable();
            $table->string('foreign_legal_name')->nullable();
            $table->string('fictitious_name')->nullable();
            $table->string('sectionof_law')->nullable();
            $table->string('county')->nullable();
            $table->string('jurisdiction')->nullable();
            $table->boolean('farm_corp_flag')->nullable();
            $table->string('duration_expiration')->nullable();
            $table->string('formation_date')->nullable();
            $table->date('statement_of_info_due_date')->nullable();
            $table->string('formed_in')->nullable();
            $table->string('standing_sos')->nullable();
            $table->date('effective_sos_registration_date')->nullable();
            $table->string('texas_sos_file_number')->nullable();
            $table->string('rigth_to_transact_business_in_texas')->nullable();
            $table->date('inactive_date')->nullable();
            $table->string('standing_ftb')->nullable();
            $table->string('standing_vcfcf')->nullable();
            $table->string('fein_ein_number')->nullable();
            $table->date('forfeiture_date')->nullable();
            $table->string('texas_taxpayer_number')->nullable();
            $table->string('nfp_category')->nullable();
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
        Schema::dropIfExists('businesses');
    }
};
