<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\TransaksiTransformer;


class TransaksiController extends RestController
{
    protected $transformer = TransaksiTransformer::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        $response = $this->generateCollection($transaksis);
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

    public function beli($id)
    {
        try {
            $caris = Transaksi::where('iduser',$id)->get();
            if($caris)
            {
                foreach($caris as $cari){
                    if($cari->status==0){
                        return null;
                    }
                }
                $users = User::find($id);
                $transaksis = new Transaksi;

                $transaksis->total=0;
                $transaksis->status=0;
                
                $users->transaksis()->save($transaksis);
                $response = $this->generateItem($transaksis);
                return $this->sendResponse($response, 201);
            }
            
        }catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('not_found');
        }catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function finish($id)
    {
        try {
            $transaksis = Transaksi::find($id);
            $transaksis->status=1;
            $transaksis->save();
            $transaksis->users->saldo = $transaksis->users->saldo - $transaksis->total;
            $transaksis->users->save();
            $response = $this->generateItem($transaksis);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('topup_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function showbyuser($id)
    {
        try {
            $transaksis = Transaksi::where('iduser',$id)->where('status',0)->get();
            $response = $this->generateCollection($transaksis);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('topup_not_found');
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
