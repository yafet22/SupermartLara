<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartshop extends Model
{
    protected $table = 'cartshops';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['idbarang',
    'idtransaksi',
    'jumlah','totalharga'];

    public function transaksis(){
        return $this->belongsTo('App\Transaksi','idtransaksi');
    }  

    public function barangs(){
        return $this->belongsTo('App\Barang','idbarang');
    }
}
