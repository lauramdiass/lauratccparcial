<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliarPcd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiar_pcd', function (Blueprint $table) {
             $table->integer('id_familiar')->unsigned();
              $table->foreign('id_familiar')
                   ->references('id')->on('familiar')
                   ->onDelete('cascade');
            $table->integer('id_pcd')->unsigned();
             $table->foreign('id_pcd')
                   ->references('id')->on('pcd')
                   ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('familiar_pcd');
    }
}
