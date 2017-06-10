<div class="app-bar fixed-top bg-black " data-role="appbar">
    <div class="container-top">
        <div class="sidebar-trigger sidebar-sizer mobile-only"><span class="fa fa-gear"></span></div>
        <a href="{{ url('admin/dashboard') }}" class="app-bar-element branding">
            <!-- <img src="{{ asset('metro/images/logo.png') }}" class="logo" > -->
            Admin Metro
        </a>

        <ul class="app-bar-menu ">
            <li class="bg-black">
                <a href="#" class="dropdown-toggle">Control Panel</a>
                <ul class="d-menu context " data-role="dropdown">
                    <li>
                        <a href="#" class="dropdown-toggle">General</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="#">sub menu 1</a></li>
                            <li class="divider"> </li>
                            <li><a href="#">sub menu 2</a></li>
                            <li><a href="#">sub menu 3</a></li>
                            <li class="divider"> </li>
                            <li><a href="#">sub menu 4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Website</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="#">sub menu 1</a></li>
                            <li><a href="#">sub menu 2</a></li>
                            <li class="divider"> </li>
                            <li><a href="#">sub menu 3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="no-phone"><a class="icon" href="#" data-role="hint" data-hint="Alarm|Meet with Jaka 5 min again" data-hint-background="bg-red"
                    data-hint-color="fg-white">&nbsp;<span class="mif-bell fg-yellow "></span></a></li>
            <li class="no-phone"><a class="icon" href="#" data-role="hint" data-hint="Email|New 5 email coming" data-hint-background="bg-cyan"
                    data-hint-color="fg-white">&nbsp;<span class="mif-mail fg-lime "></span></a></li>
        </ul>


        <ul class="app-bar-menu place-right">
            <li class="bg-black">
                <a href="#" id="rtl-demo">Toggle RTL</a>
            </li>
            <li class="bg-black ">
                <a href="#" class="dropdown-toggle">My Account</a>
                <ul class="d-menu context place-right" data-role="dropdown">
                    <li><a href="{{url('/dashboard/1')}}"><span class="mif-windows icon" ></span> Dashboard</a></li>
                    <li><a href="{{url('/home')}}"><span class="mif-vpn-publ icon" ></span> Front End</a></li>
                    <li class="divider"></li>
                    <li class="">
                        <a href="#" class="dropdown-toggle"><span class="fa fa-flag icon " ></span>Language</a>
                        <ul class="d-menu context drop-left" data-role="dropdown">
                            <li><a href="#" class="active-lang"><span class="mif-checkmark fg-green icon" ></span> English</a></li>
                            <li><a href="#"><span class="icon" ></span> Bahasa Indonesia</a></li>
                        </ul>
                    </li>

                    <li><a href="{{-- route('sentinel.profile.show') --}}"><span class="mif-user icon" ></span> Profile</a></li>
                    <li><a href="#" class="metro-logout" data-confirm="are you sure want to log out?"><span class="mif-exit icon" ></span> Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>


                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>