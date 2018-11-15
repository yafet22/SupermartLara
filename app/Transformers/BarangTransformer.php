<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Barang;

class BarangTransformer extends TransformerAbstract
{
    /**
     * Transform Barang.
     *
     * @param Barang $barang
     */
    public function transform(Barang $barang)
    {
        return [
            'idbarang' => $barang->idbarang,
            'namabarang' => $barang->namabarang,
            'kategori' => $barang->kategori,
            'harga' => $barang->harga,
            'stock' => $barang->stock,
            'image_name' => $barang->image_name,
            'deskripsi' => $barang->deskripsi,
        ];
    }
}