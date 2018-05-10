<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBottlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('origin');
            $table->string('unit_type');
            $table->string('unit_volume');
            $table->mediumInteger('alcohol_content');
            $table->string('sugar_content');
            $table->string('producer_name');
            $table->date('release_date');
            $table->boolean('is_seasonal');
            $table->boolean('is_kosher');
            $table->string('description');
            $table->string('pairing');
            $table->string('img_url');
            $table->string('varietal');
            $table->string('style');
            $table->bigInteger('upc');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bottles');
    }
}
