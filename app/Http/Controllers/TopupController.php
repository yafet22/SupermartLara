<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topup;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\TopupTransformer;

class TopupController extends RestController
{
    protected $transformer = TopupTransformer::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topups = Topup::all();
        $response = $this->generateCollection($topups);
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

    public function topup(Request $request,$id)
    {
        $this->validate($request,[
            'topup'  => 'required',
            'bank'  => 'required',
        ]);

        try {
            $users = User::find($id);
            $topups = new Topup;

            $topups->topup=$request->get('topup');
            $topups->bank=$request->get('bank');
            $topups->verifikasi="UNCONFIRMED";
            $topups->fotobukti='';
            
            $users->topups()->save($topups);
            $response = $this->generateItem($topups);

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
        try {
            $topups=Topup::find($id);
            $response = $this->generateItem($topups);
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
            // $users = User::find($id);
            // $users->topups()->save();
            $topups = Topup::where('iduser',$id)->get();
            $response = $this->generateCollection($topups);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('topup_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
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
        
    }

    public function sendconfirm(Request $request,$id)
    {   
        $this->validate($request,[
            'fotobukti'  => 'required',
        ]);

        try {
            $topups = Topup::find($id);

            if($request->hasfile('fotobukti'))
            {
                $file = $request->file('fotobukti');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/bukti/', $name);
                $topups->fotobukti=$name;
            }
            else{
                $topups->fotobukti='';
            }

            $topups->verifikasi="WAITING";
            
            $topups->save();

            $response = $this->generateItem($topups);

            return $this->sendResponse($response, 201);
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function confirm($id)
    {
        try {
            $topups = Topup::find($id);

            $topups->users->saldo = $topups->users->saldo+$topups->topup;

            $topups->verifikasi="CONFIRMED";

            $topups->save();

            $topups->users->save();
            
            $response = $this->generateItem($topups);

            return $this->sendResponse($response, 201);
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
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
