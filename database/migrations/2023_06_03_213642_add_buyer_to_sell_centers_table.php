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
        Schema::table('sell_centers', function (Blueprint $table) {
            $table->bigInteger('buyer_id')->nullable();
            $table->decimal('max_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sell_centers', function (Blueprint $table) {
            $table->dropColumn('buyer_id');
        });
    }
};
