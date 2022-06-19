<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(5);
        return view('user',['user' => $user],['cek' => 'user']);
    }
    
    public function formuser()
    {
        return view('formuser', ['cek' => 'user']);
    }

    public function edituser($id)
    {
        $user = user::find($id);
        return view('edituser',['user' => $user], ['cek' => 'user']);
    }

    public function simpanuser(Request $request)
    {
        user::create([  
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => md5($request->password)
        ]);
        return redirect("/user")/*->with('alertsimpan','Berhasil Disimpan')*/;
    }
    
    public function updateuser($id,Request $request)
    {
        $user = user::find($id);
        $user->nama_user = $request->nama_user;
        $user->nik_user = $request->nik_user;
        $user->no_hp = $request->no_hp;
        $user->save();
        return redirect("/user")->with('alertupdate','Berhasil Diubah');
    }

    public function hapususer($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect("/user")->with('alertdelete','Berhasil Dihapus');
    }

    public function login()
    {
        return view('login', ['cek' => 'user']);
    }

    public function ceklogin(Request $request)
    {
        $user = user::where('no_hp', $request->no_hp)
                    ->where('password', md5($request->password))
                    ->first();

        if ($user){
            Auth::login($user);
            return redirect('/home');
        }
        else{
        return redirect('/');
        }
        }
       

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('alertout','Anda telah keluar');
    }
}