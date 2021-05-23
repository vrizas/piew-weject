<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','id_restaurant','nama','image','harga',
    ];

    public function restaurants(){
        return $this->belongsTo(Restaurant::class);
    }
}
