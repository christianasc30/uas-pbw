<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class mahasiswacontroller extends Controller
{
    public function mhs(){
        $mahasiswa = Mahasiswa::orderby('id','desc')->paginate(10);
        return view('mahasiswa',['mahasiswa' => $mahasiswa],['cek' => 'mahasiswa']);        
    }

    public function cari(Request $req){
        $cari = $req -> cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orwhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa],['cek' => 'mahasiswa']);
    }

    public function formmahasiswa()
    {
        return view('formmahasiswa', ['cek' => 'mahasiswa']);
    }

    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa',['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }
    
    public function simpanmhs(Request $request)
    {
        $bidang_minat = implode(",",$request->get('bidang_minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $bidang_minat
        ]);
        return redirect("/mahasiswa")->with('alertsimpan','Berhasil Disimpan');
    }
    
    public function updatemahasiswa($id,Request $request)
    {
        $bidang_minat = implode(",",$request->get('bidang_minat'));
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $bidang_minat;
        $mahasiswa->save();
        return redirect("/mahasiswa")->with('alertupdate','Berhasil Diubah');
    }

    

    public function hapusmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect("/mahasiswa")->with('alertdelete','Berhasil Dihapus');
    }

}