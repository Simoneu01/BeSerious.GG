<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('nickname');
            $table->string('img');
            $table->string('nationality')->nullable();
            $table->foreignIdFor(\App\Models\Team::class, 'current_team_id')->nullable()->constrained('teams');
            $table->json('socials')->nullable();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
