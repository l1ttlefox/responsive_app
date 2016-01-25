<?include($_SERVER["DOCUMENT_ROOT"]."/verstka/default/header.php");?>
	<div id="page">
		<div class="container ">
			<div class="row">
				<div class="filter_title">
					REFINE BY
				</div>
				<div class="product_view">
					<div class="col-md-3">
						<div class="side_filter">
							<div class="lsm_mobile">
								CHOOSE FILTER
							</div>
							<div class="lsm_full">
								<div class="filter_block">
									<div class="fb_title">
										Price range
									</div>
									<div class="filter_items">
										<div class="filter_range">
											<div class="pr_top">
												<div class="col-xs-6">
													<div class="col-xs-4 fi_label">
														from
													</div>
													<div class="col-xs-8 fi_input">
														<span class="currency">$</span>
														<input id="val_1" type="text" />
													</div>
													<div class="both"></div>
												</div>
												<div class="col-xs-6">
													<div class="col-xs-4 fi_label">
														to
													</div>
													<div class="col-xs-8 fi_input">
														<span class="currency">$</span>
														<input id="val_2" type="text" />
													</div>
													<div class="both"></div>
												</div>
												<div class="both"></div>
											</div>
											<div id="filter_rs" class="pr_bot">
												<span class="pr_bot_min">
													$ 10
												</span>
												<span class="pr_bot_max">
													$ 9999
												</span>
												<div id="slider-range"></div>
											</div>
										</div><!--end_of_filter_range-->
									</div>
								</div>
								<div class="filter_block">
									<div class="fb_title">
										Grammage
									</div>
									<div class="filter_items">
										<div class="filter_range">
											<div class="pr_top">
												<div class="col-xs-6">
													<div class="col-xs-4 fi_label">
														from
													</div>
													<div class="col-xs-8 fi_input">
														<span class="currency">$</span>
														<input id="val_1" type="text" />
													</div>
													<div class="both"></div>
												</div>
												<div class="col-xs-6">
													<div class="col-xs-4 fi_label">
														to
													</div>
													<div class="col-xs-8 fi_input">
														<span class="currency">$</span>
														<input id="val_2" type="text" />
													</div>
													<div class="both"></div>
												</div>
												<div class="both"></div>
											</div>
										</div><!--end_of_filter_range-->
									</div>
								</div>
								<div class="filter_block">
									<div class="fb_title">
										Shop by Cathegory
									</div>
									<div class="filter_items">
										<?
										for($t=1;$t<=4;$t++){
										?>
										<div class="filter_item">
											<div class="fi_inner">
												<div>
													Hair Accessories
												</div>
												<div class="fi_checkbox">
													<div></div>
												</div>
											</div>
										</div>
										<?}?>
									</div>
								</div>
								<div class="filter_block">
									<div class="fb_title">
										Shop by Cathegory
									</div>
									<div  class="filter_items filter_scrolled mask_down">
										<div id="showScroll" class="fs_inner">
											<?
											for($t=1;$t<=8;$t++){
											?>
											<div class="filter_item">
												<div class="fi_inner">
													<div>
														Hair Accessories Hair Accessories
													</div>
													<div class="fi_checkbox">
														<div></div>
													</div>
												</div>
											</div>
											<?}?>
										</div>
									</div>
								</div>
								<div class="filter_block">
									<div class="fb_title">
										Shop by Cathegory
									</div>
									<div class="filter_items">
										<?
										for($t=1;$t<=4;$t++){
										?>
										<div class="filter_item">
											<div class="fi_inner">
												<div>
													Hair Accessories Hair Accessories
												</div>
												<div class="fi_checkbox">
													<div></div>
												</div>
											</div>
										</div>
										<?}?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="filter_content">
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
							<div class="both"></div>
						</div><!--end_of_mp_content-->
						<div class="pagination_wr">
							<div class="pagination">
								<a href="#" class="pag_prev">prev.</a>
								<a href="#" class="pag_cur">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">...</a>
								<a href="#" class="pag_next">next.</a>
								<div class="both"></div>
							</div>
						</div>
					</div>
					<div class="both"></div>
				</div>
			</div>
		</div>
	</div>
<?include($_SERVER["DOCUMENT_ROOT"]."/verstka/default/footer.php");?>