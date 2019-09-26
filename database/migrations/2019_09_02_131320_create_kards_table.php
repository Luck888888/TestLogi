<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kards', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('birth_date')->nullable();
            $table->string('job');
            $table->string('email')->index();
            $table->string('about');
            $table->string('profile');
            $table->string('skills');

            $table->string('aducationame');
            $table->integer('year');
            $table->string('metaname');
            $table->string('meta');
            $table->string('portfolio');
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
        Schema::dropIfExists('kards');
    }
}
