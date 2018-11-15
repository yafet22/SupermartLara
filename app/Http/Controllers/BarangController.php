<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\BarangTransformer;

class BarangController extends RestController
{
    protected $transformer = BarangTransformer::class;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        $response = $this->generateCollection($barangs);
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
        $this->validate($request,[
            'namabarang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'stock'=> 'required',
            'image_name' => 'required',
            'deskripsi' => 'required',
        ]);

        try {
            $barangs = new Barang;

            if($request->hasfile('image_name'))
            {
                $file = $request->file('image_name');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $barangs->image_name=$name;
            }

            $barangs->namabarang=$request->get('namabarang');
            $barangs->kategori=$request->get('kategori');
            $barangs->harga=$request->get('harga');
            $barangs->stock=$request->get('stock');
            $barangs->deskripsi=$request->get('deskripsi');
            $barangs->save();

            $response = $this->generateItem($barangs);

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
            $barangs=Barang::find($id);
            $response = $this->generateItem($barangs);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('barang_not_found');
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
        try {

            $barangs = Barang::find($id);

            if($request->hasfile('image_name'))
            {
                $file = $request->file('image_name');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $barangs->image_name=$name;
            }

            $barangs->namabarang=$request->get('namabarang');
            $barangs->kategori=$request->get('kategori');
            $barangs->harga=$request->get('harga');
            $barangs->stock=$request->get('stock');
            $barangs->deskripsi=$request->get('deskripsi');
            $barangs->save();

            $response = $this->generateItem($barangs);

            return $this->sendResponse($response, 201);
        }catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('barang_not_found');
        }
        catch (\Exception $e) {
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
        try {
            $barangs=Barang::find($id);
            $barangs->delete();
            return response()->json();
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('barang_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function findbykategori($kategori){
        try {
            $barangs=Barang::where('kategori',$kategori)->get();
            $response = $this->generateCollection($barangs);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('barang_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }
}
