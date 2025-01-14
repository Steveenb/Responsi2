<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Product; // Pastikan model Product diimport
use App\Livewire\Partials\Navbar;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ProductDetailPage extends Component
{
    use LivewireAlert;

    public $slug;
    public $quantity = 1;
    public $product; // Tambahkan properti untuk menyimpan data produk

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->product = Product::where('slug', $this->slug)->first(); // Ambil data produk berdasarkan slug

        if (!$this->product) {
            abort(404, 'Product not found');
        }
    }

    public function increaseQty()
    {
        $this->quantity++;
    }

    public function decreaseQty()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart($product_id)
    {
        // Tambahkan produk ke keranjang dan hitung total item
        $total_count = CartManagement::addItemToCartWithQty($product_id, $this->quantity);

        // Emit event ke komponen Navbar
        $this->dispatch('update-cart-count', $total_count);

        $this->alert('success', 'Product added to the cart successfully!', [
            'position' => 'bottom-end',
            'timer' => '3000',
            'toast' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => $this->product, // Kirim data produk ke view
        ]);
    }
}

