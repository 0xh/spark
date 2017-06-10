<div class="app-bar fixed-top" data-role="appbar">
    <div class="container-top">
        <div class="sidebar-trigger sidebar-sizer mobile-only"><span class="fa fa-menu"></span></div>
        <a href="#" target="_blank" class="app-bar-element branding">
            <span class="mif-windows mif-2x"></span>
            <span>Evolutly</span>
        </a>

        <ul class="app-bar-menu place-right">
            <li class="">
                <a class="app-bar-element place-right branding" href="#!"
                    target="_blank">Support</a>
            </li>
            @if(Auth::check())
            <li><a href="{{url('/admin/dashboard')}}" class="app-bar-element place-right">Dashboard</a></li>
            <li>
                <a href="#" class="dropdown-toggle">{{ Auth::user()->name }}</a>
                <ul class="d-menu context place-right" data-role="dropdown">
                    <li><a href="#" class="metro-logout" data-confirm="are you sure want to logout ?">
                            <span class="icon mif-exit"></span> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                </ul>
            </li>
            @else
            <li>
                <a class="app-bar-element" href="{{ url('/login') }}">Login</a>
            </li>
            <li>
                <a class="app-bar-element" href="{{ url('/register') }}">Register</a>
            </li>
            @endif
        </ul>

    </div>
</div>