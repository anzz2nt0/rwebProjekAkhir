<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; 

class ProdukController extends Controller
{
    public function create(Request $request)
    {
        return Produk::create($request->all());
    }

    public function read()
    {
        return Produk::all();
    }

    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->update($request->all());
        return $produk;
    }

    public function delete(Request $request)
    {
        Produk::destroy($request->id);
        return response()->json(['message'=>'Produk dihapus']);
    }
}
