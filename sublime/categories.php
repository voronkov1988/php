<?php include('parts/header.php');
$category = $connect->query("SELECT * FROM category");
$category = $category->fetchAll(PDO::FETCH_ASSOC);

$category = $connect->query("SELECT * FROM diplom.category WHERE browser_name ='$currentCategory'");
$category = $category->fetch(PDO::FETCH_ASSOC);
$product = $connect->query("SELECT * FROM good");
$product = $product->fetch(PDO::FETCH_ASSOC);


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
                                <div class="home_title"><?= $category['cat_name']?><span>.</span></div>
                                <div class="home_text"><p><?=$category['descr']?></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Показано <span><?=count($data);?></span> результатов</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Сортировать по</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn"
                                                data-isotope-option='{ "sortBy": "original-order" }'>
                                                <span>По умолчанию</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                                <span>Цене</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "title" }'>
                                                <span>Имя</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                        <!-- Product -->
<?php foreach ($data as $item) { ?>
                            <div class="product">
                                <div class="product_image"><img src="/images/<?=$item['img']?>" alt=""></div>
                                <div class="product_extra product_<?=$item['status']?>"><a href="categories.php?category=<?=$item['category']?>"><?=$item['status']?></a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.php?link_name=<?=$item['link_name']?>"><?=$item['name']?></a></div>
                                    <div class="product_price">$<?=$item['price']?></div>
                                </div>
                            </div>
    <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Icon Boxes -->

    <div class="icon_boxes">
        <div class="container">
            <div class="row icon_box_row">

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
                        <div class="icon_box_title">Бесплатная доставка</div>
                        <div class="icon_box_text">
                            <p>Доставка товаров в пределах МКАД бесплатна</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
                        <div class="icon_box_title">Бесплатный возврат товаров</div>
                        <div class="icon_box_text">
                            <p>Если товар вас чем-то не устроил, вы можете вернуть его в течении 7 дней</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
                        <div class="icon_box_title">24часа поддержка</div>
                        <div class="icon_box_text">
                            <p>Звоните в любое время, наши пецилисты ответят на все ваши вопросы</p>
                        </div>
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
                        <div class="newsletter_title">Подписаться на обновления товаров</div>
                        <div class="newsletter_text"><p>Введите свой email в поле ниже</p></div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required">
                                <button class="newsletter_button trans_200"><span>Подписатьсяe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('parts/footer.php'); ?>