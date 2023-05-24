<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemesanan';
    protected $table = 'pemesanan';
    protected $guarded = ['id_pemesanan'];
}
