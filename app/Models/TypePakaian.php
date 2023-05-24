<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePakaian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_type';
    protected $table = 'type_pakaian';
    protected $guarded = ['id_type'];
}
