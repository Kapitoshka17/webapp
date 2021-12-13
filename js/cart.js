window.addEventListener('click', function(event){
    if (event.target.hasAttribute('data-cart')) {
        const cart = event.target.closest('.cart');
        console.log('cart');
    }
})