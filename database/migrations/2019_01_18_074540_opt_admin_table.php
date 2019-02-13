<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OptAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            //
            $table->string("firstName")->after("name");
            $table->string("lastName")->after("name");
            $table->string("lastIp")->after("remember_token");
            $table->string("active")->after("remember_token");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            //
            $table->dropColumn("firstName");
            $table->dropColumn("lastName");
            $table->dropColumn("lastIp");
            $table->dropColumn("active");
        });
    }
}
