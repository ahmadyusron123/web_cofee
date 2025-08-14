// script.js

// Menu Toggle
const menuBtn = document.getElementById('menu-btn');
const navbar = document.querySelector('.navbar');

menuBtn.addEventListener('click', () => {
    navbar.classList.toggle('active');
});

// Search Button Functionality
const searchBtn = document.getElementById('search-btn');
const searchInput = document.createElement('input');
searchInput.type = 'text';
searchInput.placeholder = 'Search...';
searchInput.classList.add('search-input');

searchBtn.addEventListener('click', () => {
    if (!searchInput.parentElement) {
        navbar.appendChild(searchInput);
        searchInput.focus();
    } else {
        searchInput.parentElement.removeChild(searchInput);
    }
});

// Cart Button Functionality (Placeholder)
const cartBtn = document.getElementById('cart-btn');
cartBtn.addEventListener('click', () => {
    alert('Your cart is currently empty.'); // Placeholder action
});

// Close search input when clicking outside
document.addEventListener('click', (event) => {
    if (!searchBtn.contains(event.target) && searchInput.parentElement) {
        searchInput.parentElement.removeChild(searchInput);
    }
});

// Close menu when clicking outside
document.addEventListener('click', (event) => {
    if (!menuBtn.contains(event.target) && navbar.classList.contains('active')) {
        navbar.classList.remove('active');
    }
});

let cart = JSON.parse(localStorage.getItem('cart')) || [];

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
        let name = button.getAttribute('data-name');
        let price = parseFloat(button.getAttribute('data-price'));

        // Simpan ke array keranjang
        cart.push({ name, price });

        // Simpan ke localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        alert(`${name} telah ditambahkan ke keranjang!`);
    });
});
