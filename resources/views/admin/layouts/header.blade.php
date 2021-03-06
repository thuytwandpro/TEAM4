<header class="main-header">
    <a href="shoes/admin/home/index" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>Shoes</b>PTY</span>
    </a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="admin/avatar/@if(Auth::user()){{Auth::user()->avatar}}@endif" class="user-image" >

                    <span class="hidden-xs">
                        @if(Auth::user())
                            {{Auth::user()->username}}
                        @endif
                    </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="admin/avatar/@if(Auth::user()){{Auth::user()->avatar}}@endif" class="img-circle">
                            <p>Xin chào 
                                @if(Auth::user())
                                    {{Auth::user()->username}}
                                @endif

                            </p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="javascript:;" class="btn btn-default btn-flat"  onclick="if(confirm('Bạn có chắc chắn muốn đăng xuất')){location.href='{{asset('admin/logout')}}'}">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>