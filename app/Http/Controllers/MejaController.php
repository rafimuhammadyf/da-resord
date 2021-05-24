<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator;
use App\Models\Meja;
use App\Models\Menu;
use Illuminate\Support\facades\DB;
use Session;

class MejaController extends Controller
{
    public function index()
    {
        $data = DB::table('tables')
                        ->select('id', 'no_meja', 'status')
                        ->get();
        
        return view('Meja.meja', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_meja' => 'required',
            'status' => 'required'
        ]);
   
        $tables = new Meja();
        $tables->no_meja = $request->no_meja;
        $tables->status = $request->status;
        $tables->save();
        
        return redirect('meja')->with('alert_pesan', 'Data telah disimpan');
            
    }

    public function edit($id)
    {
        $data = Meja::where('id', $id)->get();
        return view('Meja.meja_update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        DB::table('tables')->where('id',$request->id)->update ([
            'no_meja' => $request->no_meja,
            'status' => $request->status
            ]);

        return redirect('meja')->with('alert_pesan', 'Data telah diubah');
    }

    public function destroy($id)
    {
        $data = Meja::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('meja')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('meja')->with('alert_message', 'ID tidak ditemukan!');
    }



}