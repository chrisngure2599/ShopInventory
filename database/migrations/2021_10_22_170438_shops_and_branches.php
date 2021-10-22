<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopsAndBranches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops_and_branches',function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_name');
            $table->integer('owner_id');
            $table->string('location')->nullable();
            $table->integer('parent_shop_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shops_and_branches');
    }
}
