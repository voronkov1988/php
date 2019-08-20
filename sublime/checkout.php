<?php
require_once 'parts/header.php';
require_once 'parts/footer.php';
?>
<?php include ('parts/header.php'); ?>
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
										<li><a href="cart.php">Shopping Cart</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Заполнение данных</div>
						<div class="section_subtitle">Заполните ваши данные</div>
						<div class="checkout_form_container">
							<form action="actions/mail.php" method="post" id="checkout_form" class="checkout_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="checkout_name">Имя*</label>
										<input type="text" name="name" id="checkout_name" class="checkout_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="checkout_last_name">Фамилия*</label>
										<input type="text" name="lastName" id="checkout_last_name" class="checkout_input" required="required">
									</div>
								</div>

                                <div>
								<div>
									<!-- Phone no -->
									<label for="checkout_phone">Номер телефона</label>
									<input type="text" name="phone" id="checkout_phone" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_email">Ваш emal адрес</label>
									<input type="email" name="email" id="checkout_email" class="checkout_input" required="required">
								</div>
                                </div>
                                <input class="button order_button newsletter_button" type="submit" name="order" value="Отправить заказ">
							</form>
						</div>
					</div>
				</div>

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Product</div>
								<div class="order_list_value ml-auto">Total</div>
							</div>
							<ul class="order_list">
                                <? foreach ($_SESSION['cart'] as $cartProduct) {?>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><?=$cartProduct['title']?></div>
									<div class="order_list_value ml-auto">$<?=$cartProduct['price']?></div>
								</li>
                                 <?}?>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Певичная цена</div>
									<div class="order_list_value ml-auto">$<?=$_SESSION['totalPrice']?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Доставка</div>
									<div class="order_list_value ml-auto">$30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Сумма</div>
									<div class="order_list_value ml-auto">$<?=$_SESSION['totalPrice'] + 30?></div>
								</li>
							</ul>
						</div>

						<!-- Payment Options -->
						<div class="payment">
							<div class="payment_options">
								<label class="payment_option clearfix">Paypal
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Cach on delivery
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Credit card
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Direct bank transfer
									<input type="radio" checked="checked" name="radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>

						<!-- Order Text -->
						<div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include ('parts/footer.php'); ?>