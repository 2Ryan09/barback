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
            $table->string('name', 256);
            $table->string('origin', 256);
            $table->string('unit_type', 128);
            $table->mediumInteger('unit_volume');
            $table->mediumInteger('alcohol_content');
            $table->string('sugar_content', 256);
            $table->string('producer_name', 256);
            $table->date('release_date');
            $table->boolean('is_seasonal');
            $table->boolean('is_kosher');
            $table->string('description', 2056);
            $table->string('pairing', 2056);
            $table->string('img_url', 2056);
            $table->string('varietal', 128);
            $table->string('style', 128);
            $table->string('upc', 128);
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
