<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUnique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::update('alter table `pcd` modify `cpf` VARCHAR(200) UNIQUE');
        
         DB::update('alter table `pcd` modify `rg` VARCHAR(200) UNIQUE');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pcd');
    }
}
