@extends('layouts.app')
@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <div class="marquee"><marquee style="font-size:36px;color:#00000;text-shadow:6px #000;font-family:Times New Roman;padding-top:5px;">Selamat Datang di Boim Fashion Katalog, Buatlah Gayamu Menjadi Stylish</marquee></div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ url('images/banner.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"src="{{ url('images/banner2.jpg') }}" alt="Second slide">
    </div>
  </div>
  <br><br>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
   <br>
   <br>
</div>

        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ url('images') }}/{{ $barang->gambar }}" width="100" class="card-img-top" alt="...">
              <div class="card-body">
              <h5><p class="text-center">{{$barang->Nama_barang }} </p></h5>
                <a href="{{url('detail',$barang->id)}}" class="btn btn-dark btn-block">detail</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br><br><br><br><br><br>
<section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Alamat store</h4>
                                <hr class="my-4" />
                                <div class="small text-black"><strong>Jln. Kimangun Sarkoro,Tulungagung,Jawa Timur</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black"><a href="#!">BoimFashion@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black"><strong>085157442682</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
@endsection

