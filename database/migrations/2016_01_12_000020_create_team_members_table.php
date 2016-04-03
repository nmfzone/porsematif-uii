<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('generation');
            $table->string('phone');
            $table->string('position')->nullable();
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('users')->onDelete('cascade');
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
            Schema::drop('team_members');
        }
    }
