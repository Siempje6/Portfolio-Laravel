<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('portfolio_comments')) {
            Schema::create('portfolio_comments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('portfolio_id');
                $table->unsignedBigInteger('user_id')->nullable();
                $table->string('user_email');
                $table->string('user_role');
                $table->text('comment');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_comments');
    }
};
