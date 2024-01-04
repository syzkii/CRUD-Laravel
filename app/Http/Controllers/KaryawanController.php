<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){

        $data = Karyawan::all();
        return view('datapegawai', compact('data'));
    }

    public function tambahpegawai(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd ($request->all());
        Karyawan::create($request->all());
        return redirect()->route('pegawai')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Karyawan::find($id);
        dd($data);
    }
}


