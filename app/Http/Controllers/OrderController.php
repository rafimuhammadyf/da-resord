<?php
 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Validator;
use App\Models\Cart;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\facades\DB;
use Session;
 
class OrderController extends Controller
{
    public function index()
    {

        $data = DB::table('orders')
                        ->select('id', 'nama_menu', 'no_meja', 'nama', 'price_total', 'status')
                        ->get();

        return view('Transaksi.transaksi', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_menu' => 'required',
            'no_meja' => 'required', 
            'nama' => 'required', 
            'price_total' => 'required', 
        ]);
    
        $orders = new Order();
        $orders->nama_menu = $request->nama_menu;
        $orders->no_meja = $request->no_meja;
        $orders->nama = $request->nama;
        $orders->price_total = $request->price_total;
        $orders->status = 'dipesan';
        $orders->save();
        
        $request->session()->forget('cart');

        return redirect('transaksi')->with('alert_pesan', 'Data telah disimpan');
            
    }

	public function edit($id)
    {
        $data = Order::where('id', $id)->get();

        return view('Transaksi.transaksi_update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        DB::table('orders')->where('id',$request->id)->update ([
            'nama_menu' => $request->nama_menu, 
            'no_meja' => $request->no_meja, 
            'nama' => $request->nama, 
            'price_total' => $request->price_total, 
            'status' => $request->status
            ]);
            
        return redirect('pesanan')->with('alert_pesan', 'Data telah diubah');
    }

    public function destroy($id)
    {
        $data = Order::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('pesanan')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('pesanan')->with('alert_message', 'ID tidak ditemukan!');
    }


}