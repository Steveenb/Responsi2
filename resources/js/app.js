import './bootstrap';
import 'preline';

document.addEventListener('livewire:navigated', () => {
    window.HSStaticMethods.autoinit();
})

document.querySelector('button').addEventListener('click', function () {
    const product_id = this.getAttribute('data-product-id'); // Ambil ID produk dari atribut data
    const quantity = parseInt(document.querySelector('input').value);

    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({
            product_id: product_id,
            quantity: quantity,
        }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                // Perbarui tampilan jumlah item di cart
                const cartCount = document.getElementById('cart-count');
                if (cartCount) {
                    cartCount.textContent = Object.keys(data.cart).length;
                }
            }
        })
        .catch(error => console.error('Error:', error));
});
