<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->mediumText('title')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->text('dec')->nullable();
            $table->string('img')->nullable();
            $table->string('price')->nullable();
            $table->string('url')->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')->references('id')->on('catogeries');
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
        Schema::dropIfExists('portfolios');
    }
}
