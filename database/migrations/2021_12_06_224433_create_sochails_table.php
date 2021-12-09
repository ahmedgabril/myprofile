<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSochailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sochails', function (Blueprint $table) {
            $table->string('facebook')->nullable();
            $table->string('instgram')->nullable();
            $table->text('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('gmail')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('sochails');
    }
}
