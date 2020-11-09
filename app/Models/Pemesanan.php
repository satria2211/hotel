<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_pemesanan';
    protected $fillable = ['id_pelanggan', 'nama', 'no_hp' , 'check_in'. 'check_out', 'total_hari', 'total_harga', 'id_kamar', 'jenis_kamar'];

    public function kamar(){
        return $this->belongsTo('App\kamar');
    }
}
