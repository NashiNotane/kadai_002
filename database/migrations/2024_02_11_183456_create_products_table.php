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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('max_price')->unsigned();
            $table->integer('min_price')->unsigned();
            $table->datetime('close_time');
            $table->datetime('open_time');
            $table->string('郵便番号');
            $table->string('住所');
            $table->string('電話番号');
            $table->date('regular holiday');
            $table->date('registration_date');
            $table->date('update_date');
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
        Schema::dropIfExists('products');
    }
};
