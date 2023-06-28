<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('code');
            $table->integer('shares');
            $table->float('price');
            $table->timestamp('trading_date');
            $table->string('buy_sell');
            $table->float('credit_ratio');
            $table->float('lender_ratio');
            $table->text('memo');
            $table->integer('company_id');
            $table->string('chart_img');
            $table->float('per');
            $table->float('pbr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
};
