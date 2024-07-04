<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$ar_users = DB::table('users')->where('status', '=', 'aktif'); 
        $ar_users = User::all()->where('status', '=', 'aktif');
        return view('admin.user.index', compact('ar_users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tentukan prefix berdasarkan role
        if ($request->role == "admin") {
            $rolenya = "ADM-";
        } elseif ($request->role == "finance") {
            $rolenya = "FNC-";
        } else {
            $rolenya = "SPP-";
        }

        // Ambil tanggal hari ini dalam format YYMMDD
        $date = date('ymd');

        // Dapatkan kode user terakhir berdasarkan role dan tanggal
        $lastUser = User::where('kodeuser', 'like', $rolenya . $date . '%')->orderBy('kodeuser', 'desc')->first();

        // Tentukan nomor urut berikutnya
        if ($lastUser) {
            $lastNumber = (int)substr($lastUser->kodeuser, -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '001';
        }

        // Gabungkan prefix, tanggal, dan nomor urut untuk kode user baru
        $kodeuser = $rolenya . $date . $newNumber;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'kodeuser' => $kodeuser,
            'name' => $request['name'],
            'email' => $request['email'],
            'telepon' => $request['telepon'],
            'role' => $request['role'],
            'status' => $request['status'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('kelolausers.index')->with('success', 'Akun User berhasil ditambah.');
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
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('kelolausers.index')->with('error', 'User tidak ditemukan.');
        }

        try {
            User::where('id', $id)->delete();
            return redirect()->route('kelolausers.index')->with('success', 'Akun berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('kelolausers.index')->with('error', 'Gagal menghapus akun.');
        }
    }
}
