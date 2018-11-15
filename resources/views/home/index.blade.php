@extends('layouts.master')
@section('content')
<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="" method="post">
						<input type="search" placeholder="Product name..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
				<!-- //price range -->
				<!--preference -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Category</h3>
					<ul>
						<li>
							<input type="checkbox" name="category" class="checked">
							<span class="span">Sandals</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Heels</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Boots</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Sneakers</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Loafers</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Boat Shoes</span>
						</li>
					</ul>
				</div>
				<!-- // preference -->
				<!-- discounts -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Discount</h3>
					<ul>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">5% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">10% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">20% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">30% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">50% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">60% or More</span>
						</li>
					</ul>
				</div>
				<!-- //discounts -->
				<!-- reviews -->
				
				<!-- //reviews -->
				<!-- deals -->
				<div class="deal-leftmk left-side">
					<h3 class="agileits-sear-head">Special Deals</h3>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="pages/images/s4.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Shuberry Heels</h3>
							<a href="single.html">180.000 VNĐ</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="pages/images/s2.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Chikku Loafers</h3>
							<a href="single.html">190.000 VNĐ</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="pages/images/s1.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Bella Toes</h3>
							<a href="single.html">180.000 VNĐ</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="pages/images/s5.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Red Bellies</h3>
							<a href="single.html">205.000 VNĐ</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="pages/images/s3.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>(SRV) Sneakers</h3>
							<a href="single.html">185.000 VNĐ</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //deals -->

			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="left-ads-display col-md-9">
				<div class="wrapper_top_shop">
					<div class="col-md-6 shop_left">
						<img src="pages/images/banner3.jpg" alt="">
						<h6>40% off</h6>
					</div>
					<div class="col-md-6 shop_right">
						<img src="pages/images/banner2.jpg" alt="">
						<h6>50% off</h6>
					</div>
					<div class="clearfix"></div>
					<!-- product-sec1 -->
					<div class="product-sec1">
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s1.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">Bella Toes </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">210.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						 <div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s2.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('shoes/single')}}">Chikku Loafers </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">250.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s3.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">(SRV) Sneakers </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">170.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men women_two">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s4.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">Shuberry Heels </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">230.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men women_two">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s5.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">Red Bellies </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">200.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men women_two">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s6.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">Catwalk Flats</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">190.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out">
												<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s7.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">Running Shoes</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">130.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s8.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">Sukun Casuals</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">150.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="pages/images/s7.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{asset('/shoes/single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{asset('/shoes/single')}}">Running Shoes</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">130.000 VNĐ</span><br>
														<del style="margin-left: -2px;">250.000 VNĐ</del>
													</div>
												</div>
												<ul class="stars">
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												</ul>
											</div>
											<div class="shoe single-item hvr-outline-out" style="width: 40px; height: 35px;padding-top: 11px; background: black;">
												<a href="{{asset('/shoes/checkout')}}">
													<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>

					</div>

					<!-- //product-sec1 -->
					<div class="col-md-6 shop_left shp">
						<img src="pages/images/banner4.jpg" alt="">
						<h6>21% off</h6>
					</div>
					<div class="col-md-6 shop_right shp">
						<img src="pages/images/banner1.jpg" alt="">
						<h6>31% off</h6>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection
@section('slidebar')
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Shoes</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class=""></li>
					<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g5.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g6.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="pages/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
				<!-- The Modal -->

			</div>
		</div>

		<div class="clearfix"> </div>
	</div>
@endsection