<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkuranPakaian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ukuran_pakaian';
    protected $table = 'ukuran_pakaian';
    protected $guarded = ['id_ukuran_pakaian'];
}
