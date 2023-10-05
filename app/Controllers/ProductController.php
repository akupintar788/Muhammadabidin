<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController {

    protected $product;

    public function __construct(){
        $this->product = new ProductModel();
    }

    public function insertProduct(){
        // Data yang akan dimasukkan ke dalam tabel produk
        $data = [
            'nama_product' => 'pisang',
            'description' => 'Buah-buahan',
        ];

        // Memanggil metode insertProductORM dari model
        $this->product->insertProductORM($data);
        
        // Redirect atau tampilkan pesan sukses sesuai kebutuhan
    }

    public function readProduct(){
        // Mengambil semua produk dari database menggunakan model
        $products = $this->product->findAll();

        // Data yang akan digunakan dalam view
        $data = [
            'products' => $products
        ];

        // Mengembalikan view 'product' dengan data
        return view('product', $data);
    }
}
