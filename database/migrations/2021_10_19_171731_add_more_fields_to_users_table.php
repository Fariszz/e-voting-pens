<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nim')->unique()->after('name');
            $table->unsignedBigInteger('status_ketua')->default('1');
            $table->unsignedBigInteger('status_wakil')->default('1');
            $table->foreign('status_ketua')->references('id')->on('status')->onDelete('cascade');
            $table->foreign('status_wakil')->references('id')->on('status')->onDelete('cascade');
            $table->boolean('is_admin')->default(false);
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
