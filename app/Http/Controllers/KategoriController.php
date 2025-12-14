<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori; 

class KategoriController extends Controller
{
    public function create(Request $request)
    {
        return Kategori::create($request->all());
    }

    public function read()
    {
        return Kategori::all();
    }

    public function update(Request $request)
    {
        $kategori = Kategori::find($request->id);
        $kategori->update($request->all());
        return $kategori;
    }

    public function delete(Request $request)
    {
        Kategori::destroy($request->id);
        return response()->json(['message'=>'Kategori dihapus']);
    }
}
