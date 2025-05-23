<?php

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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content')->nullable(); // Main content of the page
            $table->string('meta_title')->nullable(); // For SEO: browser title / search result title
            $table->text('meta_description')->nullable(); // For SEO: search result snippet
            $table->json('description')->nullable(); // For structured content like lists of points
            $table->string('image')->nullable(); // Main image for the page (e.g., banner)
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
