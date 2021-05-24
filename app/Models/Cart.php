<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_menus', 
        'id_users', 
        'id_tables', 
        'qty'
    ];
    protected $table = "cart";
    protected $primaryKey = "id_menus"; 

    // public function cart(){
    //     return $this->belongsTo('App\Models\Items', 'id', 'id_users');
    // }
}