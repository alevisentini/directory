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
            $table->id();
            $table->foreignId('id_status')->references('id')->on('statuses');
            $table->foreignId('id_activity')->references('id')->on('activities');
            $table->foreignId('id_type')->references('id')->on('types');
            $table->string('name');
            $table->string('file_number');
            $table->string('foreign_legal_name');
            $table->string('fictitious_name');
            $table->string('sectionof_law');
            $table->string('county');
            $table->string('jurisdiction');
            $table->boolean('farm_corp_flag');
            $table->string('duration_expiration');
            $table->string('formation_date');
            $table->date('statement_of_info_due_date');
            $table->string('activity');
            $table->string('formed_in');
            $table->string('standing_sos');
            $table->date('effective_sos_registration_date');
            $table->string('texas_sos_file_number');
            $table->string('rigth_to_transact_business_in_texas');
            $table->date('inactive_date');
            $table->string('standing_ftb');
            $table->string('standing_vcfcf');
            $table->string('fein_ein_number');
            $table->date('forfeiture_date');
            $table->string('texas_taxpayer_number');
            $table->string('nfp_category');
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
