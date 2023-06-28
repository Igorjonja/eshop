<?

 

class Product {
    public $id;
    public $name;
    public $price;
    public $image;
    public $quantity;

    public function __construct($id, $name, $price, $image, $quantity) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->quantity = $quantity;
       
    }
}



// foreach ($data as $item) {
//     $product = new Product(
//         $item['product_id'],
//         $item['product_name'],
//         $item['product_price'],
//         $item['product_image']
//     );
//     $products[] = $product;
// }
