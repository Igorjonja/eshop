<?

class Cart {
    public $products;

    public function __construct() {
        
        $this->products = [];
        
    }
    public function addToCart($productId, $quantity, $productPrice, $productName, $productImage) {
        // Check if there is already a product with such an ID in the basket
        if (array_key_exists($productId, $this->products)) {
            
            // Increase the quantity of the product
            $this->products[$productId]['quantity'] += $quantity;
        } else {
            // Add a new item to the basket.
            $this->products[$productId] = array(
                'quantity' => $quantity,
                'price' => $productPrice,
                'name' => $productName,
                'image'=> $productImage
            );
            
        }
    }
   
    public function removeProduct($productId) {
        foreach ($this->products as $product => $id) {
            if ($product == $productId) {
                unset($this->products[$product]);
                break;
            }
        }
    }

  

    public function getTotalAmount() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product['price'];
        }
        return $total;
    }

    public function displayCart() {
        // Check if there are any items in the basket
        if (!empty($_SESSION['cart'])) {
            // unserialize the contents of the basket.
            $cart = unserialize($_SESSION['cart']);
    
            // Check if there are any items in the deserialized basket.
            if (!empty($cart->products)) {
                echo '<table class="table">';
                echo '<tr>';
                echo '<th>Image</th>';
                echo '<th>Name</th>';
                echo '<th>Price</th>';
                echo '<th>Quantity</th>';
                echo '</tr>';
    
                //  Iterate over the items in the basket.
                foreach ($cart->products as $productId => $product) {
                    $productName = $product['name'];
                    $productPrice = $product['price'];
                    $quantity = $product['quantity'];
                    $productImage = $product['image'];
    
                    echo '<tr>';
                    echo '<td><img src="' . $productImage . '" alt="' . $productName . '" width="50"></td>';
                    echo '<td>' . $productName . '</td>';
                    echo '<td>$' . $productPrice . '</td>';
                    echo '<td>' . $quantity . '</td>';
                    echo '<td><button class="delete-btn" data-delete-id="'.$productId.'" >delete</button></td>';
                    echo '</tr>';
                }
                echo '</table>';
                echo '<a style="text-decoration: none; color: darkblue;" href="">Go to Checkout</a>';
            } else {
                echo '<p>Your cart is empty.</p>';
            }
        } else {
            echo '<p>Your cart is empty.</p>';
        }
    }

    public function getTotalQuantity() {
        $totalQuantity = 0;

        foreach ($this->products as $product) {
            $totalQuantity += $product['quantity'];
        }

        return $totalQuantity;
    }


}


