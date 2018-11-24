<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'username', 'role', 'telp', 'email', 'password', 'kode', 'aktif', 'session', 'image_name', 'saldo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function topups(){
        return $this->hasMany('App\Topup','iduser');
    }  
    
    public function transaksis(){
        return $this->hasMany('App\Transaksi','iduser');
    }  
}
