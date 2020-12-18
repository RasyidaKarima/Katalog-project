<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
 protected $table="barangs";
 protected $primaryKey="id";
 protected $fillable=['id','Nama_barang','gambar','Model','Bahan','Harga','stok'];
}
