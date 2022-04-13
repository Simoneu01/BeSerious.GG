<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('body');
            $table->string('img')->nullable();
            $table->string('url')->nullable();
            $table->string('author')->nullable();
            $table->string('author_img')->nullable();
            $table->string('author_link')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
