<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $table = 'pesanan';
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan', 50);	
            $table->string('jenis_sepatu', 25);	
            $table->integer('ukuran_sepatu');
            $table->string('jenis_treatment', 25);	
            $table->string('alamat_pengambilan', 150);	
            $table->char('no_telp_customer', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
