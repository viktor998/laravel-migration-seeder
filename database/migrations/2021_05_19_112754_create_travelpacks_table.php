<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelpacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelpacks', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 30);
            $table->string('host_structure', 40);
            $table->string('from', 15);
            $table->smallInteger('overnight_days');
            $table->string('formula', 25)->nullable();
            $table->float('price', 8, 2);
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
        Schema::dropIfExists('travelpacks');
    }
}
