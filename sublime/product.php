<?php
require_once 'parts/header.php';

if (isset($_GET['link_name'])) {
    $currentProduct = $_GET['link_name'];
    $product = $connect->query("SELECT * FROM good WHERE link_name='$currentProduct'");
    $product = $product->fetch(PDO::FETCH_ASSOC);
    if ($product !== false && count($product) > 0) {
        $productCat = $product['rus_cat'];
        $allProductCat = $connect
            ->query("SELECT * FROM good WHERE rus_cat='$productCat'")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
<!-- Home -->
<div class="home home-notmain">
    <div class="home_container">
        <div class="home_background" style="background-image:url(images/categories.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"><?= $product['name'] ?><span>.</span></div>
                            <div class="home_text"><p><?= $product['descr'] ?>.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Details -->

<div class="product_details">
    <div class="container">
        <div class="row details_row">

            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="details_image">
                    <div class="details_image_large"><img src="images/<?= $product['img'] ?>" alt="">
                        <div class="product_extra product_<?=$product['status']?>"><a href="categories.php"><?=$product['status']?></a></div>
                    </div>
                    <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                        <div class="details_image_thumbnail active" data-image="images/<?= $product['img'] ?>"><img
                                    src="images/<?= $product['img'] ?>" alt=""></div>
                    </div>
                </div>
            </div>

            <!-- Product Content -->
            <div class="col-lg-6">
                <div class="details_content">
                    <div class="details_name"><?= $product['name'] ?></div>
                    <div class="details_discount">$890</div>
                    <div class="details_price">$<?= $product['price'] ?></div>

                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Availability:</div>
                        <span>In Stock</span>
                    </div>
                    <div class="details_text">
                        <p><?= $product['descr'] ?></p>
                    </div>

                    <!-- Product Quantity -->
                    <div class="product_quantity_container">
                        <div class="product_quantity clearfix">
                            <span>Qty</span>
                            <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                            <div class="quantity_buttons">
                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                            class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="button cart_button" ><a class="cart_button_link" href="#" data-id="<?=$product['id']?>">Add to cart</a></div>

                    </div>

                    <!-- Share -->
                    <div class="details_share">
                        <span>Share:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row description_row">
            <div class="col">
                <div class="description_title_container">
                    <div class="description_title">Описание</div>
                </div>
                <div class="description_text">
                    <p><?= $product['descr'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="products_title">Товары категории <?= $productCat ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">

                    <!-- Product -->



                    <?php foreach ($allProductCat as $key => $goods): ?>
                        <?php if ($key > 3) break; ?>
                            <div class="product">
                                <div class="product_image"><img src="images/<?= $goods['img'] ?>" alt=""></div>
                                <div class="product_extra product_<?=$goods['status']?>"><a href="categories.php?category="><?=$goods['status']?></a></div>
                                <div class="product_content">
                                    <div class="product_title"><a
                                                href="product.php?link_name=<?=$goods['link_name'] ?>"><?=$goods['name'] ?></a>
                                    </div>
                                    <div class="product_price">$<?= $goods['price'] ?></div>
                                </div>
                            </div>
                        <?php ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_border"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter_content text-center">
                    <div class="newsletter_title">Подписаться на новые акции</div>
                    <div class="newsletter_text"><p>Если хочешь купить по выгодной цене и не пропустить скидки - </p>
                    </div>
                    <div class="newsletter_form_container">
                        <form action="#" id="newsletter_form" class="newsletter_form">
                            <input type="email" class="newsletter_input" required="required">
                            <button class="newsletter_button trans_200"><span>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('parts/footer.php'); ?>
