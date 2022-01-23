<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhonenumberAndSurnameAndAdressToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name')->nullable();
            $table->string('phone_number')->after('surname')->nullable();
            $table->string('city')->after('email')->nullable();
            $table->string('street')->after('city')->nullable();
            $table->integer('building_number')->after('street')->nullable();
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
            $table->dropColumn('surname');
            $table->dropColumn('phone_number');
            $table->dropColumn('city');
            $table->dropColumn('street');
            $table->dropColumn('building_number');
        });
    }
}
