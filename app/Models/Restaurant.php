<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['id_restaurant','nama','rating','alamat','provinsi','image','kota','category_id','deskripsi'];
}
