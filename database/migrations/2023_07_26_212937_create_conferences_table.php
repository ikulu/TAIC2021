<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('theme');
            $table->integer('regionId');
            $table->string('venue');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('registeredPrice');
            $table->integer('nonRegisteredPrice');
            $table->longText('Message');
            $table->boolean('isCurrent')->default(0);
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
        Schema::dropIfExists('conferences');
    }
}
