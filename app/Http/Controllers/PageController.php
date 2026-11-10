<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', ['username' => $username]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', ['username' => $username]);
    }

    public function pengelolaan()
    {
        $menus = [
            ['nama' => 'Nasi Goreng', 'harga' => 15000, 'kategori' => 'Makanan', 'gambar' => 'nasi-goreng.jpg'],
            ['nama' => 'Mie Ayam', 'harga' => 13000, 'kategori' => 'Makanan', 'gambar' => 'mie-ayam.png'],
            ['nama' => 'Es Teh', 'harga' => 5000, 'kategori' => 'Minuman', 'gambar' => 'es-teh.png'],
            ['nama' => 'Es Jeruk', 'harga' => 5000, 'kategori' => 'Minuman', 'gambar' => 'es-jeruk.jpeg'],
            ['nama' => 'Kopi', 'harga' => 8000, 'kategori' => 'Minuman', 'gambar' => 'kopi.png'],
            ['nama' => 'Pisang Goreng', 'harga' => 8000, 'kategori' => 'Camilan', 'gambar' => 'pisang-goreng.png'],
            ['nama' => 'Kentang Goreng', 'harga' => 10000, 'kategori' => 'Camilan', 'gambar' => 'kentang-goreng.png'],
        ];

        return view('pengelolaan', ['menus' => $menus]);
    }
}