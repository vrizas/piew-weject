@foreach($restaurants as $i => $restaurant)
    <h1>Hasil Pencarian {{$i+1}}</h1>
    <p>{{$restaurant->nama}}</p>
    <p>{{$restaurant->alamat}}</p>
    <p>{{$restaurant->rating}}</p>
    <p>{{$restaurant->kategori}}</p>
    <p>{{$restaurant->deskripsi}}</p>
@endforeach
@foreach($locations as $location)
    <h1>Lokasi</h1>
    <p>{{$location->lokasi}}</p>
@endforeach