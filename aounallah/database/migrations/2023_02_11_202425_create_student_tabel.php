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
        Schema::create('student_tabel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Time1')->nullable();
            $table->string('Time2')->nullable();
            $table->string('Time3')->nullable();
            $table->string('Time4')->nullable();
            $table->string('Time5')->nullable();
            $table->string('Time6')->nullable();
            $table->string('Time7')->nullable();
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
        Schema::dropIfExists('student_tabel');
    }
};
