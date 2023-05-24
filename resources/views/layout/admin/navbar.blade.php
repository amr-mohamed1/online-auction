<nav class="navbar top-navbar">
    <div class="container-fluid">
        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="{{asset('admin/assets/images/icon.svg')}}" alt="Oculux Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="notification-dot bg-azura">{{$data->count()}}</span>
                    </a>
                    <ul style="max-height: 500px !important;overflow-y: auto !important;" class="dropdown-menu feeds_widget vivify swoopInTop">
                        @foreach ($data as $alert)
                            <li>
                                <a href="javascript:void(0);">
                                    @if($alert->action == 'Create')
                                        <div class="feeds-left bg-green"><i class="fas fa-plus"></i></div>
                                    @elseif($alert->action == 'update')
                                        <div class="feeds-left bg-info"><i class="far fa-pencil-alt"></i></div>
                                    @else
                                        <div class="feeds-left bg-red"><i class="fas fa-trash-alt"></i></div>
                                    @endif
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">{{$alert->action}} <small class="float-right text-muted">{{$alert->created_at->format('g:i A')}}</small></h4>
                                        <small>{!! "<span style='font-weight:900'>" . $alert->admins->name . "</span> " . $alert->action . " "!!} Row In <span style="font-weight: 900;color: #555">{{$alert->model_type}}</span></small>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown language-menu">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="fa fa-language"></i>
                    </a>
                    <div class="dropdown-menu vivify swoopInTop" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item pt-2 pb-2" href=""><img alt="flag" src="{{asset('admin/assets/images/flag/us.svg')}}" class="w20 mr-2 rounded-circle"> US English</a>
                    </div>
                </li>
{{--                <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="Mega Menu">Mega</a></li>--}}
{{--                <li class="p_social"><a href="" class="social icon-menu" title="News">Social</a></li>--}}
{{--                <li class="p_news"><a href="" class="news icon-menu" title="News">News</a></li>--}}
            </ul>
        </div>
        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
{{--                    <li><a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result"><i class="icon-magnifier"></i></a></li>--}}
{{--                    <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i><span class="notification-dot bg-pink">2</span></a></li>--}}
                    <li>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <i class="icon-power"></i>
                        </x-responsive-nav-link>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
</nav>
