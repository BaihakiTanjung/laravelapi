<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        return Siswa::all();
    }

    public function create(request $request)
    {
        $siswa  = new Siswa;
        $siswa->nama_depan = $request->nama_depan;
        $siswa->nama_belakang = $request->nama_belakang;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->email = $request->email;
        $siswa->jurusan = $request->jurusan;
        $siswa->no_telepon = $request->no_telepon;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data Berhasil Masuk";
    }

    public function update(request $request, $id)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $siswa = Siswa::find($id);
        $siswa->nama_depan = $request->nama_depan;
        $siswa->nama_belakang = $request->nama_belakang;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->email = $request->email;
        $siswa->jurusan = $request->jurusan;
        $siswa->no_telepon = $request->no_telepon;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data Berhasil diupdate";
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "Data berhasil dihapus";
    }
}
