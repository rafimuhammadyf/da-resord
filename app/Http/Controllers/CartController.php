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
 
class CartController extends Controller
{
    public function index()
    {

        $data = DB::table('cart')
                        ->select('cart.id_menus', 'menus.nama_menu', 'menus.picture', 'menus.price', 'menus.type', 'cart.qty', 'users.nama', 'tables.no_meja')
                        ->join('menus', 'menus.id', '=', 'cart.id_menus')
                        ->join('users', 'users.id', '=', 'cart.id_users')
                        ->join('tables', 'tables.id', '=', 'cart.id_tables')
                        ->get();

        return view('Cart.cart', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_menus' => 'required',
            'id_users' => 'required',
            'id_tables' => 'required',
        ]);
   
        $carts = new Cart();
        $carts->id_menus = $request->id_menus;
        $carts->id_users = $request->id_users;
        $carts->id_tables = $request->id_tables;
        $carts->qty = 1;
        $carts->save();
        
        return redirect('cart')->with('alert_pesan', 'Data telah disimpan');
            
    }

    // public function update(Request $request, $id)
    // {
    //     DB::table('cart')->where('id',$request->id)->update ([
    //         'id_items' => $request->id_items,
    //         'id_users' => $request->id_users,
    //         'qty' => $request->qty
    //         ]);
    //         // $picture = rand().$request->file('picture')->getClientOriginalName();
    //         // $request->file('picture')->move(base_path("./public/Uploads"), $picture);
            
            
    //     // $items = item::where('id', $id)->first();
    //     // $items->nama_items = $request->nama_items;
    //     // $items->picture = $picture;
    //     // $items->type = $request->type;
    //     // $items->deskription = $request->deskription;
    //     // $items->price = $request->price;
    //     // $items->stock = $request->stock;
    //     // $items->id_merchant = $request->id_merchant;
    //     // $items->save();
        
    //     return redirect('/cart')->with('alert_pesan', 'Data telah diubah');

    // }
    public function destroy($id)
    {
        $data = cart::where('id_menus', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('cart')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('cart')->with('alert_message', 'ID tidak ditemukan!');
    }



}