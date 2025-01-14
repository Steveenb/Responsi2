<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\brand;
use App\Livewire\Partials\Navbar;
use App\Models\category;
use App\Models\product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products - Revera Store')]
class ProductsPage extends Component
{
    use LivewireAlert;

    use WithPagination;

    public $selected_categories = [];
    public $product;
    
    public function addToCart($product_id)
    {
        // Tambahkan produk ke keranjang dan hitung total item
        $total_count = CartManagement::addItemToCart($product_id);
    
        // Emit event ke komponen Navbar
        $this->dispatch(Navbar::class, 'update-Cart-Count', total_count: $total_count);

        $this->alert('success', 'Product added to the cart successfully!', [
            'position' => 'bottom-end',
            'timer' => '3000',
            'toast' => true,
        ]);
    }

    public function render()
    {
        $productQuery = product::query()-> where('is_active', 1);


        if(!empty($this->selected_categories)){
            $productQuery->whereIn('category_id', $this->selected_categories);
        }


        return view('livewire.products-page', [
            'products' => $productQuery->paginate(6),
            'brands' => brand::where('is_active', 1)->get([ 'id', 'name', 'slug']),
            'categories' => category::where('is_active', 1)->get([ 'id', 'name', 'slug']),
        ]);
    } 
}
