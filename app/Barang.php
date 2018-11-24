<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'idbarang';
    public $timestamps = true;
    protected $fillable = ['namabarang',
    'kategori',
    'harga',
    'stock',
    'image_name',
    'deskripsi'];

    public function cartshops(){
        return $this->hasMany('App\Cartshop','idbarang');
    }
}
