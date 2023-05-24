<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemesanan_detail';
    protected $table = 'pemesanan_detail';
    protected $guarded = ['id_pemesanan_detail'];

}
