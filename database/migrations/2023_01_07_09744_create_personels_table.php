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
        Schema::create('personels', function (Blueprint $table) {
            $table->id();
            $table->string('foto_url',250);
            $table->bigInteger('kimlik_no',false,true);
            $table->string('anne_ad', 25);
            $table->string('baba_ad', 25);
            $table->string('ad', 25);
            $table->string('soyad', 25);
            $table->date('dogum_tarih');
            $table->string('dogum_yeri',75);
            $table->string('kan_grubu',8);
            $table->unsignedBigInteger('department_id');
            $table->date('giris_tarihi');
            $table->date('cikis_tarihi')->nullable();
            $table->integer('sube_id',false,true)->default(1);
            $table->tinyInteger('engel_durumu',false,true);
            $table->enum('adli_sicil',[0,1]);
            $table->string('eposta')->nullable();
            $table->string('tel_no',10);
            $table->integer('meslek_kodu',false,true);
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('meslek_kodu')->references('id')->on('pozisyons');
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
        Schema::dropIfExists('personels');
    }
};
