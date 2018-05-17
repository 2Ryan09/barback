<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('supplier_id');
            $table->decimal('price', 12, 3);
            $table->decimal('cost', 12, 3);
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
        Schema::dropIfExists('offerings');
    }
}
