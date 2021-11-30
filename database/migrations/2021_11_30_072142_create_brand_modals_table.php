<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandModalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_modals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brand_id');
            $table->bigInteger('modal_img')->nullable();
            $table->string('name');
            $table->string('issues')->nullable();
            $table->string('price')->nullable();
            $table->string('descriptions')->nullable();
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
        Schema::dropIfExists('brand_modals');
    }
}
