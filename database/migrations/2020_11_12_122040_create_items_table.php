<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('price');
            $table->integer('quantity');
            $table->boolean('availability')->default('1');
            $table->string('image', 50)->nullable();
            $table->timestamps();

            $table->integer('company_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('category_id');
            $table->integer('condition_id')->after('availability');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
