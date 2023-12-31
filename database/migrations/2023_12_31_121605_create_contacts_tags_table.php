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
        Schema::create('contacts_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tags_id');
            $table->unsignedBigInteger('contacts_id');
            $table->foreign('contacts_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts_tags');
    }
};
