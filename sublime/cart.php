<?php
require_once 'parts/header.php';


?>
	<!-- Home -->

	<div class="home home-small">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li>Корзина</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Товар</div>
						<div class="cart_info_col cart_info_col_price">Цена</div>
						<div class="cart_info_col cart_info_col_quantity">Стоимость</div>
						<div class="cart_info_col cart_info_col_total">Общая стоимость</div>
					</div>
				</div>
			</div>
            <?php if (count($_SESSION['cart']) == 0){
                Echo "Ваша корзина пустая";
            } else {?>
            <?php foreach ($_SESSION['cart'] as $key=>$product) :?>
			<div class="row cart_items_row">
				<div class="col-12">

				<!-- Cart Item -->

				<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
					<!-- Name -->
					<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
						<div class="cart_item_image">
							<div><img src="images/<?=$product['img']?>" alt="<?=$product['title']?>"></div>
						</div>
						<div class="cart_item_name_container">
							<div class="cart_item_name"><a href="product.php?link_name=<?=$product['link']?>"><?=$product['title']?></a></div>
							<div class="cart_item_edit"><a href="#"><?=$product['category']?></a></div>
						</div>
					</div>
					<!-- Price -->
					<div class="cart_item_price">$<?=$product['price']?></div>
					<!-- Quantity -->
					<div class="cart_item_quantity">
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Кол-во</span>
								<input class="quantity_input" type="text" pattern="[0-9]*" value="<?=$product['quantity']?>">

							</div>
						</div>
					</div>
					<!-- Total -->
					<div class="cart_item_total">$<?=$product['quantity']*$product['price']?></div>
				</div>
                    <?php endforeach;}?>

			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button newsletter_button"><a href="/">Продолжить покупки</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<div >
                                <?if (isset($_SESSION['cart'])){?>
                                <div class="button clear_cart_button newsletter_button"><a class="clear_cart_button_link"  href="#" data-del="<?=$_SESSION['cart'];?>" >Clear cart</a></div>
<? }else{
                                    "<h2> Корзина пустая</h2>";
                                }

?>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row row_extra">
				<div class="col-lg-4">
					
					<!-- Delivery -->
					<div class="delivery">
						<div class="section_title">Способ доставки</div>
						<div class="section_subtitle">Выберите удобный способ</div>
						<div class="delivery_options">
							<label class="delivery_option clearfix">Быстрая доставка
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$30</span>
							</label>
							<label class="delivery_option clearfix">Обычная доставка
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$15</span>
							</label>
							<label class="delivery_option clearfix">Самовывоз
								<input type="radio" checked="checked" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">Бесплатно</span>
							</label>
						</div>
					</div>

					<!-- Coupon Code -->
					<div class="coupon">
						<div class="section_title">Добавить купон</div>
						<div class="section_subtitle">Введите ваш купон</div>
						<div class="coupon_form_container">
							<form action="#" id="coupon_form" class="coupon_form">
								<input type="text" class="coupon_input" required="required">
								<button class="button coupon_button newsletter_button"><span>Добавить</span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_value ml-auto">$<?= $_SESSION['totalPrice']?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Доставка</div>
									<div class="cart_total_value ml-auto">$30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_value ml-auto">$<?= $_SESSION['totalPrice'] + 30?></div>
								</li>
							</ul>
						</div>
                        <? if (isset($_SESSION['cart'])){?>
						<div class="button checkout_button newsletter_button"><a href="checkout.php">Proceed to checkout</a></div>
					    <?}?>
                    </div>
				</div>
			</div>
		</div>		
	</div>
<?php include ('parts/footer.php'); ?>
