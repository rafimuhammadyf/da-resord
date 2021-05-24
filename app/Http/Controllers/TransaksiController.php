<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Validator;
use App\Models\Cart;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\facades\DB;
use Session;
 
class TransaksiController extends Controller
{
    public function index()
    {

        $booked = DB::table('orders')
                        ->select('id', 'nama_menu', 'no_meja', 'nama', 'price_total', 'status')
                        ->where('status', '=', 'dipesan')
                        ->get();
        $paid = DB::table('orders')
                        ->select('id', 'nama_menu', 'no_meja', 'nama', 'price_total', 'status')
                        ->where('status', '=', 'dibayar')
                        ->get();
        $finish = DB::table('orders')
                        ->select('id', 'nama_menu', 'no_meja', 'nama', 'price_total', 'status')
                        ->where('status', '=', 'selesai')
                        ->get();
        $cart = DB::table('cart')
                        ->select('id_menus')
                        ->get();

        return view('Pesanan.pesanan', compact('booked', 'paid', 'finish', 'cart'));
    }

    public function update(Request $request, $id)
    {
        DB::table('orders')->where('id',$request->id)->update ([
            'status' => 'dibayar'
            ]);
            
        return redirect('transaksi')->with('alert_pesan', 'Data telah diubah');
    }

}