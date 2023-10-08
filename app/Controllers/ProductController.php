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
            'nama_product' => 'hp',
            'description' => 'alat untuk komunikasi',
            'harga' => '20000'
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
            'products' => $products // Perbaikan pada variabel yang dikirim ke view
        ];

        // Mengembalikan view 'product' dengan data
        return view('product', $data);
    }

    public function updateProduct($id){
        $nama_product = $this->request->getVar("nama_product");
        $description = $this->request->getVar("description");
        $harga = $this->request->getVar("harga");
        $data = [
            'nama_product' => $nama_product,
            'description' => $description,
            'harga' => $harga,
        ];
        $this->product->update($id, $data);
        return redirect()->to(base_url("products"));
    }

    public function getProduct($id) {
        $product = $this->product->where("id", $id)->first();
        $data = [
            'product' => $product
        ];
        return view('Edit', $data);
    }

    public function deleteProduct($id){
        $this->product->delete($id);
        return redirect()->to(base_url("products"));
    }
}
