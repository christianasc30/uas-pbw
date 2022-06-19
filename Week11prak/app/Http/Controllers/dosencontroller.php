<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;

class dosencontroller extends Controller
{
    public function dosen(){
        $dosen = Dosen::paginate(10);
        return view('dosen',['dosen' => $dosen],['cek' => 'dosen']);
    }

    public function cari(Request $req){
        $cari = $req -> cari;
        $dosen = Dosen::where('nama', 'like', '%'.$cari.'%')->orwhere('nidn', 'like', '%'.$cari.'%')->paginate();
        return view('dosen', ['dosen' => $dosen],['cek' => 'dosen']);
    }

    public function formdosen()
    {
        return view('formdosen',['cek' => 'dosen']);
    }
    public function editdosen($id)
    {
        $dosen = dosen::find($id);
        return view('editdosen',['dosen' => $dosen], ['cek' => 'dosen']);
    }
    
    public function simpandosen(Request $request)
    {
        $pakar = implode(",",$request->get('pakar'));
        dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $pakar
        ]);
        return redirect("/dosen")->with('alertsimpan','Berhasil Disimpan');
    }
    
    public function updatedosen($id,Request $request)
    {
        $pakar = implode(",",$request->get('pakar'));
        $dosen = dosen::find($id);
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->status = $request->status;
        $dosen->jafung = $request->jafung;
        $dosen->pakar = $pakar;
        $dosen->save();
        return redirect("/dosen")->with('alertupdate','Berhasil Diubah');
    }

    

    public function hapusdosen($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        return redirect("/dosen")->with('alertdelete','Berhasil Dihapus');
    }

}