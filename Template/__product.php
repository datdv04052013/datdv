<!--start product-->

<?php
$item_id = $_GET['Pro_id'] ?? 1;
foreach ($product->getData() as $item):
    if($item['Pro_id'] == $item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['Pro_img'] ?? "./assets/products/lenovo1.jpg"; ?>" alt="product" class="img-fluid" height="100%" width="100%">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed To Buy</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Add To Cart</button>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['Pro_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['Pro_band'] ?? "Unknown"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14" title="Lenovo Forum">20.000 ratings| 1000+ awesome questions</a>
                </div>
                <hr class="m-0">

                <!--product price-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Price: </td>
                        <td><strike>$300</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal price: </td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['Pro_price'] ?? '0'; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Save: </td>
                        <td>$<span class="font-size-16 text-danger">100</span></td>
                    </tr>
                </table>
                <!-- end product price-->

                <!--policy-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-12 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"> 1 Week <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-12 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">GHN <br>Delivery</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-12 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"> 12 Months <br> Warranty</a>
                        </div>
                    </div>
                </div>
                <!-- end policy-->

                <!--order-detail-->
                <div id="order-detail" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: 10-4-2020</small>
                    <small>Sold by <a href="index.html">Dat Laptop</a></small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;Delivery to customer</small>
                </div>
                <!--end order-detail-->
                <div class="row">
                    <div class="col-6">
                        <!--color-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-blue-bg rounded-circle"><button class="btn fon-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn fon-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn fon-size-14"></button></div>
                            </div>
                        </div>
                        <!--end color-->
                    </div>
                    <div class="col-6">
                        <!--product qty section-->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Quantity:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button data-id="pro1"  class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input data-id="pro1"  type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- end product qty section-->
                    </div>
                </div>

                <!--size-->
                <div class="size my-3">
                    <h6 class="font-baloo">Config:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">I7/8GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">I9/16GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">I9/24GB RAM</button>
                        </div>
                    </div>
                </div>
                <!--end size-->
            </div>
            <div class="col-12">
                <h6>Detail Configuration</h6>
                <hr>
                <div class="font-baloo font-size-16">
                    <ul>
                        <li>Processor: Intel Core i7 8350U, 4 cores / 8 threads</li>
                        <li>Screen: 14 "FHD IPS (1920 x 1080) anti-glare</li>
                        <li>RAM: 8GB DDR4 bus 2400MHz (Upgraded up to 40GB)</li>
                        <li>Graphics Card: Intel UHD 620</li>
                        <li>Storage: 256GB m.2 Nvme (Upgraded up to 2TB)</li>
                        <li>Battery: 57Wh</li>
                        <li>Main Connections: 2 x USB-C, Thunderbolt 3, 2 x USB-A, 1 x Micro SD</li>
                        <li>Operating system: Windows 10 license</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end product-->
<?php
endif;
endforeach;
?>

