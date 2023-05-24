<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pembayaran';
    protected $table = 'pembayaran';
    protected $guarded = ['id_pembayaran'];
}
