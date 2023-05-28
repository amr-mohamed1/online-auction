<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="{{asset('img/favicon.ico')}}" alt="Oculux Logo" class="img-fluid logo"><span>Helpers</span></a>
        <button type="button" class="float-right btn-toggle-offcanvas btn btn-sm"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{asset('admin/assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome Back,</span>
                <a href="javascript:void(0);" class=" user-name"><strong>Test Admin</strong></a>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main Pages</li>


                {{-- ============================ users page ============================== --}}
                <li class=" {{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{route('admin.dashboard')}}"><i class="far fa-tachometer-alt"></i><span>Dashboard</span></a></li>



                {{-- ============================ users page ============================== --}}
                <li class=" {{ Request::segment(2) === 'admin' ? 'active' : null }}"><a href="{{route('admin.admin.index')}}"><i class="far fa-user-lock"></i><span>Admins</span></a></li>



                {{-- ============================ users page ============================== --}}
                <li class=" {{ Request::segment(2) === 'users' ? 'active' : null }}"><a href="{{route('admin.users.index')}}"><i class="icon-users"></i><span>Users</span></a></li>



                {{-- ============================ specialities page ============================== --}}
                <li class=" {{ Request::segment(2) === 'orders' ? 'active' : null }}"><a  href="{{route('admin.orders.index')}}"><i class="far fa-shipping-fast"></i><span>Orders</span></a></li>



                {{-- ============================ Categories page ============================== --}}
                <li class=" {{ Request::segment(2) === 'categories' ? 'active' : null }}"><a  href="{{route('admin.categories.index')}}"><i class="far fa-user-hard-hat"></i><span>Categories</span></a></li>



                {{-- ============================ rates page ============================== --}}
                <li class=" {{ Request::segment(2) === 'rates' ? 'active' : null }}"><a  href="{{route('admin.rates.index')}}"><i class="far fa-star-exclamation"></i><span>Rates</span></a></li>


                {{-- ============================ feedbacks page ============================== --}}
                <li class=" {{ Request::segment(2) === 'feedbacks' ? 'active' : null }}"><a  href="{{route('admin.feedbacks.index')}}"><i class="far fa-comments-alt"></i><span>Feedbacks</span></a></li>


                {{-- ============================ reports page ============================== --}}
                <li class=" {{ Request::segment(2) === 'all-reports' ? 'active' : null }}"><a  href="{{route('admin.all-reports')}}"><i class="far fa-inbox-in"></i><span>Reported Users</span></a></li>


            </ul>
        </nav>
    </div>
</div>
