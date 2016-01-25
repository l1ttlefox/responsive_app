<?include($_SERVER["DOCUMENT_ROOT"]."/verstka/default/header.php");?>
		<div id="page">
			<div class="container">
				<div class="row">
					<div class="page_title">
						My Office
					</div>
				</div>
			</div>
			<div class="container inner_menu_wr">
				<div class="row">
					<div class="im_item">
						<a href="#">
							My profile
						</a>
					</div>
					<div class="im_item">
						<a href="#">
							Messages
						</a>
						<div class="im_qw">
							25
						</div>
					</div>
					<div class="im_item">
						<a href="#">
							Purchases
						</a>
					</div>
					<div class="im_item">
						<a href="#">
							Sales
						</a>
					</div>
					<div class="im_item">
						<a href="#">
							Activity
						</a>
					</div>
					<div class="im_item">
						<a href="#">
							My paypal
						</a>
					</div>
					<div class="im_item im_current">
						<a href="#">
							cart
						</a>
						<div class="im_qw">
							12
						</div>
					</div>
					<div class="both"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="page_name">
						CART
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="basket_wr">
						<div class="basket_top">
							<div class="col-md-5">
								<div class="col-md-4">
									<div class="basket_title">
										photo
									</div>
								</div>
								<div class="col-md-8">
									<div class="basket_title">
										item name
									</div>
								</div>
								<div class="both"></div>
							</div>
							<div class="col-md-2">
								<div class="basket_title">
									conditions
								</div>
							</div>
							<div class="col-md-2">
								<div class="basket_title">
									metal
								</div>
							</div>
							<div class="col-md-2">
								<div class="basket_title">
									remove
								</div>
							</div>
							<div class="col-md-1">
								<div class="basket_title">
									price
								</div>
							</div>
							<div class="both"></div>
						</div>
						<?
						for($t=1;$t<=4;$t++){
						?>
						<div class="basket_content">
							<div class="col-md-5">
								<div class="col-md-3 col-xs-3">
									<div class="basket_img">
										<img src="/images/detail_photo_1.jpg" />
									</div>
								</div>
								<div class="col-md-9 col-xs-9">
									<div class="basket_name_wr">
										<div class="pd_marker">
											new
										</div>
										<div class="basket_name">
											ALDO Albans Heart Link Choker Necklace ALDO Albans Heart Link
										</div>
									</div>
								</div>
								<div class="both"></div>
							</div>
							<div class="col-md-2 basket_cond_wr">
								<div class="basket_condition">
									IN STOCK
								</div>
							</div>
							<div class="col-md-2 col-xs-6">
								<div class="basket_material">
									Gold, 999, 3,5 g
								</div>
							</div>
							<div class="col-md-2 basket_remove"></div>
							<div class="col-md-1 col-xs-6">
								<div class="basket_price">
									$ 19,83
								</div>
							</div>
							<div class="both"></div>
							<div class="basket_remove_mobile"></div>
						</div><!--end_of_basket_content-->
						<?}?>
						<div class="basket_bottom">
							<div class="col-xs-6">
								<div class="delivery_text">
									SUBTOTAL BEFORE DELIVERY CHARGES
								</div>
							</div>
							<div class="col-xs-6">
								<div class="basket_price">
									$ 19,83
								</div>
							</div>
							<div class="both"></div>
						</div>
						<div class="basket_shipping">
							<div class="col-md-6">
								<div class="shipping_title">
									SELECT SHIPPING
								</div>
								<div class="shipping_select_wr">
									<div class="shipping_select">
										<select>
											<option>
												International shipping
											</option>
											<option>
												1
											</option>
											<option>
												2
											</option>
										</select>
									</div>
									<div class="shipping_price">
										$ 1119,99
									</div>
									<div class="both"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="total_cost">
									TOTAL COST:
									<span>
										$ 215555,83
									</span>
								</div>
							</div>
							<div class="both"></div>
						</div>
						<div class="mc_buttons">
							<div class="mc_buttons_wr">
								<div class="basket_button col-md-6 col-xs-6">
									Continue shopping
								</div>
								<div class="basket_button col-md-6 col-xs-6">
									order checkout
								</div>
								<div class="both"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?include($_SERVER["DOCUMENT_ROOT"]."/verstka/default/footer.php");?>