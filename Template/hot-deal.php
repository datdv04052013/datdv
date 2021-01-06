
<!-- start hot deal-->
<?php
$brand= array_map(function ($pro){return $pro['Pro_band'];},$product_load);
$unique = array_unique($brand);
sort($unique);
shuffle($product_load);
?>
<section id="hot-deal">
    <div class="container">
        <h4 class="font-rubik font-size-20"><i class="fas fa-hand-holding-usd" style="color: rgba(235, 116, 47, 0.733);"></i> Hot Deals</h4>
        <div id="filters" class="button-group text-left font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php
            array_map(function ($brand){
                printf('<button class="btn" data-filter=".%s">%s</button>',$brand,$brand);
            }, $unique)
            ?>
        </div>
        <div class="grid">
            <?php array_map(function($item){ ?>
            <div class="grid-item  border <?php echo $item['Pro_band'] ?? "Brand";?> ">
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?Pro_id=%s','product.php', $item['Pro_id']) ?>"><img src="<?php echo $item['Pro_img'] ?? "./assets/products/anh2.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h7>
                                <?php echo $item['Pro_name'] ?? "Unknown";?>
                            </h7>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['Pro_price'] ?? '0';?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12"> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php },$product_load)?>
        </div>
    </div>

</section>
<!--end hot deal-->