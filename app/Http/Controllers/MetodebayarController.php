<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Metodebayar;


class MetodebayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_bayar = Metodebayar::all();
        return view('admin.metodebayar.index', compact('ar_bayar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.metodebayar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Tentukan prefix berdasarkan role
        if ($request->tipebayar == "bank") {
            $tipebayarnya = "BNK-";
        } else {
            $tipebayarnya = "EWL-";
        }

        // Ambil tanggal hari ini dalam format YYMMDD
        $date = date('ymd');

        // Dapatkan kode user terakhir berdasarkan role dan tanggal
        $lastBayar = Metodebayar::where('kode', 'like', $tipebayarnya . $date . '%')->orderBy('kode', 'desc')->first();

        // Tentukan nomor urut berikutnya
        if ($lastBayar) {
            $lastNumber = (int)substr($lastBayar->kodeuser, -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '001';
        }

        // Gabungkan prefix, tanggal, dan nomor urut untuk kode user baru
        $kode = $tipebayarnya . $date . $newNumber;

        $request->validate([
            'pembayaran' => ['required'],
            'norek' => ['required'],
        ]);

        Metodebayar::create([
            'kode' => $kode,
            'pembayaran' => $request['pembayaran'],
            'norek' => $request['norek'],
            'tipe' => $request['tipebayar'],
            'status' => $request['status'],
            'iduser' => $request['pembuat'],
        ]);
        return redirect()->route('metodebayar.index')->with('success', 'Metode Bayar Berhasil Ditambah.');
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
        $row = Metodebayar::find($id);
        return view('admin.metodebayar.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update data user
        $metodebayar = Metodebayar::find($id);

        if ($request->tipe != $request->tipelast) {
            // Tentukan kode awal berdasarkan role
            if ($request->role == "bank") {
                $tipenya = "BNK-";
            } else {
                $tipenya = "EWL-";
            }

            // Ambil tanggal hari ini dalam format YYMMDD
            $date = date('ymd');

            // Dapatkan kode user terakhir berdasarkan role dan tanggal
            $lastTipe = Metodebayar::where('kode', 'like', $tipenya . $date . '%')->orderBy('kode', 'desc')->first();

            // Tentukan nomor urut berikutnya
            if ($lastTipe) {
                $lastNumber = (int)substr($lastTipe->kode, -3);
                $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $newNumber = '001';
            }

            // Gabungkan role, tanggal, dan nomor urut untuk kode user baru
            $kode = $tipenya . $date . $newNumber;
        } else {
            $kode = $request->kode;
        }

        $request->validate([
            'pembayaran' => ['required'],
            'norek' => ['required'],
        ]);

        $metodebayar->kode = $kode;
        $metodebayar->pembayaran = $request->pembayaran;
        $metodebayar->norek = $request->norek;
        $metodebayar->status = $request->status;

        $metodebayar->save();

        return redirect()->route('metodebayar.index')->with('success', 'Metode Bayar Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $metode = Metodebayar::find($id);
        if (!$metode) {
            return redirect()->route('metodebayar.index')->with('error', 'Data tidak ditemukan.');
        }

        try {
            Metodebayar::where('idbayar', $id)->delete();
            return redirect()->route('metodebayar.index')->with('success', 'Data Berhasil Dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('metodebayar.index')->with('error', 'Gagal Menghapus Data.');
        }
    }
}
