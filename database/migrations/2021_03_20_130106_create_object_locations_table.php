<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_location_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('point_id');
            $table->string('type_feature');
            $table->string('type_point');
            $table->float('x_coordinate');
            $table->float('y_coordinate');
            $table->string('xid');
            $table->string('name');
            $table->float('dist');
            $table->smallInteger('rate');
            $table->string('osm');
            $table->string('wikidata');
            $table->text('kinds');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('object_location_responses');
    }
}
