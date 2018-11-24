<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    protected $table = 'topups';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['iduser',
    'topup',
    'bank',
    'fotobukti',
    'verifikasi'];

    public function users(){
        return $this->belongsTo('App\User','iduser');
    }
   
}
