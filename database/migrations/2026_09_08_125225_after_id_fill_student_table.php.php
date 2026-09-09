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
        Schema::table("students", function (Blueprint $table) {
            
            $table->string("name")->after("id")->change();
            $table->string("email")->after("name")->change();
            $table->string("phone", 10)->after("email")->change();
            $table->string("gender", 6)->after("phone")->change();
            $table->date("dob")->after("gender")->change();
            $table->string("origin")->after("dob")->change();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table("students", function (Blueprint $table) {
            
            $table->string("name")->change();
            $table->string("email")->change();
            $table->integer("phone")->change();
            $table->string("gender")->change();
            $table->date('dob')->change();
            $table->integer("origin")->change();
            
    });
    }
};
