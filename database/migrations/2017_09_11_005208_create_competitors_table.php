<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('identification')->unique();
            $table->date('birthdate');
            $table->enum('gender', ['M', 'F']);
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('club');
            $table->string('references_number');
            $table->date('payment_date');    
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
        Schema::dropIfExists('competitors');
    }
}
