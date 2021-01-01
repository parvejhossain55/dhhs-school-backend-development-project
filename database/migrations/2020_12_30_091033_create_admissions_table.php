<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('app_id')->unique();
            $table->string('sname_bangla');
            $table->string('sname_english');
            $table->string('date_of_birth');
            $table->string('religion');
            $table->string('nationality');
            $table->string('gender');
            // father info
            $table->string('fname_bangla');
            $table->string('fname_english');
            $table->string('father_mobile');
            $table->string('father_year_income');
            $table->string('father_absence_gurdian');
            // mother info
            $table->string('mname_bangla');
            $table->string('mname_english');
            // other info
            $table->string('which_class_admit');
            $table->string('photo');
            $table->string('signature');
            // present address
            $table->string('present_village');
            $table->string('present_post_office');
            $table->string('present_thana');
            $table->string('present_zila');
            // parmanent address
            $table->string('parmanent_village');
            $table->string('parmanent_post_office');
            $table->string('parmanent_thana');
            $table->string('parmanent_zila');
            // payment information
            $table->string('bkash_no');
            $table->string('tranx_id');
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
        Schema::dropIfExists('admissions');
    }
}
