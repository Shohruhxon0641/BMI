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
        Schema::create('bron_room', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable()->default(12);
            $table->integer('rooms_id')->unsigned()->nullable()->default(12);
            $table->string('meeting_name', 100)->nullable()->default('text');
            $table->date('data')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
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
        Schema::dropIfExists('bron_room');
    }
};
