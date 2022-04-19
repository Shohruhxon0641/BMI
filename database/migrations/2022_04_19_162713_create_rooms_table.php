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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable()->default(12);
            $table->string('bino_name', 100)->nullable()->default('text');
            $table->string('turi', 50)->nullable()->default('text');
            $table->integer('urindiq_son')->unsigned()->nullable()->default(12);
            $table->float('narx')->nullable()->default(123.45);
            $table->string('viloyat', 100)->nullable()->default('text');
            $table->string('address', 200)->nullable()->default('text');
            $table->string('phone_number', 20)->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
            $table->boolean('cofe_tea')->nullable()->default(false);
            $table->boolean('sovutish')->nullable()->default(false);
            $table->boolean('wi_fi')->nullable()->default(false);
            $table->boolean('hojatxona')->nullable()->default(false);
            $table->boolean('proyektr')->nullable()->default(false);
            $table->boolean('ovoz_kuch')->nullable()->default(false);
            $table->boolean('kompyuter')->nullable()->default(false);
            $table->boolean('ovqatlanish')->nullable()->default(false);
            $table->string('image', 100)->nullable()->default('text');
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
        Schema::dropIfExists('rooms');
    }
};
