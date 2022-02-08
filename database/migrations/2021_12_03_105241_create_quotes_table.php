<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brand_id');
            $table->bigInteger('modal_id');
            $table->string('issue')->nullable();
            $table->string('name');
            $table->string('describtion')->nullable();
            $table->string('email');
            $table->string('number')->nullable();
            $table->string('contact_preference');
            $table->string('repairing_methods');
            $table->string('status')->default(0);
            $table->string('reply')->nullable();

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
        Schema::dropIfExists('quotes');
    }
}
