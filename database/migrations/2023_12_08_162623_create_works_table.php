<?php

use App\Models\part;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('shortdes')->nullable();
            $table->text('des')->nullable();
            $table->text('imgsumnail')->nullable();
            $table->text('images')->nullable();
            $table->string('project_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('youtube_url')->nullable();

            $table->foreignIdFor(part::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
