<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cartshop;
use App\Barang;
use App\Transaksi;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\CartshopTransformer;

class CartshopController extends RestController
{
    protected $transformer = CartshopTransformer::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartshops = Cartshop::all();
        $response = $this->generateCollection($cartshops);
        return $this->sendResponse($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function add(Request $request,$id,$idbarang)
    {
        $this->validate($request,[
            'jumlah'  => 'required'
        ]);

        try {
            $transaksis = Transaksi::find($id);
            $barangs = Barang::find($idbarang);
            $cartshops = new Cartshop;
            $cartshops->idbarang = $idbarang;
            $cartshops->jumlah = $request->get('jumlah');
            $cartshops->totalharga = $barangs->harga*$request->get('jumlah');

            $transaksis->cartshops()->save($cartshops);
            $barangs->stock=$barangs->stock - $request->get('jumlah');
            $transaksis->total = $transaksis->total + $barangs->harga*$request->get('jumlah');
            $barangs->save();
            $transaksis->save();

            $response = $this->generateItem($cartshops);

            return $this->sendResponse($response, 201);
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
