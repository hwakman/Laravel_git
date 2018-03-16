<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authen', function (Blueprint $table) {
            $table->string('username',255)->charset('utf8')->default(0);
            $table->string('password',255)->charset('utf8')->default(0);
        });

        Schema::create('user', function (Blueprint $table){
            $table->string('name',255)->charset('utf8')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authen');
    }
}
