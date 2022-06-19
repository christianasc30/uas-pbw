<?php

namespace App\Http\Controllers;
use App\dosen;

use Illuminate\Http\Request;

class dosenAPIcontroller extends Controller
{
    public function all()
    {
        $dosen = dosen::all();
        return response()->json([
            'success' => true,
            'message' => 'berhasil ditampilkan',
            'data' => $dosen

        ],200);
    }

    public function create(Request $request)
    {
        $dosen = dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $request->pakar
        ]);
        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan',
                'data' => $dosen
    
            ],200);
        }
        else 
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan',    
            ],401);
        }
        
    }

    public function update($id, Request $request)
    {
        $dosen = dosen::whereId($id)->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $request->pakar
        ]);
        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah',
                'data' => $dosen
    
            ],200);
        }
        else 
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah',    
            ],400);
        }
        
     
    }

    public function delete($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Dihapus',
                'data' => $dosen
    
            ],200);
        }
        else 
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Dihapus',    
            ],400);
        }
        
     
    }
}
