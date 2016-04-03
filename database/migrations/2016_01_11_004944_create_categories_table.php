<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('price')->default(0);
            $table->timestamp('started')->nullable();
            $table->timestamp('ended')->nullable();
            $table->integer('min_user')->default(0);
            $table->integer('max_user')->nullable(0);
            $table->longText('description')->nullable();
            $table->string('type');
            $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
