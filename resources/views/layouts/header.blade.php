<div class="banner_top innerpage" id="home">
	    <div class="wrapper_top_w3layouts">
	        <div class="header_agileits">
	            <div class="logo inner_page_log">
	                <h1><a class="navbar-brand" href="/TEAM4/public/"><span>PTY</span> <i>Shoes</i></a></h1>
	            </div>
	            <!-- cart details -->
	            <div class="top_nav_right">
	                <div class="shoecart shoecart2 cart cart box_1" style="width: 40px; height: 35px;padding-top: 10px; background: black;padding-left: 10px;">
	                    <a href="{{asset('/shoes/checkout')}}">
							<i class="fa fa-cart-plus fa-lg" style="color: white;" aria-hidden="true"></i>
						</a>
	                </div>
	            </div>
	        </div>
	    </div>
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
	    <div class="services-breadcrumb_w3ls_agileinfo">
	        <div class="inner_breadcrumb_agileits_w3">
	            <ul class="short">
	                <li><a href="{{asset('/shoes')}}">Home</a><i>|</i></li>
	                <li><a href="{{asset('/shoes/about')}}">About</a></li>
					@if(Auth::user())
						<li class="short-right" style="margin-left: 900px" >{{Auth::user()->username}}<i>|</i></li>
						<li><a href="javascript:;" onclick="if(confirm('Bạn có chắc chắn muốn Đăng xuất')){location.href='{{asset('/shoes/logout')}}'}">Đăng Xuất</a></li>
					@else
						<li class="short-right" style="margin-left: 900px"><a href="{{asset('/shoes/register')}}">Register</a><i>|</i></li>
						<li><a href="{{asset('/shoes/login')}}">Login</a></li>
					@endif
	            </ul>
	        </div>
	    </div>
	    <!-- //banner_inner -->
</div>