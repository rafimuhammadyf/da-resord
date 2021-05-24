<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\facades\DB;
use Session;

class DashboardController extends Controller
{
    public function index1(){
        $menu = DB::table('menus')
        				->select('id')
        				->get();
        $meja = DB::table('tables')
        				->select('id')
        				->get();
        $user = DB::table('users')
        				->select('id')
        				->get();
        $trans = DB::table('orders')
        				->select('id')
        				->get();
        return view('Dashboard.dashboard', compact('menu', 'meja', 'user', 'trans'));
}

		public function index2(){
        $menu = DB::table('menus')
        				->select('id')
        				->get();
        $meja = DB::table('tables')
        				->select('id')
        				->get();
        $user = DB::table('users')
        				->select('id')
        				->get();
        $trans = DB::table('orders')
        				->select('id')
        				->get();
        return view('Dashboard.manage', compact('menu', 'meja', 'user', 'trans'));
}

}
