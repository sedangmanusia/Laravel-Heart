<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karya extends Model
{
    use HasFactory;
    protected $table = 'karyas';
    protected $primaryKey = 'id_karya';
    public $incrementing = true;
    protected $fillable = ['judul', 'deskripsi', 'harga','gambar'];
    public $timestamps = false;

}
