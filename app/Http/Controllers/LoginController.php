<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\facades\session;
use Illuminate\Support\facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('Login.login');
    }

    public function check(Request $req){
        $this->validate($req, [
            'email'=> 'required',
            'password' => 'required',
        ]);

        $proses=User::where('email', $req->email)
                    ->where('password', md5($req->password));
        $admin=User::where('email', $req->email)
                    ->where('password', md5($req->password))
                    ->where('level', 'admin');
        $resto=User::where('email', $req->email)
                    ->where('password', md5($req->password))
                    ->where('level', 'resto');
                    
        if($admin->count()>0){
            $data=$admin->first();
            Session::put('nama', $data->nama);
            Session::put('email', $data->email);
            Session::put('status', $data->status);
            Session::put('login_status', true);
            return redirect('dashboard');
        } elseif($resto->count()>0){
            $data=$resto->first();
            Session::put('nama', $data->nama);
            Session::put('email', $data->email);
            Session::put('status', $data->status);
            Session::put('login_status', true);
            return redirect('manage');
        } elseif($proses->count()>0){
            $data=$proses->first();
            Session::put('nama', $data->nama);
            Session::put('email', $data->email);
            Session::put('status', $data->status);
            Session::put('login_status', true);
            return redirect('homepage');
        } else{
            Session::flush('pesan', 'Email dan Password salah');
            return redirect('masuk');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('masuk');
    }
}
