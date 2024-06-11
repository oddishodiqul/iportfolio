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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birth_date');
            $table->string('contact');
            $table->string('email');
            $table->string('city');
            $table->string('degree');
            $table->string('website');
            $table->text('motivation');
            $table->text('descriptions');
            $table->string('job_title');
            $table->string('happy_client');
            $table->string('project');
            $table->text('biography');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_infos');
    }
};
