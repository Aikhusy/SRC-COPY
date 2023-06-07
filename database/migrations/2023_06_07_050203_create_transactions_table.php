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
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer('id_transaksi');
            $table->integer('tanggal');
            $table->string('kategori_transaksi', 20);
            $table->integer('id_produk');
            $table->integer('jumlah_pembayaran');
            $table->string('status_pembayaran', 20);
            $table->integer('id_metodde_pembayaran');
            $table->string('keterangan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};