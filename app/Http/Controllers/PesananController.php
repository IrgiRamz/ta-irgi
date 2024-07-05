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
        $ar_pesanan = Pesanan::with(['user', 'produk', 'metodeBayar'])->where('status' , '!=', 'verif')->get();
        return view('admin.pesanan.index', compact('ar_pesanan'));
    }

    public function index2()
    {
        $ar_pesanan = Pesanan::with(['user', 'produk', 'metodeBayar'])->where('status' , '=', 'verif')->get();
        return view('admin.history.index', compact('ar_pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ar_produk = Produkjasa::all();
        $ar_bayar = Metodebayar::all();
        return view('admin.pesanan.create', compact('ar_produk', 'ar_bayar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kodeinv = "INV-";

        // Ambil tanggal hari ini dalam format YYMMDD
        $date = date('ymd');

        // Dapatkan kode user terakhir berdasarkan role dan tanggal
        $lastinv = Pesanan::where('invoice', 'like', $kodeinv . $date . '%')->orderBy('invoice', 'desc')->first();

        // Tentukan nomor urut berikutnya
        if ($lastinv) {
            $lastNumber = (int)substr($lastinv->invoice, -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '001';
        }

        // Gabungkan prefix, tanggal, dan nomor urut untuk kode user baru
        $kode = $kodeinv . $date . $newNumber;

        // harga total
        $hrgpro = Produkjasa::find($request->produk);
        if($request->lamapakai == 12) {
            $total = $hrgpro->harga * 10;
        } else {
            $total = $request->lamapakai * $hrgpro->harga;
        }

        //domain
        $domains = $request->namadomain . $request->domain;

        $request->validate([
            'namapemesan' => ['required', 'string', 'max:255'],
            'emailpemesan' => ['required', 'string', 'email', 'max:255'],
            'nohp' => ['required'],
            'namaklinik' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
        ]);

        Pesanan::create([
            'invoice' => $kode,
            'namapemesan' => $request['namapemesan'],
            'emailpemesan' => $request['emailpemesan'],
            'nohp' => $request['nohp'],
            'namaklinik' => $request['namaklinik'],
            'lamapakai' => $request['lamapakai'],
            'total' => $total,
            'alamat' => $request['alamat'],
            'domain' => $domains,
            'waktupesan' => now(),
            'status' => $request['status'],
            'idproduk' => $request['produk'],
            'iduser' => $request['iduser'],
            'idbayar' => $request['metodebayar'],
        ]);
        return redirect()->route('pesanan.index')->with('success', 'Data Pemesanan Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $row = Pesanan::find($id);
        return view('admin.pesanan.show', compact('row'));
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
        $pesanan = Pesanan::find($id);
        $pesanan->status = $request->status;
        $pesanan->save();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan Berhasil Diverifikasi.');
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
