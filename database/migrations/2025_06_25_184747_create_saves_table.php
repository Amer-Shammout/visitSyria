<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavesTable extends Migration
{
    public function up()
    {
        Schema::create('saves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->foreignId('post_id')
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete();
            $table->foreignId('place_id')
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete();
            $table->foreignId('trip_id')
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete();
            $table->foreignId('event_id')
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete();
            $table->foreignId('article_id')
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('saves');
    }
}
