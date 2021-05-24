<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Meja extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'no_meja', 
        'status'
    ];
    protected $table = "tables";
    protected $primaryKey = "id"; 

    // public function item(){
    //     return $this->belongsTo('App\Models\Merchant', 'id', 'id_merchant');
    // }
}