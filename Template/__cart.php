<?php

//load  product
$product_load = $product->getData();
$brand= array_map(function ($pro){return $pro['Pro_band'];},$product_load);
$unique = array_unique($brand);
sort($unique);
shuffle($product_load);
?>

<!--start shopping cart-->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart <i class="fas fa-shopping-cart color-second"></i></h5>

        <!--startSp cart item-->
        <div class="row">
            <div class="col-sm-9">
                <!--cart  item-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/products/acer1.png" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="baloo font-size-20">Acer Nitro 5</h5>
                        <small>by Acer</small>

                        <!--prodcuct rating-->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20.000+ raitings</a>
                        </div>
                        <!-- end prodcuct rating-->

                        <!--prodcuct qty-->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button  data-id="pro1"  class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input  data-id="pro1"  type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1"  class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right font-size-14">Delete</button>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right font-size-14">Save for later</button>
                        </div>
                        <!-- end prodcuct qty-->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            <span class="product_price">$200</span>
                        </div>
                    </div>

                </div>
                <!-- end cart  item-->
                <!--cart  item 2-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/products/lenovo1.png" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="baloo font-size-20">Lenove L450s</h5>
                        <small>by Lenovo</small>

                        <!--prodcuct rating-->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20.000+ raitings</a>
                        </div>
                        <!-- end prodcuct rating-->

                        <!--prodcuct qty-->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right font-size-14">Delete</button>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right font-size-14">Save for later</button>
                        </div>
                        <!-- end prodcuct qty-->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            <span class="product_price">$200</span>
                        </div>
                    </div>

                </div>
                <!-- end cart  item 2-->
            </div>

            <!--total  price section-->
            <div class="col-sm-3">
                <div class="total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> You get free delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Total (2 items):&nbsp; <span class="text-danger">$ <span class="text-danger" id="deal-price">400</span></span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed To Buy</button>
                    </div>
                </div>
            </div>
            <!-- end total  price section-->
        </div>
        <!-- end Sp cart item-->
    </div>
</section>
<!--end shopping cart-->