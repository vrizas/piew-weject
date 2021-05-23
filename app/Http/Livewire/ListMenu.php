<?php

namespace App\Http\Livewire;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

use Livewire\Component;

class ListMenu extends Component
{
    use WithFileUploads;

    public $tombolTambah = 0;
    public $updateStateId = 0;
    public $image;
    public $nama;
    public $harga;

    protected $listeners = [
        'menuCreated' => '$refresh'
    ];

    public function render()
    {
        $menus = Menu::Where('id_restaurant', Auth::id())->get();
        return view('livewire.list-menu')->with('menus', $menus);
    }

    public function showUpdateForm($menuId)
    {
        $menu = Menu::find($menuId);
        $this->nama = $menu->nama;
        $this->image = $menu->image;
        $this->harga = $menu->harga;
        $this->updateStateId = $menuId;
    }

    public function tambahMenu($on) {
        $this->tombolTambah = $on;
    }

    public function batalUpdate() {
        $this->updateStateId = 0;
    }

    public function createMenu() {
        $dataValid = $this->validate([
            'nama' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        Menu::create([
            'id_restaurant' => Auth::id(),
            'nama' => $this->nama,
            'image' => $this->image->store('menu'),
            'harga' => $this->harga,
        ]);
        $this->image = '';
        $this->nama = '';
        $this->harga = '';
        $this->emit('menuCreated');
    }

    public function updateMenu($menuId) {
        $menu = Menu::find($menuId);
        $menu->nama = $this->nama;
        $menu->image = $this->image;
        $menu->harga = $this->harga;
        $menu->save();

        $this->updateStateId = 0;
    }

    public function deleteMenu($menuId) {
        $menu = Menu::find($menuId);
        $menu->delete();
    }
}
