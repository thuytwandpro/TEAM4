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
	    <!-- /banner_inner -->
		{{--@if(session('thongbao'))--}}
			{{--<div class="alert" style="z-index: 1000; position: absolute">--}}
				{{--{{session('thongbao')}}--}}
			{{--</div>--}}
		{{--@endif--}}
	    <div class="services-breadcrumb_w3ls_agileinfo">
	        <div class="inner_breadcrumb_agileits_w3">
	            <ul class="short">
	                <li><a href="{{asset('/shoes')}}">Home</a><i>|</i></li>
	                <li><a href="{{asset('/shoes/about')}}">About</a><i>|</i></li>
	                <li><a href="404.html">News</a><i>|</i></li>
	                <li><a href="{{asset('/shoes/contacts')}}">Contacts</a><i>|</i></li>
	                <li>shop</li>

					{{--<li class="short-right"><a href="{{asset('/shoes/register')}}">--}}
							{{--@if(Auth::user())--}}
								{{--{{Auth::user()->username}}--}}
							{{--@else Đăng ký--}}
							{{--@endif</a>--}}
						{{--<i>|</i>--}}
					{{--</li>--}}

					{{--<li><a href="{{asset('/shoes/login')}}">@if(Auth::user())--}}
								{{--{{Auth::user()->username}}--}}
							{{--@else Đăng ký--}}
							{{--@endif </a></li>--}}
					@if(Auth::user())
						<li class="short-right">{{Auth::user()->username}}<i>|</i></li>
						<li><a href="{{asset('/shoes/checkout')}}">Đăng Xuất</a></li>
						@else
						<li class="short-right"><a href="{{asset('/shoes/register')}}">Đăng ký</a><i>|</i></li>
						<li><a href="{{asset('/shoes/login')}}">Đăng nhập</a></li>
						@endif
	            </ul>
	        </div>
	    </div>
	    <!-- //banner_inner -->
</div>