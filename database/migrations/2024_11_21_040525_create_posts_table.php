<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nama lengkap
            $table->string('email'); // Email
            $table->string('phone'); // Nomor telepon
            $table->string('drink'); // Pilihan minuman
            $table->integer('quantity'); // Jumlah pesanan
            $table->text('address'); // Alamat pengiriman
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};







