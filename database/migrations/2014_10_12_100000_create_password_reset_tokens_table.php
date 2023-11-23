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
        Schema::create('password_reset_tokens_jonny', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

          public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens_jonny');
    }

    /**
     * Reverse the migrations.
     */

};
