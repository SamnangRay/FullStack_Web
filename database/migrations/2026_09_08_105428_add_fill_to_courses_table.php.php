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
        //
        Schema::table("courses", function (Blueprint $table) {
             
             $table->string('name')->after('id');
             $table->string('code')->after('name');
             $table->string('credits')->after('code');
             $table->foreignId('department_id')->after('credits')->constrained('departments');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('code');
            $table->dropColumn('credits');
            $table->dropColumn('department_id');
    }); 
    }
};
