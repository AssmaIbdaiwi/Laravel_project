<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationReceptorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation__receptors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donated_item_id');
            $table->string('donation_name');
            $table->string('donation_description');
            $table->string('donation_image');
            $table->timestamps();
            // $table->foreign('donated_item_id')->on('products')->references('id')
            // ->onDelete('CASCADE')
            // ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation__receptors');
    }
}
