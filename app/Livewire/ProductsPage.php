<?php

namespace App\Livewire;

use App\Models\product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products - Revera Store')]
class ProductsPage extends Component
{
    use WithPagination;
    public $product;
    
    
    public function addTocart($product_id){
        dd($product_id);
    }

    public function render()
    {
        $productQuery = product::query()-> where('is_active', 1);
        return view('livewire.products-page', [
            'products' => $productQuery->paginate(6),
        ]);
    }
}
