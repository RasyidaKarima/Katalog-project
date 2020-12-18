<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
}
    public function create()
    {
        return view('tambahdata');
    }
}