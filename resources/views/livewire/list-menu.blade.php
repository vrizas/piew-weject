<div>   
    <div class="menu-wrapper">
    @foreach($menus as $menu)
                @if($updateStateId != $menu->id)
                <div class="daftar-menu "> 
                    <h4 class="nama-menu">{{$menu->nama}}</h4>
                    <img src="{{asset('storage')}}/{{$menu->image}}" alt="{{$menu->nama}}" class="menu-img">
                    <p class="harga">Rp {{$menu->harga}}</p>
                    <div class="edit-delete">
                        <button wire:click="showUpdateForm({{$menu->id}})" type="submit" class="edit-menu"><i class='bx bxs-edit'></i></i></button>
                        <button onclick="return confirm('Apakah Anda yakin?') || event.stopImmediatePropagation()" wire:click="deleteMenu({{$menu->id}})" type="submit"><i class='bx bxs-trash'></i></button>
                    </div>
                </div> 
                @endif

                @if($updateStateId == $menu->id)
                <div class="menu-kosong">
                <div class="form-menu">
                    <input wire:model="nama" type="text" name="nama" placeholder="nama menu">
                    <div class="input-image-box">
                        <input wire:model="image" type="file" name="image" class="input-file">
                    </div>
                    <input wire:model="harga" type="number" name="harga" placeholder="harga">
                    <div class="tombol-batal-tambah-menu">
                        <button wire:click="batalUpdate()" class="batal-tambah-menu">Batalkan</button>
                        <input wire:click="updateMenu({{$menu->id}})" type="submit" value="Simpan">
                    </div>
                </div>
                </div>
                @endif
    @endforeach
            @if($tombolTambah == 0)
            <button wire:click="tambahMenu(1)" type="submit" class="menu-kosong">
                <div class="tombol"><i class='bx bx-plus-circle'></i></div>
            </button>
            @endif
            @if($tombolTambah == 1)
            <div class="menu-kosong">
                <div class="form-menu">
                    <input wire:model="nama" type="text" name="nama" placeholder="nama menu">
                    <div class="input-image-box">
                        <input wire:model="image" type="file" name="image" class="input-file">
                    </div>
                    <input wire:model="harga" type="number" name="harga" placeholder="harga">
                    <div class="tombol-batal-tambah-menu">
                        <button wire:click="tambahMenu(0)" class="batal-tambah-menu">Batalkan</button>
                        <input wire:click="createMenu" type="submit" value="Simpan">
                    </div>
                </div>
            </div>
            @endif
    </div>
</div>
