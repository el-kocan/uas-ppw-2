<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menampilkan data dengan Pagination (Task 15)
    public function index()
    {
        $data = Pegawai::with('pekerjaan')->paginate(10);
        return view('pegawai.index', compact('data'));
    }

    // Menampilkan form tambah (Butuh data pekerjaan untuk dropdown)
    public function create()
    {
        $pekerjaans = Pekerjaan::all();
        return view('pegawai.create', compact('pekerjaans'));
    }

    // Menyimpan data & Notifikasi (Task 13 & 14)
    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:pegawai,email',
        'gender' => 'required|in:male,female',           
        'pekerjaan_id' => 'required'
    ]);

        $data = $request->all();
        $data['is_active'] = 1; 

        Pegawai::create($data);

        return redirect()->route('pegawai.index')->with('success', 'Data Pegawai berhasil ditambahkan!');
    }
    public function edit(Request $request)
    {
        $pegawai = Pegawai::findOrFail($request->id);
        $pekerjaans = Pekerjaan::all();

        return view('pegawai.edit', compact('pegawai', 'pekerjaans'));
    }

    public function update(Request $request, $id)
{
    // Ambil data pegawai berdasarkan ID
    $pegawai = Pegawai::findOrFail($id);

    $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:pegawai,email,' . $id,
        'gender' => 'required',
        'pekerjaan_id' => 'required'
    ]);


    $pegawai->update($request->all());

    // Redirect dengan notifikasi (Task 14)
    return redirect()->route('pegawai.index')->with('success', 'Data Pegawai berhasil diubah!');
    }

    public function destroy(Request $request)
    {
        $data = Pegawai::findOrFail($request->id);
        $data->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data Pegawai berhasil dihapus!');
    }
}