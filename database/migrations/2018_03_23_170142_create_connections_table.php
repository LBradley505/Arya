<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('user',20);
            $table->string('password',30);
            $table->integer('host_id')->unsigned();
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();
        });

        Schema::table('connections', function(Blueprint $table) {
            $table->foreign('host_id')->references('id')->on('hosts');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('connections');
    }
}
