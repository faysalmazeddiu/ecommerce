<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_name',50);
            $table->string('admin_email_address',100);
            $table->string('admin_password',32);
            $table->tinyInteger('access_label');
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
        Schema::drop('tbl_admin');
    }
}
