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
        Schema::create('personnel_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name',100);
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('personel_id');
            $table->string('file_path');
            $table->string('file_ext',5);
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('personnel_file_types');
            $table->foreign('personel_id')->references('id')->on('personels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_files');
    }
};
