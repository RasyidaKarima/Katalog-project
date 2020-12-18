<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class databarang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtbarang=Barang::all();
    return view('addadmin',compact('dtbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Barang::create([
            'Nama_barang'=>$request->Nama_barang,
            'gambar'=>$request->gambar,
            'Model'=>$request->Model,
            'Bahan'=>$request->Bahan,
            'Harga'=>$request->Harga,
            'stok'=>$request->stok,
        ]);
    return redirect('addadmin');
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
       $brg = Barang::findorfail($id);
       return view('editdata',compact('brg')); 
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
        $brg = Barang::findorfail($id);
        $brg->update($request->all());
        return redirect('addadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg = Barang::findorfail($id);
        $brg->delete();
        return redirect('addadmin');
    }
}
