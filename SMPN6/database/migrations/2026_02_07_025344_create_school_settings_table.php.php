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
        Schema::create('school_settings', function (Blueprint $table) {
        $table->id();
        $table->string('principal_photo')->nullable();
        $table->text('principal_message')->nullable();
        $table->string('principal_name')->nullable();
        $table->string('principal_title')->nullable();
        $table->date('ppdb_start_date')->nullable();
        $table->date('ppdb_end_date')->nullable();
        $table->date('test_start_date')->nullable();
        $table->date('test_end_date')->nullable();
        $table->date('announcement_date')->nullable();
        $table->date('reregistration_start_date')->nullable();
        $table->date('reregistration_end_date')->nullable();
        $table->date('academic_year_start')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
