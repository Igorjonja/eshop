
<?session_start();?>

<?php
    require_once 'getdata.php';?>


<?php foreach($products as $product): ?>
    <div class="col mb-5">
        <div class="card h-100" data-id="<?php echo $product['id']; ?>">
            <!-- Product image-->
            <img class="card-img-top" src="<?php echo $product['product_image']; ?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product title-->
                    <h5 class="item-title fw-bolder"><?php echo $product['product_name']; ?></h5>
                    <!-- Product price-->
                    <?php echo $product['product_price'].'&#8364'; ?>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer mt-auto mx-4 px-5 pt-0 border-top-0 bg-transparent">
                <div class="input-group col-3">
                    <!-- Minus button -->
                    <div type="button" class="btn btn-outline-secondary btn-number" data-type="minus" data-field="quant[1]">-</div>
                    <!-- Input -->
                    <input type="text" name="q-counter" id="quantity-input-<?php echo $product['id']; ?>" class="form-control col-3 mw-25 px-2 text-center" value="0">
                    <!-- Plus button -->
                    <div type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">+</div>
                </div>
                <button onclick="addToCart(
                <?php echo $product['id']; ?>,
                '<?php echo $product['product_price']; ?>',
                '<?php echo $product['product_image']; ?>',
                '<?php echo $product['product_name']; ?>',
                document.getElementById('quantity-input-<?php echo $product['id']; ?>').value
                
                )"
               
                class="btn btn-outline-secondary d-grid gap-2 col-6 mx-auto">Add</button>
            </div>
        </div>
    </div>
<?php endforeach; ?>