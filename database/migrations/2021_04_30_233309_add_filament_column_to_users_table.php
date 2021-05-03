<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table
                ->boolean('is_filament_user')
                ->default(false)
                ->after('profile_photo_path');
            $table
                ->boolean('is_filament_admin')
                ->default(false)
                ->after('is_filament_user');
            $table
                ->json('filament_roles')
                ->nullable()
                ->after('is_filament_admin');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('filament_roles', 'is_filament_user', 'is_filament_admin');
        });
    }
};
