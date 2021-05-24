<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\facades\DB;
use Session;

class HomeController extends Controller
{
    public function index(){
    	$data = DB::table('menus')
                        ->select('id', 'nama_menu', 'picture', 'description', 'price')
                        ->get();
    	$tabel = DB::table('tables')
                        ->select('id', 'no_meja', 'status')
                        ->where('status', '=', 'kosong')
                        ->get();
        $nama = DB::table('users')
        				->select('id', 'nama')
        				->where('level', '=', 'user')
        				->get();
        $cart = DB::table('cart')
                        ->select('id_menus')
                        ->get();
        return view('Homepage.home', compact('data', 'tabel', 'nama', 'cart'));
}

}
