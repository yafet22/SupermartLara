<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Cartshop;

class CartshopTransformer extends TransformerAbstract
{
    /**
     * Transform Topup.
     *
     * @param Cartshop $cartshop
     */
    public function transform(Cartshop $cartshop)
    {
        return [
            'id' => $cartshop->id,
            'idtransaksi' => $cartshop->idtransaksi,
            'idbarang' => $cartshop->idbarang,
            'namabarang' => $cartshop->barangs->namabarang,
            'jumlah' => $cartshop->jumlah,
            'totalharga' => $cartshop->totalharga
        ];
    }
}