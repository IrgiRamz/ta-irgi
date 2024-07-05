<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Metodebayar;
use App\Models\Produkjasa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_pesanan = Pesanan::with(['user', 'produk', 'metodeBayar'])->get();
        return view('admin.pesanan.index', compact('ar_pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ar_pesanan = Produkjasa::all();
        return view('admin.pesanan.create', compact('ar_pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = Pesanan::find($id);
        if (!$pesanan) {
            return redirect()->route('pesanan.index')->with('error', 'Data tidak ditemukan.');
        }
        try {
            Pesanan::where('idpesanan', $id)->delete();
            return redirect()->route('pesanan.index')->with('success', 'Data Pesanan Berhasil Dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('pesanan.index')->with('error', 'Gagal Menghapus Data.');
        }
    }
}
