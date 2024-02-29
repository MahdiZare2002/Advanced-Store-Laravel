<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemSelectedAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item_selected_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_item_id')->constrained('order_items')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_attribute_id')->constrained('category_attributes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_value_id')->constrained('category_values')->onUpdate('cascade')->onDelete('cascade');
            $table->string('value')->nullable();
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
        Schema::dropIfExists('order_item_selected_attributes');
    }
}
