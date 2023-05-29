<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_centers', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->decimal('price');
            $table->text('description');
            $table->foreignId('owner_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            $table->integer('number_of_items');
            $table->string('Condition');
            $table->string('start_date');
            $table->string('end_date');
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
        Schema::dropIfExists('sell_centers');
    }
};
