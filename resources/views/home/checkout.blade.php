@extends('layouts.master')
@section('header')
	<div class="banner_top innerpage" id="home">
	    <div class="wrapper_top_w3layouts">
	        <div class="header_agileits">
	            <div class="logo inner_page_log">
	                <h1><a class="navbar-brand" href="index.html"><span>PTY</span> <i>Shoes</i></a></h1>
	            </div>
	            <!-- cart details -->
	            <div class="top_nav_right">
	                <div class="shoecart shoecart2 cart cart box_1">
	                    <form action="#" method="post" class="last">
	                        <input type="hidden" name="cmd" value="_cart">
	                        <input type="hidden" name="display" value="1">
	                        <button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- //cart details -->
	    <!-- search -->
	    <div class="search_w3ls_agileinfo">
	        <div class="cd-main-header">
	            <ul class="cd-header-buttons">
	                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
	            </ul>
	        </div>
	        <div id="cd-search" class="cd-search">
	            <form action="#" method="post">
	                <input name="Search" type="search" placeholder="Click enter after typing...">
	            </form>
	        </div>
	    </div>
	    <!-- //search -->
	    <div class="clearfix"></div>
	    <!-- /banner_inner -->
	    <div class="services-breadcrumb_w3ls_agileinfo">
	        <div class="inner_breadcrumb_agileits_w3">
	            <ul class="short">
	                <li><a href="{{asset('/shoes')}}">Home</a><i>|</i></li>
	                <li><a href="{{asset('/shoes/about')}}">About</a><i>|</i></li>
	                <li><a href="404.html">News</a><i>|</i></li>
	                <li><a href="{{asset('/shoes/contacts')}}">Contacts</a><i>|</i></li>
	                <li>shop</li>
	                <li class="short-right"><a href="{{asset('/shoes/register')}}">Đăng kí</a><i>|</i></li>
	                <li><a href="{{asset('/shoes/login')}}">Đăng nhập</a></li>
	            </ul>
	        </div>
	    </div>
	    <!-- //banner_inner -->
	</div>
@endsection
@section('content')
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>

				<div class="checkout-right">
					<h4>Your shopping cart contains: <span>3 Products</span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image"><a href="single.html"><img src="pages/images/s1.jpg" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Bella Toes</td>

								<td class="invert">$675.00</td>
								<td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>

								</td>
							</tr>
							<tr class="rem2">
								<td class="invert">2</td>
								<td class="invert-image"><a href="single.html"><img src="pages/images/s5.jpg" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Red Bellies</td>

								<td class="invert">$325.00</td>
								<td class="invert">
									<div class="rem">
										<div class="close2"> </div>
									</div>

								</td>
							</tr>
							<tr class="rem3">
								<td class="invert">3</td>
								<td class="invert-image"><a href="single.html"><img src="pages/images/s2.jpg" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Chikku Loafers</td>

								<td class="invert">$405.00</td>
								<td class="invert">
									<div class="rem">
										<div class="close3"> </div>
									</div>

								</td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4>Continue to basket</h4>
						<ul>
							<li>Product1 <i>-</i> <span>$675.00 </span></li>
							<li>Product2 <i>-</i> <span>$325.00 </span></li>
							<li>Product3 <i>-</i> <span>$405.00 </span></li>
							<li>Total Service Charges <i>-</i> <span>$55.00</span></li>
							<li>Total <i>-</i> <span>$1405.00</span></li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Thông tin đơn hàng</h4>
						<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" type="text" placeholder="Mobile number">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Email: </label>
													<input class="form-control" type="text" placeholder="Email">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Address: </label>
											<input class="form-control" type="text" placeholder="Town/City">
										</div>
										<div class="check-thanh-toan">
											<ul style="list-style: none;">
												<li style="width: 50px;">
													<input type="radio" style="float: left;">
													<p class="thanh-toan" style="width:300px; font-weight: bold;font-size: 115%;">Thanh toán khi đặt hàng </p>
													<p style="width:750px; margin-left: 50px; ">Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng</p>
												</li>
												
												<li style="width: 50px;">
													<input type="radio"  style="float: left;">
													<p class="thanh-toan" style="width:300px; font-weight: bold;font-size: 115%;">Chuyển khoản</p>
													<p style="width:500px; margin-left: 50px;">Chuyển tiền đến tài khoản sau:
													<br>- Số tài khoản: 123 456 789
													<br>- Chủ TK: Nguyễn A
													<br>- Ngân hàng ACB, Chi nhánh TPHCM</p>
												</li>
												
											</ul>
										</div>
									</div>
									<button class="submit check_out">ĐẶT HÀNG</button>
								</div>
							</section>
						</form>
					</div>

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
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