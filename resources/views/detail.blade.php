@extends('layouts.app')

@section('content')
<form action="{{route('home',$barangs->id)}}" method="post">
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <a href="{{url('home')}}" class="btn btn-dark"><i class="fa fa-arrow-left">Back</a>
    </div>
    <br><br><br>
    <div class="card-body">
    <div class="row">
    <div class="col-md-6"> 
    <img src="{{ url('images') }}/{{ $barangs->gambar }}" width="300" class="card-img-top" alt="...">
    </div>
    <div class="col-md-6">
    <h1>{{$barangs->Nama_barang}}</h1>
    <table class="table">
    <tbody>
    <tr>
    <td>Nama Barang</td>
    <td> : </td>
    <td> {{$barangs->Nama_barang}}</td>
    <tr>
    <td>Model</td>
    <td> : </td>
    <td> {{$barangs->Model}}</td>
    <tr>
    <td>Bahan</td>
    <td> : </td>
    <td> {{$barangs->Bahan}}</td>
    <tr>
    <td>Ukuran</td>
    <td> : </td>
    <td>
    <div class="flex items-center cr17WW">
    <button class="product-variation">S</button>
    <button class="product-variation">M</button>
    <button class="product-variation">L</button>
    <button class="product-variation">XL</button>
    <button class="product-variation">XXL</button>
    <tr>
    <tr>
    <td>Harga</td>
    <td> : </td>
    <td>Rp. {{ number_format($barangs->Harga)}}</td>
    <tr>
    <td>Stok</td>
    <td> : </td>
    <td>{{($barangs->stok)}}</td>
    <tr>
        <td>
            <form method="get" action="{{url('detail')}}/{{$barangs->id}}">
</tr>
<tr>
    <td></td>
    <td></td>
    <td>
    <a href="{{url('https://bit.ly/3h3cBjj')}}" class="btn btn-dark"><i class="fa fa-arrow-left">Pesan</a>
    
</div>

@endsection
