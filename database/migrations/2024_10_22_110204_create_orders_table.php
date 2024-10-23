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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan')->unique();
            $table->string('bukti_pembayaran')->nullable(); 
            $table->foreignId('id_customer')->references(column:'id')->on(table:'users');
            $table->integer('total_harga');
            $table->enum('status', ['Belum Dibayar', 'Menunggu Konfirmasi Pembayaran', 'Sedang Dikemas', 'Sedang Dikirim', 'Pesanan Selesai'])->default('Belum Dibayar');
            $table->string('nama_penerima');
            $table->string('no_wa');
            $table->string('link_gmaps');
            $table->string('detail_alamat');
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
        Schema::dropIfExists('orders');
    }
};
