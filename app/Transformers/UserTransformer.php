<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;

class UserTransformer extends TransformerAbstract
{
    /**
     * Transform Barang.
     *
     * @param User $user
     */
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'username' => $user->username,
            'role' => $user->role,
            'telp' => $user->telp,
            'aktif' => $user->aktif,
            'email' => $user->email,
            'session' => $user->session,
            'image_name' => $user->image_name,
            'saldo' => $user->saldo,
        ];
    }
}