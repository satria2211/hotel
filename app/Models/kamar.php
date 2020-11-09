<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;
    protected $table = 'tb_kamar';
    protected $fillable = ['jenis_kamar', 'harga_kamar', 'foto_kamar' , 'fasilitas'];

    public function pemesanan(){
        return $this->hasMany('App\Pemesanan');
    }
}
