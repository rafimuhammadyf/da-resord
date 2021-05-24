<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'nama_menu', 
        'picture', 
        'type', 
        'description',
        'price'
    ];
    protected $table = "menus";
    protected $primaryKey = "id"; 

    // public function item(){
    //     return $this->belongsTo('App\Models\Merchant', 'id', 'id_merchant');
    // }
}