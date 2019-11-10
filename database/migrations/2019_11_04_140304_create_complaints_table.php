<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('case_date_filed')->nullable();
            $table->string('case_time')->nullable();
            $table->string('case_no');
            $table->string('case_nature');
            $table->string('case_complainant');
            $table->string('case_complainant_address');
            $table->string('case_respondent');
            $table->string('case_respondent_address');
            $table->string('case_dispo_one');
            $table->string('case_dispo_two');
            $table->string('case_dispo_three');
            $table->boolean('attendance_comp_one');
            $table->boolean('attendance_comp_two');
            $table->boolean('attendance_comp_three');
            $table->boolean('attendance_resp_one');
            $table->boolean('attendance_resp_two');
            $table->boolean('attendance_resp_three');
            $table->string('case_status')->nullable();
            $table->boolean('amicably_settled');
            $table->boolean('certificate_to_file_action');
            $table->boolean('lack_of_ment');
            $table->boolean('lack_of_interest');
            $table->string('case_referred_to_first');
            $table->string('case_referred_to_second');
            $table->text('case_description');
            $table->string('case_date')->nullable();
            $table->string('assisted_by')->nullable();
            $table->string('brgy_captain_id')->nullable();
            $table->string('first_action_remarks');
            $table->string('second_action_remarks');
            $table->string('third_action_remarks');
            $table->string('sworn_date');
            $table->string('day_of');
            $table->string('duty_officer');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
