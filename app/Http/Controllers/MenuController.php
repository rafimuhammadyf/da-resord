<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator;
use App\Models\Menu;
use Illuminate\Support\facades\DB;
use Session;

class MenuController extends Controller
{
    public function index()
    {
        $data = DB::table('menus')
                        ->select('id', 'nama_menu', 'picture', 'type','description', 'price')
                        ->get();
        
        return view('Menu.menu', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_menu' => 'required',
            'picture' => 'required|mimes:jpeg, jpg, png, svg',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $picture = rand().$request->file('picture')->getClientOriginalName();
        $request->file('picture')->move(base_path("./public/upload"), $picture);
    
   
        $menus = new Menu();
        $menus->nama_menu = $request->nama_menu;
        $menus->picture = $picture;
        $menus->type = $request->type;
        $menus->description = $request->description;
        $menus->price = $request->price;
        $menus->save();
        
        return redirect('menu')->with('alert_pesan', 'Data telah disimpan');
            
    }

    public function edit($id)
    {
        $data = Menu::where('id', $id)->get();
        return view('Menu.menu_update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        DB::table('menus')->where('id',$request->id)->update ([
            'nama_menu' => $request->nama_menu,
            'picture' => $request->picture,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price
            ]);

        return redirect('menu')->with('alert_pesan', 'Data telah diubah');
    }

    public function destroy($id)
    {
        $data = Menu::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('menu')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('menu')->with('alert_message', 'ID tidak ditemukan!');
    }



}