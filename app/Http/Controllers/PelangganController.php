<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan; 

class PelangganController extends Controller
{
    public function create(Request $request)
    {
        return Pelanggan::create($request->all());
    }

    public function read()
    {
        return Pelanggan::all();
    }

    public function update(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id);
        $pelanggan->update($request->all());
        return $pelanggan;
    }

    public function delete(Request $request)
    {
        Pelanggan::destroy($request->id);
        return response()->json(['message'=>'Pelanggan dihapus']);
    }
}
