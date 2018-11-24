<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Transaksi;

class TransaksiTransformer extends TransformerAbstract
{
    /**
     * Transform Topup.
     *
     * @param Transaksi $transaksi
     */
    public function transform(Transaksi $transaksi)
    {
        return [
            'id' => $transaksi->id,
            'iduser' => $transaksi->iduser,
            'total' => $transaksi->total,
            'status' => $transaksi->status,
            'created_at' => $transaksi->created_at
        ];
    }
}