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



                {{-- ============================ locations ============================== --}}
                <li class="{{ Request::segment(2) === 'cities' || Request::segment(2) === 'areas' ? 'active open' : null }}">
                    <a href="#Project" class="has-arrow {{ Request::segment(2) === 'cities' ? 'active' : null }}"><i class="far fa-map-marked-alt"></i><span>Locations</span></a>
                    <ul>
                         {{-- ============================ cities page ============================== --}}
                        <li class=" {{ Request::segment(2) === 'cities' ? 'active' : null }}"><a  href="{{route('admin.cities.index')}}"><span>Cities</span></a></li>

                        {{-- ============================ areas page ============================== --}}
                        <li class=" {{ Request::segment(2) === 'areas' ? 'active' : null }}"><a  href="{{route('admin.areas.index')}}"><span>Areas</span></a></li>
                    </ul>
                </li>


                {{-- ============================ blogs page ============================== --}}
                <li class=" {{ Request::segment(2) === 'blogs' ? 'active' : null }}"><a  href="{{route('admin.blogs.index')}}"><i class="fal fa-newspaper"></i><span>Blogs</span></a></li>



                {{-- ============================ specialities page ============================== --}}
                <li class=" {{ Request::segment(2) === 'orders' ? 'active' : null }}"><a  href="{{route('admin.orders.index')}}"><i class="far fa-shipping-fast"></i><span>Orders</span></a></li>



                {{-- ============================ specialities page ============================== --}}
                <li class=" {{ Request::segment(2) === 'specialities' ? 'active' : null }}"><a  href="{{route('admin.specialities.index')}}"><i class="far fa-user-hard-hat"></i><span>Specialities</span></a></li>



                {{-- ============================ rates page ============================== --}}
                <li class=" {{ Request::segment(2) === 'rates' ? 'active' : null }}"><a  href="{{route('admin.rates.index')}}"><i class="far fa-star-exclamation"></i><span>Rates</span></a></li>


                {{-- ============================ feedbacks page ============================== --}}
                <li class=" {{ Request::segment(2) === 'feedbacks' ? 'active' : null }}"><a  href="{{route('admin.feedbacks.index')}}"><i class="far fa-comments-alt"></i><span>Feedbacks</span></a></li>


                {{-- ============================ feedbacks page ============================== --}}
                <li class=" {{ Request::segment(2) === 'contact_us' ? 'active' : null }}"><a  href="{{route('admin.contact_us.index')}}"><i class="far fa-inbox-in"></i><span>Contact Us</span></a></li>


            </ul>
        </nav>
    </div>
</div>
