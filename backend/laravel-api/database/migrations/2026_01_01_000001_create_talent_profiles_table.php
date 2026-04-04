<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('talent_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('stage_name');
            $table->string('city')->nullable();
            $table->text('bio')->nullable();
            $table->decimal('day_rate', 10, 2)->nullable();
            $table->decimal('hourly_rate', 10, 2)->nullable();
            $table->string('verification_status')->default('PENDING');
            $table->string('subscription_status')->default('INACTIVE');
            $table->decimal('average_rating', 3, 2)->default(0);
            $table->integer('performance_score')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('talent_profiles');
    }
};
