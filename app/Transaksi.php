<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['iduser',
    'total',
    'status'];

    public function users(){
        return $this->belongsTo('App\User','iduser');
    }

    public function cartshops(){
        return $this->hasMany('App\Cartshop','idtransaksi');
    }
}
