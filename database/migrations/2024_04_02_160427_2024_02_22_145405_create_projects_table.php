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
            $table->bigInteger('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('image')->nullable();
            $table->longText('video')->nullable();
            $table->text('short_details')->nullable();
            $table->longText('long_details')->nullable();
            $table->string('category_id')->nullable();
            $table->string('code')->nullable();
            $table->string('vendor')->nullable();
            $table->string('team_id')->nullable();
            $table->string('panel')->nullable();
            $table->text('start_date')->nullable();
            $table->text('end_date')->nullable();
            $table->string('progress')->nullable();
            $table->tinyInteger('client_id')->nullable();
            $table->string('commit')->nullable();
            $table->string('live_status')->nullable();
            $table->boolean('status')->default(1);
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
