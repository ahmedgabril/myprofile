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
            $table->string('clint_name')->nullable();
            $table->date('date')->nullable();
            $table->string('icon')->nullable();
            $table->text('dec')->nullable();
            $table->text('img')->nullable();
            $table->string('project_url')->nullable();
            $table->string('video_url')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();

            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')->references('id')->on('catogeries');
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
