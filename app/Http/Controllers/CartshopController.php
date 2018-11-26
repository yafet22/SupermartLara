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
use PDF;

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

    public function showbytransaksi($id)
    {
        try {
            $cartshops=Cartshop::where('idtransaksi',$id)->get();
            $response = $this->generateCollection($cartshops);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('cart_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function showbyuser($id)
    {
        try {
            $transaksis=Transaksi::where('iduser',$id)->where('status',0)->get()->first();
            if($transaksis)
            {
                $cartshops=Cartshop::where('idtransaksi',$transaksis->id)->get();
                $response = $this->generateCollection($cartshops);
                return $this->sendResponse($response);
            }
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('cart_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function generatepdf($id)
    {
        $transaksis=Transaksi::where('iduser',$id)->orderBy('created_at', 'desc')->first();
        $cartshops=Cartshop::where('idtransaksi',$transaksis->id)->get();
        $total=0;
        foreach($cartshops as $data){
            $total= $total + $data->totalharga;
        }
  
        $pdf = PDF::loadView('pdf.invoice', compact('transaksis','cartshops','total'));
        return $pdf->download('invoice.pdf');
    }

    public function editcart(Request $request,$id)
    {
        $this->validate($request,[
            'jumlah'  => 'required'
        ]);

        try {
            $cartshops=Cartshop::find($id);
            $cartshops->transaksis->total=$cartshops->transaksis->total - $cartshops->totalharga;
            $cartshops->jumlah=$cartshops->jumlah + $request->get('jumlah');
            $cartshops->barangs->stock=$cartshops->barangs->stock - ( $request->get('jumlah') );
            $cartshops->totalharga =  $cartshops->barangs->harga * $cartshops->jumlah;
            $cartshops->transaksis->total=$cartshops->transaksis->total + $cartshops->totalharga;
            $cartshops->save();
            $cartshops->barangs->save();
            $cartshops->transaksis->save();
            $response = $this->generateItem($cartshops);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('cart_not_found');
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
        try {
            $cartshops=Cartshop::find($id);
            $cartshops->transaksis->total=$cartshops->transaksis->total - $cartshops->totalharga;
            $cartshops->barangs->stock=$cartshops->barangs->stock + $cartshops->jumlah;
            $cartshops->transaksis->save();
            $cartshops->barangs->save();    
            $cartshops->delete();
            return response()->json('Success',200);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('user_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }
}
