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
        Schema::create('tbluser', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Username');
            $table->string('Password');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('EmailAddress');
            $table->string('ContactNo');
            $table->string('Division');
            $table->string('Section');
            $table->string('JobTitle');
            $table->string('UserType');
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
        Schema::dropIfExists('tbluser');
    }
};
