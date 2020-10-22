<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswas'] = DB::table('data_mahasiswas')->get();

        return view('mahasiswa.data-mahasiswa', $data);
    }

    public function add()
    {
        return view('mahasiswa.tambah-data-mahasiswa');
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim'            => 'required',
            'alamat'         => 'required'
        ]);

        DB::table('data_mahasiswas')->insert([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim'            => $request->nim,
            'alamat'         => $request->alamat,
            'created_at'     => date('Y-m-d')
        ]);

        return redirect()->route('data-mahasiswa');

    }

    public function update(Request $request, $id)
    {
        date_default_timezone_set('Asia/Jakarta');

        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim'            => 'required',
            'alamat'         => 'required'
        ]);

        DB::table('data_mahasiswas')->where('id', $id)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim'            => $request->nim,
            'alamat'         => $request->alamat,
            'updated_at'     => date('Y-m-d')
        ]);

        return redirect()->route('data-mahasiswa');

    }

    public function edit(Request $request, $id)
    {
        $data['mahasiswa'] = DB::table('data_mahasiswas')
                                ->where('id', $id)
                                ->get();

        return view('mahasiswa.edit-data-mahasiswa', $data);
    }

    public function detail($id)
    {
        $data['mahasiswa'] = DB::table('data_mahasiswas')->where('id', $id)->get();

        return view('mahasiswa.detail-data-mahasiswa', $data);
    }

    public function destroy($id)
    {
        DB::table('data_mahasiswas')->where('id', $id)->delete();

        return redirect()->route('data-mahasiswa');
    }

}
