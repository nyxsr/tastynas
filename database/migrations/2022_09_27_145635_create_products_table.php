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
            $table->string('nama_produk');
            $table->unsignedBigInteger('categories_id');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->string('foto_produk1');
            $table->string('foto_produk2');
            $table->boolean('best_seller')->default(false);
            $table->float('panjang_produk')->nullable();
            $table->float('lebar_produk')->nullable();
            $table->float('tinggi_produk')->nullable();
            $table->float('panjang_package')->nullable();
            $table->float('lebar_package')->nullable();
            $table->float('tinggi_package')->nullable();
            $table->float('netto')->nullable();
            $table->float('berat_total')->nullable();
            $table->timestamps();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
