<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Rating;
use App\Models\Menu;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama','rating','alamat','id_location','image','kategori','deskripsi', 'jam'];

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function ratings(){
        return $this->hasmany(Rating::class);
    }

    public function menus(){
        return $this->hasmany(Menu::class);
    }
    
}
