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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('AccountId');
            $table->string('Code');
            $table->string('ShippingName');
            $table->string('ShippingAddress');
            $table->string('ShippingPhone');
            $table->string('Notes');
            $table->bigInteger('VoucherId');
            $table->bigInteger('Total');
            $table->Integer('OderStatusId');
            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
};
