<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // TAMPILKAN HALAMAN CART
    public function index()
    {
        $cart = null;
        return view('cart.index',compact('cart')); 
        // atau sementara:
        // return 'Cart page';
    }

    // TAMBAH KE CART
    public function add(Request $request)
    {
         return redirect()->route('cart.index')
        ->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }

    // UPDATE ITEM CART
    public function update(Request $request, $item)
    {
        //
    }

    // HAPUS ITEM CART
    public function remove($item)
    {
        //
    }
}
