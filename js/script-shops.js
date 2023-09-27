// Contoh sederhana untuk menambahkan produk ke keranjang belanja
const buyButtons = document.querySelectorAll(".buy-button");
const cartItems = [];

buyButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    // Simpan informasi produk ke dalam objek dan tambahkan ke keranjang
    const productInfo = {
      name: `Produk ${index + 1}`,
      price: index === 0 ? 100 : 150,
    };
    cartItems.push(productInfo);

    // Tampilkan pesan konfirmasi
    alert(`Produk "${productInfo.name}" telah ditambahkan ke keranjang!`);
  });
});
