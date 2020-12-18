<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $barangs = Barang::findorfail($id);
        // $barangs = Barang::where('id',$id)->first();
        return view('detail',compact('barangs')); 
    }
    }

