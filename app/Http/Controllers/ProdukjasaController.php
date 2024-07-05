<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produkjasa;

class ProdukjasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_produk = Produkjasa::all();
        return view('admin.produkjasa.index', compact('ar_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produkjasa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->kategori == "kecantikan") {
            $kategorinya = "CTK-";
        } elseif ($request->kategori == "kesehatan") {
            $kategorinya = "KSH-";
        } elseif ($request->kategori == "gigi") {
            $kategorinya = "GGI-";
        } else {
            $kategorinya = "LLN-";
        }

        // Ambil tanggal hari ini dalam format YYMMDD
        $date = date('ymd');

        // Dapatkan kode user terakhir berdasarkan role dan tanggal
        $lastProduk = Produkjasa::where('kodeproduk', 'like', $kategorinya . $date . '%')->orderBy('kodeproduk', 'desc')->first();

        // Tentukan nomor urut berikutnya
        if ($lastProduk) {
            $lastNumber = (int)substr($lastProduk->kodeproduk, -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '001';
        }

        // Gabungkan prefix, tanggal, dan nomor urut untuk kode user baru
        $kode = $kategorinya . $date . $newNumber;

        $request->validate([
            'namaproduk' => ['required', 'string'],
            'harga' => ['required'],
        ]);

        Produkjasa::create([
            'kodeproduk' => $kode,
            'namaproduk' => $request['namaproduk'],
            'harga' => $request['harga'],
            'kategori' => $request['kategori'],
            'status' => $request['status'],
        ]);
        return redirect()->route('produkjasa.index')->with('success', 'Data Chatbot Berhasil Ditambah.');
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
        $row = Produkjasa::find($id);
        return view('admin.produkjasa.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update data user
        $produk = Produkjasa::find($id);

        if ($request->kategori != $request->kategorilast) {
            // Tentukan kode awal berdasarkan role
            if ($request->kategori == "kecantikan") {
                $kategorinya = "CTK-";
            } elseif ($request->kategori == "kesehatan") {
                $kategorinya = "KSH-";
            } elseif ($request->kategori == "gigi") {
                $kategorinya = "GGI-";
            } else {
                $kategorinya = "LLN-";
            }

            // Ambil tanggal hari ini dalam format YYMMDD
            $date = date('ymd');

            // Dapatkan kode user terakhir berdasarkan role dan tanggal
            $lastKategori = Produkjasa::where('kodeproduk', 'like', $kategorinya . $date . '%')->orderBy('kodeproduk', 'desc')->first();

            // Tentukan nomor urut berikutnya
            if ($lastKategori) {
                $lastNumber = (int)substr($lastKategori->kode, -3);
                $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $newNumber = '001';
            }

            // Gabungkan role, tanggal, dan nomor urut untuk kode user baru
            $kode = $kategorinya . $date . $newNumber;
        } else {
            $kode = $request->kodeproduk;
        }

        $request->validate([
            'namaproduk' => ['required', 'string'],
            'harga' => ['required'],
        ]);

        $produk->kodeproduk = $kode;
        $produk->namaproduk = $request->namaproduk;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->status = $request->status;

        $produk->save();

        return redirect()->route('produkjasa.index')->with('success', 'Metode Bayar Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produkjasa::find($id);
        if (!$produk) {
            return redirect()->route('produkjasa.index')->with('error', 'Data tidak ditemukan.');
        }

        try {
            Produkjasa::where('idproduk', $id)->delete();
            return redirect()->route('produkjasa.index')->with('success', 'Data Berhasil Dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('produkjasa.index')->with('error', 'Gagal Menghapus Data.');
        }
    }
}
