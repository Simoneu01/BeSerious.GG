<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('player_team', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Player::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Team::class)->constrained()->cascadeOnDelete();
            $table->string('role')->default('player');
            $table->timestamp('joined_at')->nullable();
            $table->timestamp('detached_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('player_team');
    }
};
