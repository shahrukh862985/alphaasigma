<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $products;
    public function mount()
    {
        $this->products = Product::where('active',1)->get();
    }
    public function render()
    {
        return view('livewire.front.products');
    }
}
