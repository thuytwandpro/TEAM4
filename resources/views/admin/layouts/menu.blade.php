<aside class="main-sidebar">
    <section class="sidebar">
        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<img src="admin_asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{--<p>User</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
                {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat">--}}
                {{--<i class="fa fa-search"></i>--}}
                {{--</button>--}}
                {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">PTY Shoes</li>
            <li class="active treeview menu-open">
                <a href="{{route('home.index')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('users.danhsach')}}">
                <i class="fa fa-book"></i> <span>Thành viên</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('users.danhsach')}}"><i class="fa fa-circle-o text-red"></i></i> Danh sách</a></li>
                    <li><a href="{{route('users.them')}}"><i class="fa fa-circle-o text-yellow"></i> Thêm thành viên</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{route('categories.index')}}">
                <i class="fa fa-edit"></i> <span>Danh mục</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o text-red"></i> Danh sách</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Thêm danh mục</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                <i class="fa fa-edit"></i> <span>Sản phẩm</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('products.index')}}"><i class="fa fa-circle-o text-red"></i> Danh sách</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Thêm sản phẩm</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('bills.index')}}">
                <i class="fa fa-folder"></i> <span>Đơn hàng</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('news.index')}}">
                <i class="fa fa-edit"></i></i> <span>Tin tức</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('news.index')}}"><i class="fa fa-circle-o text-red"></i> Danh sách tin tức</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Thêm tin tức</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{route('sales.index')}}">
                <i class="fa fa-edit"></i> <span>Khuyến mãi</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('sales.index')}}"><i class="fa fa-circle-o text-red"></i> Danh sách khuyến mãi</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Thêm sản phẩm khuyến mãi</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{route('statistics.index')}}">
                <i class="fa fa-table"></i> <span>Báo cáo thống kê</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('statistics.index')}}"><i class="fa fa-circle-o text-red"></i> Thống kê sản phẩm</a></li>
                    <li><a href="{{route('statistics.index')}}"><i class="fa fa-circle-o text-yellow"></i> Thống kê đơn hàng</a></li>
                </ul>
            </li>
             {{--<li>--}}
                {{--<a href="{{asset('/shoes/admin/home/login')}}">--}}
                {{--<i class="fa fa-share"></i> <span>Đăng xuất</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </section>
</aside>