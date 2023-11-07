<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

        protected $fillable = [
        'nama',       
        'artis',      
        'kategori_id',  
        'stok',      
        'harga',      
        'deskripsi',  
        'gambar'
    ];

    public function Kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
