<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'nama_menu', 
        'no_meja', 
        'nama', 
        'price_total', 
        'status'
    ];
    protected $table = "orders";
    protected $primaryKey = "id"; 

}