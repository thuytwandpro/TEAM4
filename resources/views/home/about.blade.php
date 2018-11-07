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
	        <h3 class="head">About Us PTY Shoes</h3>
	        <p class="head_para">Add Some Description</p>
	        <div class="inner_section_w3ls">
	            <div class="col-md-6 news-left">
	                <img src="pages/images/ab.jpg" alt=" " class="img-responsive">
	            </div>
	            <div class="col-md-6 news-right">
	                <h4>Welcome to our PTY Shoes</h4>
	                <p class="sub_p">PTY Shoes là một shop giày luôn bán hàng theo tiêu chí “RẺ - ĐẸP – BỀN”, mong muốn đem đến chất lượng cũng như giá cả tốt nhất và phù hợp cho mọi người.
					<p>PTY Shoes chuyên bán các mặt hàng giày với mẫu mã đa dạng, style mới nhất... cùng nhiều mẫu sản phẩm giày dép như Nike, Adidas...với chất lượng, mang đến cho Quý Khách Hàng cảm giác mạnh mẽ, tự tin, cá tính và thanh lịch.</p>
					<p> Những mặt hàng giày dép khác, PTY Shoes nhập hàng trực tiếp tại xưởng sản xuất và shop tự sản xuất nhằm đảm bảo chất lượng và giá "RẺ" cho khách hàng</p>
    				<p>PTY shoes có chế độ bảo hành keo vĩnh viễn khi khách hàng mua sản phẩm giày của shop nên khách hàng sẽ luôn yên tâm về "CHẤT LƯỢNG BỀN".</p>
	            </div>
	            <div class="clearfix"> </div>
	        </div>
	    </div>
	</div>
	<div class="mid_services">
	    <div class="col-md-6 according_inner_grids">
	        <h3 class="heading two">Tại sao nên chọn PTY SHOES</h3>
	        <div class="according_info">
	            <div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingOne">
	                        <h4 class="panel-title asd">
	                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
	                                aria-controls="collapseOne">
	                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Nhân viên thân thiện
	                            </a>
	                        </h4>
	                    </div>
	                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                        <div class="panel-body panel_text">
	                            Với sự năng động, chuyên nghiệp của đội ngủ quản lý; Sự tận tụy của nhân viên cửa hàng… là những mảnh ghép quan trọng làm nên thương hiệu giày tăng chiều cao thời trang PTY SHOES
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingTwo">
	                        <h4 class="panel-title asd">
	                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
	                                aria-controls="collapseTwo">
	                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Chất lượng sản phẩm
	                            </a>
	                        </h4>
	                    </div>
	                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                        <div class="panel-body panel_text">
	                           PTY SHOES lựa chọn những dòng sản phẩm tốt nhất,mang thương hiệu giày thời trang uy tín.
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingThree">
	                        <h4 class="panel-title asd">
	                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
	                                aria-controls="collapseThree">
	                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Tâm lý khách hàng
	                            </a>
	                        </h4>
	                    </div>
	                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                        <div class="panel-body panel_text">
	                            PTY SHOES luôn quan niệm vóc dáng và vẻ đẹp bên ngoài trẻ trung đẹp sẽ mang lại nhiều lợi thế cho bạn trong cuộc sống cũng như giúp bạn thể hiện phong cách của chính mình nên những sản phẩm của PTY SHOES đều mang lại nét cá tính cho bạn nữ, bụi bặm hiện đại để mang lại vóc dáng thon gọn và hợp mốt nhất cho các bạn trẻ. Bên cạnh đó PTY SHOES luôn đặt mình vào tâm lý và quyền lợi của khách hàng đó là những sản phẩm thời trang chất lượng tốt nhất, mẫu mã cực đẹp, mới lạ.
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingThree">
	                        <h4 class="panel-title asd">
	                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
	                                aria-controls="collapseThree">
	                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Giá cả phù hợp
	                            </a>
	                        </h4>
	                    </div>
	                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                        <div class="panel-body panel_text">
	                            Các dòng sản phẩm của U2SHOP không ngừng đa dạng về kiểu dáng, mẫu mã từ giày sneaker, adiadd,..nhưng vẫn hợp lý giá cả cạnh tranh.
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-6 mid_services_img">
	        <div class="bar-grids">
	            <h3 class="heading two three">Our Skills</h3>
	            <div class="skill_info">
	                <h6>Development<span> 95% </span></h6>
	                <div class="progress">
	                    <div class="progress-bar progress-bar-striped active" style="width: 95%">
	                    </div>
	                </div>
	                <h6>Pricing<span> 85% </span></h6>
	                <div class="progress">
	                    <div class="progress-bar progress-bar-striped active" style="width: 85%">
	                    </div>
	                </div>
	                <h6>Production <span>90% </span></h6>
	                <div class="progress">
	                    <div class="progress-bar progress-bar-striped active" style="width: 90%">
	                    </div>
	                </div>
	                <h6>Advertising <span>86% </span></h6>
	                <div class="progress prgs-last">
	                    <div class="progress-bar progress-bar-striped active" style="width: 86%">
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="clearfix"> </div>
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
<!-- @section('script')
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
	    $(document).ready(function () {
	    	$('#horizontalTab').easyResponsiveTabs({
	    		type: 'default', //Types: default, vertical, accordion           
	    		width: 'auto', //auto or any width like 600px
	    		fit: true, // 100% fit in a container
	    		closed: 'accordion', // Start closed if in accordion view
	    		activate: function (event) { // Callback function if tab is switched
	    			var $tab = $(this);
	    			var $info = $('#tabInfo');
	    			var $name = $('span', $info);
	    			$name.text($tab.text());
	    			$info.show();
	    		}
	    	});
	    	$('#verticalTab').easyResponsiveTabs({
	    		type: 'vertical',
	    		width: 'auto',
	    		fit: true
	    	});
	    });
	</script>
@endsection -->