<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    protected $product;
    function __construct()
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
        $data['nama'] = $name;
        $data['title'] = "Judul halaman";
        return view('front', $data);
    }

    public function kategori($id = null)
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
        $meta = ['title' => 'Kategori'];
        if (!is_null($id)) {
            echo $data['kat'][$id];
        } else {
            echo view('layout/header', $meta);
            echo view('layout/sidebar');
            echo view('content/kategori', $data);
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
