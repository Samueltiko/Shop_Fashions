let cart = [];

    function toggleCart() {
      const cartDisplay = document.getElementById('cart');
      cartDisplay.style.display = cartDisplay.style.display === 'none' ? 'block' : 'none';
      updateCartDisplay();
    }

    function addToCart(button) {
      const product = button.parentNode;
      const productId = product.getAttribute('data-id');
      const productName = product.getAttribute('data-name');
      const productPrice = parseFloat(product.getAttribute('data-price'));

      const item = { id: productId, name: productName, price: productPrice };
      cart.push(item);

      updateCartCount();
    }

    function updateCartCount() {
      const cartCount = document.getElementById('cart-count');
      cartCount.textContent = cart.length;
    }

    function updateCartDisplay() {
      const cartList = document.getElementById('cart-list');
      cartList.innerPHP = '';

      if (cart.length === 0) {
        cartList.innerPHP = '<li>Your cart is empty</li>';
      } else {
        cart.forEach(item => {
          const listItem = document.createElement('li');
          listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
          cartList.appendChild(listItem);
        });
      }
    }
  