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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('img');
            $table->string('year');
            $table->string('company');
            $table->string('link');
            $table->string('description');
            $table->string('excerpt');
            $table->string('timeline');
            $table->text('content');
            $table->text('bullet_points');
            $table->integer('is_active')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
