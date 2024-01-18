<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('report_a_problem', function (Blueprint $table) {
            $table->id();
            $table->string('problem_name');
            $table->string('p_img');
            $table->string('p_details');
            $table->string('p_location');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_a_problem');
    }
};
