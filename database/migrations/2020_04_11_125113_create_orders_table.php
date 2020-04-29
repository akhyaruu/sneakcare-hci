<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // foreign key constraint
            $table->unsignedBigInteger('id_treatment');
            $table->foreign('id_treatment')->references('id')->on('treatments');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            // ------------------------------------------------
            $table->string('jenis_sepatu', 20);	
            $table->string('ukuran_sepatu', 4);	
            $table->string('alamat_pengambilan', 150);	
            $table->string('no_telp_customer', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
