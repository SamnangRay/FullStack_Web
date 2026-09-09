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
    Schema::table("teachers", function (Blueprint $table) {
          $table -> string("name")->after("id");
          $table -> string("email")->after("name");
          $table -> integer("phone")->after("email");
          $table -> string("gender") ->after("phone");
          $table->string('dob')->nullable()->after('gender');
          $table->string('origin')->nullable()->after('dob');
          $table->foreignId('department_id')->after('origin')->constrained('departments');

    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('teachers', function (Blueprint $table) {
        $table->dropColumn('name');
        $table->dropColumn('email');
        $table->dropColumn('phone');
        $table->dropColumn('gender');
        $table->dropColumn('dob');
        $table->dropColumn('origin');
        $table->dropColumn('department_id');

    });
    }
};
