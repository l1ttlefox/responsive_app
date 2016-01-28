<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/lib/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/style_320.css">
        <link rel="stylesheet" type="text/css" href="/css/style_768.css">
        <link rel="stylesheet" type="text/css" href="/css/style_600.css">
        <link rel="stylesheet" type="text/css" href="/css/style_992.css">
        <link rel="stylesheet" type="text/css" href="/lib/jquery-ui-1.11.4/jquery-ui.min.css">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="/lib/jquery/jquery-1.11.1.min.js"></script>
        <script src="/lib/js/script.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
		<script src="/lib/jquery.bxslider/jquery.bxslider.js"></script>
		<script src="/lib/jquery-ui-1.11.4/jquery-ui.min.js"></script>
		<title><?//=$pageInfo['title_'.$Main->lang]?></title>
    </head>
	<body>
		<div id="content">
			<div id="header">
				<div class="container">
					<div class="row">
						<div class="logo_wr">
							<div class="header_menu_but"></div>
							<div class="logo">
								<a href="#"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="header_collapsed">
					<div class="container-fluid ch_top">
						<div class="row-fluid">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<div class="header_top_left">
											<div class="social_wr">
												<a href="#" class="facebook"></a>
												<a href="#" class="tweeter"></a>
												<a href="#" class="google_plus"></a>
												<a href="#" class="youtube"></a>
												<div class="both"></div>
											</div>
											<div class="lang_wr">
												<a href="#">
													De
												</a>
												<a href="#" class="current_lang">
													En
												</a>
												<div class="both"></div>
											</div>
											<div class="both"></div>
										</div>
									</div>
									<div class="col-md-9">
										<div class="personal_wr">
											<div class="header_personal">
												<div class="personal_inner pers_arrow">
													My cart:
													<span>
														$100 600.99
													</span>
												</div>
												<div class="header_personal_dd">
													<a href="#">
														First link
													</a>
													<a href="#">
														Second link
													</a>
												</div>
											</div>
											<div class="header_personal ">
												<div class="personal_inner pers_arrow">
													My account
												</div>
												<div class="header_personal_dd">
													<a href="#">
														First link
													</a>
													<a href="#">
														Second link
													</a>
												</div>
											</div>
											<div class="both"></div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid ch_bot">
						<div class="row-fluid">
							<div class="container">
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<div class="search_block">
											<div class="search">
												<input type="search" />
												<input type="submit" value=""/>
												<div class="both"></div>
											</div>
										</div>
									</div>
									<div class="col-md-3 ">
										<div class="header_button col-md-6 col-xs-6 hb_active">
											BUY
										</div>
										<div class="header_button col-md-6 col-xs-6">
											SELL
										</div>
										<div class="both"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end_of_header_collapsed----->
				
				
			</div><!--end_of_header-->
			<div id="page" class="container-fluid">
				<div class="row-fluid">
					<div class="container">
						<div class="row">
							<div class="products_view">
								<div class="col-md-3">
									<div class="left_side_menu">
										<div class="lsm_mobile">
											CHOOSE CATHEGORY
										</div>
										<div class="lsm_full">
											<div class="lsm_block">
												<div class="lsmc_title">
													Price Range
												</div>
												<div class="lsm_items">
													<?
													for($t=1;$t<=4;$t++){
													?>
													<div class="lsm_item">
														<div class="lsm_title">
															<div>
																Watches
															</div>
														</div>
														<div class="lsm_links">
															<a href="#">
																Rings
															</a>
															<a href="#">
																Chais, Necklaces & Pendants
															</a>
															<a href="#">
																Bracelets
															</a>
														</div>
													</div>
													<?}?>
												</div>
											</div>
											<div class="lsm_block">
												<div class="lsmc_title">
													Shop by Cathegory
												</div>
												<div class="lsm_items">
													<div class="lsm_item">
														<div class="lsm_title">
															<div>
																Watches
															</div>
														</div>
														<div class="lsm_links">
															
														</div>
													</div>
												</div>
											</div>
											<div class="lsm_block">
												<div class="lsmc_title">
													Shop by Cathegory
												</div>
												<div class="lsm_items">
													<?
													for($t=1;$t<=4;$t++){
													?>
													<div class="lsm_item">
														<div class="lsm_title">
															<div>
																Watches
															</div>
														</div>
														<div class="lsm_links">
															
														</div>
													</div>
													<?}?>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-md-9">
									<div id="slider">
										<div class="main_slider">
											<?
											for($t=1;$t<=4;$t++){
											?>
											<div class="slide">
												<div class="inner_slide">
													<div class="is_content col-md-6 col-xs-6 col-sm-6">
														<div class="slide_title">
															BUY IT NOW
														</div>
														<div class="slide_sub_title">
															Out of Stok
														</div>
														<div class="slide_text">
															Lorem Ipsum is simply 
															dummy text of the 
															printing and typesettin
															Lorem Ipsum is simply 
															dummy text of the 
															printing and typesettin
															Lorem Ipsum is simply 
															dummy text of the 
															printing and typesettin
														</div>
														<div class="slide_button">
															<a href="#">
																DETAILS
															</a>
														</div>
													</div>
												</div>
												<img src="/images/slider_1.jpg" />
											</div>
											<?}?>
										</div>
									</div>
									<div class="mc_buttons">
										<div class="mc_buttons_wr">
											<div class="mc_button col-md-6 col-xs-6">
												best of sale
											</div>
											<div class="mc_button active_button col-md-6 col-xs-6">
												discounts
											</div>
											<div class="both"></div>
										</div>
									</div>
									<div class="mp_content">
										<?
										for($t=1;$t<=4;$t++){
										?>
										<div class="col-md-6">
											<div class="col-md-6 col-sm-6 product_wr">
												<div class="product_block">
													<div class="product_img">
														<img src="/images/product_img_1.jpg" />
													</div>
													<div class="product_name">
														Finchitiida Exclusive 
														Gold Laos Choker Necklace
													</div>
													<div class="product_price">
														 $ 1 999,99
													</div>
													<div class="product_bot">
														<a href="#" class="product_detail">
															DETAILS
														</a>
														<div class="product_basket">
															<a href="#"></a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 product_wr">
												<div class="product_block">
													<div class="product_img">
														<img src="/images/product_img_1.jpg" />
													</div>
													<div class="product_name">
														Finchitiida Exclusive 
														Gold Laos Choker Necklace
													</div>
													<div class="product_price">
														 $ 1 999,99
													</div>
													<div class="product_bot">
														<a href="#" class="product_detail">
															DETAILS
														</a>
														<div class="product_basket">
															<a href="#"></a>
														</div>
													</div>
												</div>
											</div>
										</div><!--end_of_col-md-6-->
										<?}?>
										
									</div><!--end_of_mp_content-->
									
								</div>
								<div class="both"></div>
							</div><!--end_of_products_view-->
							<div class="category_view">
								<div class="col-md-4">
									<div class="category_wr">
										<div class="category_top">
											<div class="cat_title category_1">
												<div>
													NEAR ME
												</div>
											</div>
										</div>
										<div class="category_products">
											<?
											for($t=1;$t<=4;$t++){
											?>
											<div class="cp_block col-md-12 col-sm-6">
												<div class="col-xs-3">
													<div class="cp_img">
														<img src="/images/product_cat_img_1.jpg" />
													</div>
												</div>
												<div class="col-xs-9">
													<div class="cp_product_name">
														Finchitiida Exclusive 
														Gold Laos Choker Necklace
													</div>
													<div class="cp_bot">
														<div class="col-xs-6">
															<div class="cp_product_price">
																 $ 1 999,99
															</div>
														</div>
														<div class="col-xs-6">
															<a href="#" class="product_detail">
																DETAILS
															</a>
														</div>
														<div class="both"></div>
													</div>
												</div>
												<div class="both"></div>
											</div>
											<?}?>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="category_wr">
										<div class="category_top">
											<div class="cat_title category_2">
												<div>
													NEAR ME
												</div>
											</div>
										</div>
										<div class="category_products">
											<?
											for($t=1;$t<=4;$t++){
											?>
											<div class="cp_block col-md-12 col-sm-6">
												<div class="col-xs-3">
													<div class="cp_img">
														<img src="/images/product_cat_img_1.jpg" />
													</div>
												</div>
												<div class="col-xs-9">
													<div class="cp_product_name">
														Finchitiida Exclusive 
														Gold Laos Choker Necklace
													</div>
													<div class="cp_bot">
														<div class="col-xs-6">
															<div class="cp_product_price">
																 $ 1 999,99
															</div>
														</div>
														<div class="col-xs-6">
															<a href="#" class="product_detail">
																DETAILS
															</a>
														</div>
														<div class="both"></div>
													</div>
												</div>
												<div class="both"></div>
											</div>
											<?}?>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="category_wr">
										<div class="category_top">
											<div class="cat_title category_3">
												<div>
													NEAR ME
												</div>
											</div>
										</div>
										<div class="category_products">
											<?
											for($t=1;$t<=4;$t++){
											?>
											<div class="cp_block col-md-12 col-sm-6">
												<div class="col-xs-3">
													<div class="cp_img">
														<img src="/images/product_cat_img_1.jpg" />
													</div>
												</div>
												<div class="col-xs-9">
													<div class="cp_product_name">
														Finchitiida Exclusive 
														Gold Laos Choker Necklace
													</div>
													<div class="cp_bot">
														<div class="col-xs-6">
															<div class="cp_product_price">
																 $ 1 999,99
															</div>
														</div>
														<div class="col-xs-6">
															<a href="#" class="product_detail">
																DETAILS
															</a>
														</div>
														<div class="both"></div>
													</div>
												</div>
												<div class="both"></div>
											</div>
											<?}?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--end_of_page-->
		</div><!--end_of_content-->
		<div id="footer" class="container-fluid">
			<div class="row-fluid">
				<div class="container">
					<div class="row">
						<div class="footer_colomns">
							<div class="footer_colomn">
								<div class="fc_title">
									Shops
								</div>
								<div class="fc_map">
									<div id="map" class="map_wr"></div>
								</div>
							</div>
							<div class="footer_colomn">
								<div class="fc_title">
									For the buyer
								</div>
								<div class="fc_links">
									<div>
										<a href="#">
											Advice 
										</a>
									</div>
									<div>
										<a href="#">
											Privacy Policy
										</a>
									</div>
									<div>
										<a href="#">
											Popular Brands
										</a>
									</div>
									<div>
										<a href="#">
											Safety
										</a>
									</div>
								</div>
							</div>
							<div class="footer_colomn">
								<div class="fc_title">
									For the Saller
								</div>
								<div class="fc_links">
									<div>
										<a href="#">
											Seller Portal  
										</a>
									</div>
									<div>
										<a href="#">
											Assistant 
										</a>
									</div>
									<div>
										<a href="#">
											Prices 
										</a>
									</div>
									<div>
										<a href="#">
											Payments
										</a>
									</div>
									<div>
										<a href="#">
											 Privacy Policy
										</a>
									</div>
								</div>
							</div>
							<div class="footer_colomn">
								<div class="fc_title">
									About Us
								</div>
								<div class="fc_links">
									<div>
										<a href="#">
											About Us   
										</a>
									</div>
									<div>
										<a href="#">
											Media 
										</a>
									</div>
									<div>
										<a href="#">
											Right to Return 
										</a>
									</div>
								</div>
							</div>
							<div class="footer_colomn">
								<div class="fc_title">
									Services
								</div>
								<div class="fc_links">
									<div>
										<a href="#">
											Help    
										</a>
									</div>
									<div>
										<a href="#">
											Contscts 
										</a>
									</div>
								</div>
							</div>
							<div class="both"></div>
						</div>
						<div class="footer_bot">
							<div class="col-md-6 footer_bot_left">
								© 2015 Webmaster studio. Все права защищены.
							</div>
							<div class="col-md-6">
								<div class="footer_bot_right">
									<div class="social_wr">
										<a href="#" class="facebook"></a>
										<a href="#" class="tweeter"></a>
										<a href="#" class="google_plus"></a>
										<a href="#" class="youtube"></a>
										<div class="both"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>