<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswaAPIcontroller extends Controller
{
    public function all()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'berhasil ditampilkan',
            'data' => $mahasiswa

        ],200);
    }

    public function create(Request $request)
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);
        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan',
                'data' => $mahasiswa
    
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
        $mahasiswa = Mahasiswa::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);
        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah',
                'data' => $mahasiswa
    
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
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Dihapus',
                'data' => $mahasiswa
    
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
