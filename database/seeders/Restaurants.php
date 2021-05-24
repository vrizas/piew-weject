<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Location;

class Restaurants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $restaurant = new Restaurant;
        // $restaurant->nama = "Ayam Nelongso";
        // $restaurant->rating = '4.5';
        // $restaurant->alamat = 'Jalan Surabaya no 5';
        // $restaurant->id_location = '1';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'ayam';
        // $restaurant->deskripsi = 'Ayam ini enak';
        // $restaurant->jamBuka = '09:00';
        // $restaurant->jamTutup = '22:00';
        // $restaurant->save();

        // $restaurant = new Restaurant;
        // $restaurant->nama = "Pesen Kopi";
        // $restaurant->rating = '4.3';
        // $restaurant->alamat = 'Jalan Jakarta no 8';
        // $restaurant->id_location = '1';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'kopi';
        // $restaurant->deskripsi = 'Kopi ini enak';
        // $restaurant->jamBuka = '12:00';
        // $restaurant->jamTutup = '24:00';
        // $restaurant->save();

        // $restaurant = new Restaurant;
        // $restaurant->nama = "Kopi Kopi";
        // $restaurant->rating = '4.6';
        // $restaurant->alamat = 'Jalan Puncak Dieng no 7';
        // $restaurant->id_location = '2';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'kopi';
        // $restaurant->deskripsi = 'Kopi ini enak';
        // $restaurant->jamBuka = '12:00';
        // $restaurant->jamTutup = '24:00';
        // $restaurant->save();

        // $restaurant = new Restaurant;
        // $restaurant->nama = "Ayam Geprek";
        // $restaurant->rating = '4.0';
        // $restaurant->alamat = 'Jalan Bogor no 20';
        // $restaurant->id_location = '3';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'ayam';
        // $restaurant->deskripsi = 'Ayam ini enak';
        // $restaurant->jamBuka = '07:00';
        // $restaurant->jamTutup = '20:00';
        // $restaurant->save();

        // $restaurant = new Restaurant;
        // $restaurant->nama = "Masakan Padang Sederhana";
        // $restaurant->rating = '4.3';
        // $restaurant->alamat = 'Jalan Patimura no 5';
        // $restaurant->id_location = '2';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'padang';
        // $restaurant->deskripsi = 'Masakan padang ini enak';
        // $restaurant->jamBuka = '09:00';
        // $restaurant->jamTutup = '24:00';
        // $restaurant->save();

        // $restaurant = new Restaurant;
        // $restaurant->nama = "Masakan Padang Murah";
        // $restaurant->rating = '4.5';
        // $restaurant->alamat = 'Jalan Adimakmur no 9';
        // $restaurant->id_location = '2';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'padang';
        // $restaurant->deskripsi = 'Masakan padang ini enak';
        // $restaurant->jamBuka = '09:00';
        // $restaurant->jamTutup = '24:00';
        // $restaurant->save();

        // $restaurant = new Restaurant;
        // $restaurant->nama = "Masakan Padang";
        // $restaurant->rating = '4.9';
        // $restaurant->alamat = 'Jalan Haji Salim no 20';
        // $restaurant->id_location = '3';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'padang';
        // $restaurant->deskripsi = 'Masakan padang ini enak';
        // $restaurant->jamBuka = '09:00';
        // $restaurant->jamTutup = '24:00';
        // $restaurant->save();

        // $restaurant = new Restaurant;
        // $restaurant->nama = "Masakan Padang Pojok";
        // $restaurant->rating = '4.1';
        // $restaurant->alamat = 'Jalan Bandung no 31';
        // $restaurant->id_location = '3';
        // $restaurant->image = 'noimage.png';
        // $restaurant->kategori = 'padang';
        // $restaurant->deskripsi = 'Masakan padang ini enak';
        // $restaurant->jamBuka = '09:00';
        // $restaurant->jamTutup = '24:00';
        // $restaurant->save();

        $location = new Location;
        $location->id = "1";
        $location->lokasi = 'Malang, Jawa Timur';
        $location->save();

        $location = new Location;
        $location->id = "2";
        $location->lokasi = 'Bandung, Jawa Barat';
        $location->save();

        $location = new Location;
        $location->id = "3";
        $location->lokasi = 'Jakarta';
        $location->save();
    }
    
}
