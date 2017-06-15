<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyDomain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('company_domain', function (Blueprint $table) {
                   $table->integer('company_id')->unsigned()->nullable();
                   $table->foreign('company_id')->references('id')
                       ->on('company')->onDelete('cascade');

                   $table->integer('domain_id')->unsigned()->nullable();
                   $table->foreign('domain_id')->references('id')
                       ->on('domain')->onDelete('cascade');

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
        Schema::drop('company_domain');
    }
}
