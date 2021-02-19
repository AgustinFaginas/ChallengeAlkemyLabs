<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedAppsClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_apps_client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
             $table->unsignedBigInteger('app_id');
            $table->foreign('app_id')->references('id')->on('apps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchased_apps_client');
    }
}
