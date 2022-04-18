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
        Schema::create('commit', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable()->default(12);
            $table->integer('rooms_id')->unsigned()->nullable()->default(12);
            $table->string('name', 25)->nullable()->default('text');
            $table->string('commit', 200)->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
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
        Schema::dropIfExists('commit');
    }
};
