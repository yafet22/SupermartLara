<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Topup;

class TopupTransformer extends TransformerAbstract
{
    /**
     * Transform Topup.
     *
     * @param Topup $topup
     */
    public function transform(Topup $topup)
    {
        return [
            'id' => $topup->id,
            'iduser' => $topup->iduser,
            'topup' => $topup->topup,
            'bank' => $topup->bank,
            'fotobukti' => $topup->fotobukti,
            'verifikasi' => $topup->verifikasi,
        ];
    }
}