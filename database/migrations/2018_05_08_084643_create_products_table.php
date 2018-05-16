<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 256);
            $table->string('category', 128);
            $table->string('origin', 256)->nullable();
            $table->string('unit_type', 128)->nullable();
            $table->mediumInteger('unit_volume')->nullable();
            $table->mediumInteger('alcohol_content')->nullable();
            $table->string('sugar_content', 256)->nullable();
            $table->string('producer_name', 256)->nullable();
            $table->date('release_date')->nullable();
            $table->boolean('is_seasonal')->nullable();
            $table->boolean('is_kosher')->nullable();
            $table->string('description', 2056)->nullable();
            $table->string('pairing', 2056)->nullable();
            $table->string('img_url', 2056)->nullable();
            $table->string('varietal', 128)->nullable();
            $table->string('style', 128)->nullable();
            $table->string('upc', 128)->nullable();
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