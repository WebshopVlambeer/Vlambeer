<?php
	class Shoppingcart {
		// Properties:
		private $cart_id;
		

		// Methods:
		public function __construct() {
			// Construct function.
		}

		public function addToCart($prod, $amount) {
			// Add product to shopping cart
		}

		public function removeFromCart($prod) {
			// Remove a product from the shopping cart
		}

		public function editCart($prod, $amount) {
			// Edit the amount of products in the cart
		}

		// Getters & setters:
		public function getCart() {
			// Return an array of products in the cart
		}

		public function setCart() {
			// Save the cart to the database
		}
	}
?>