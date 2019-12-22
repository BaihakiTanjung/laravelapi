<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        return Guru::all();
    }

    public function create(request $request)
    {
        $guru  = new Guru;
        $guru->nama_depan = $request->nama_depan;
        $guru->nama_belakang = $request->nama_belakang;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->email = $request->email;
        $guru->mata_pelajaran = $request->mata_pelajaran;
        $guru->no_telepon = $request->no_telepon;
        $guru->alamat = $request->alamat;
        $guru->save();

        return "Data Berhasil Masuk";
    }

    public function update(request $request, $id)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $guru = Guru::find($id);
        $guru->nama_depan = $request->nama_depan;
        $guru->nama_belakang = $request->nama_belakang;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->email = $request->email;
        $guru->mata_pelajaran = $request->mata_pelajaran;
        $guru->no_telepon = $request->no_telepon;
        $guru->alamat = $request->alamat;
        $guru->save();

        return "Data Berhasil diupdate";
    }

    public function delete($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return "Data berhasil dihapus";
    }
}
