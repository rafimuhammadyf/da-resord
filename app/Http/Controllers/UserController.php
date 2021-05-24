<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\facades\DB;
use Illuminate\support\facades\Session;
use App\Models\User;

    class UserController extends Controller
    {
        public function index()
        {   
            $data = DB::table('users')
                            ->select('id', 'nama', 'no_telp', 'email', 'level')
                            ->get();

            return view('User.user', compact('data'));
        }

        public function store(Request $request)
        {
            $this->validate($request, [
                'email' => 'required|string|max:50',
                'name' => 'required|string|max:50',
                'password' => 'required|string|min:5',
            ]);

            $user = new User();
            $user->nama = $request->name;
            $user->no_telp = $request->no_telp;
            $user->email = $request->email;
            $user->password = md5($request->password);
            $user->level = 'user';
            $user->save();

            Session::flush('pesan_register', 'Berhasil Register');
            return redirect('masuk')->with('alert_pesan', 'Data anda telah disimpan');
        }

        public function stores(Request $request)
        {
        $this->validate($request, [
            'nama' => 'required|string', 
            'email' => 'required|string|max:50', 
            'password' => 'required|string|min:5',
            'level' => 'required',
        ]);
   
        $users = new User();
        $users->nama = $request->nama;
        $users->no_telp = $request->no_telp;
        $users->email = $request->email;
        $users->password = md5($request->password);
        $users->level = $request->level;
        $users->save();
        
        return redirect('user')->with('alert_pesan', 'Data telah disimpan');
            
        }

        public function edit($id)
        {
            $data = User::where('id', $id)->get();

            return view('User.user_update', compact('data'));
        }
 
        public function update(Request $request, $id)
        {
            DB::table('users')->where('id',$request->id)->update ([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => md5($request->password),
            'level' => $request->level
            ]);

        return redirect('user')->with('alert_pesan', 'Data telah diubah');
        }

        public function destroy($id)
        {
            $data = User::where('id', $id)->first();

            if($data != null){
                $data->delete();

                return redirect('user')->with('alert_message', 'Berhasil menghapus data!');
            }

            return redirect('/user')->with('alert_message', 'ID tidak ditemukan!');
        }
    }
