<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama','rating','alamat','id_location','image','kategori','deskripsi'];

    public function location(){
        return $this->belongsTo(Location::class);
    }
    
}
