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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('main_image');
            $table->string('sub_image1')->nullable();
            $table->string('sub_image2')->nullable();
            $table->string('blog_title');
            $table->text('blog_body');
            $table->string('quotes')->nullable();
            $table->string('quotes_author')->nullable();
            $table->string('blog_author');
            $table->string('author_id');
            $table->string('time_to_read')->default(2);
            $table->json('blog_tags')->nullable();
            $table->string('blog_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
