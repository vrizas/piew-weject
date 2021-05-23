<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Rating;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','id_user','id_restaurant','rating','pesan',
    ];

    public function restaurants(){
        return $this->belongsTo(Restaurant::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
