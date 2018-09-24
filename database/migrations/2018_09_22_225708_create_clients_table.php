<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->default(3);
            $table->integer('status_id')->default(5);
            $table->integer('photo_id')->nullable();
            $table->integer('ticket_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->string('passport_no');
            $table->date('expiry_date')->nullable();
            $table->date('issue_date')->nullable();
            $table->string('mobile');
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
        Schema::dropIfExists('clients');
    }
}
