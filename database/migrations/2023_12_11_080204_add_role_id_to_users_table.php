<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleIdToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'role_id')) {
                $table->unsignedBigInteger('role_id');
                $table->foreign('role_id')->references('role_id')->on('roles');
            }
        });
    }
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Comment out the line below
            // $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
    }
}