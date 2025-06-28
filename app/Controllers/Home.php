<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    protected $product;
    function __construct()
<<<<<<< HEAD
    {
        $this->product = new ProductModel();
    }


    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_home', $data);
    }

    public function hello($name = null)
    {
=======
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
    }


    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_home', $data);
    }

    public function hello($name = null)
    {
>>>>>>> 29b0c264b76cb88e7ef17cc5e16a46edbeb31f92
        $data['nama'] = $name;
        $data['title'] = "Judul halaman";
        return view('front', $data);
    }

    public function keranjang($id = null)
    {
        $data = [
            'kat' => [
                'Alat Tulis',
                'Pakaian',
                'Pertukangan',
                'Elektronik',
                'Snack'
            ],
        ];
<<<<<<< HEAD
        $meta = ['title' => 'Kategori'];
=======
        $meta = ['title' => 'keranjang'];
>>>>>>> 29b0c264b76cb88e7ef17cc5e16a46edbeb31f92
        if (!is_null($id)) {
            echo $data['kat'][$id];
        } else {
            echo view('layout/header', $meta);
            echo view('layout/sidebar');
<<<<<<< HEAD
            echo view('content/kategori', $data);
=======
            echo view('content/keranjang', $data);
>>>>>>> 29b0c264b76cb88e7ef17cc5e16a46edbeb31f92
            echo view('layout/footer');
        }
    }
    public function password()
    {
        echo view('Views/hash');
    }
    public function profile()
    {
        echo view('layout/profile');
    }
    public function faq()
    {
        echo view('layout/faq');
    }
}
