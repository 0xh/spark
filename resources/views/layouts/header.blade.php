<div class="app-bar fixed-top bg-darker" data-role="appbar">
    <div class="container-top">
        <div class="sidebar-trigger sidebar-sizer mobile-only"><span class="fa fa-gear"></span></div>
        <a href="{{ url('admin/dashboard') }}" class="app-bar-element branding">
             
             {!!config('nav.brand.logo')!!}
             {!!config('nav.brand.title')!!}
        </a>

        <!--<ul class="app-bar-menu ">
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
            
        </ul>-->

         
        <ul class="app-bar-menu place-right">
             @if (Auth::guest())
            <li class="no-phone">
                <a class="icon" href="{{ route('login') }}" data-role="hint" data-hint="Already A Member?" data-hint-background="bg-darkTeal" data-hint-color="fg-white">&nbsp;<span class="mif-enter fg-lime"></span>  Login</a>
            </li>
            <li>
            <a class="icon" href="{{ route('register') }}" data-role="hint" data-hint="Don't Have Any Account Yet?"
                data-hint-background="bg-darkTeal" data-hint-color="fg-white">&nbsp;<span class="mif-user-plus fg-teal "></span>  Register</a>
            </li>
             @else
             <li class="no-phone">
                <!--  when click we should make the notification as read -->
                <a class="icon" href="{{ $notification->action_url }}" data-role="hint" data-hint="{{ $notification->action_text }}|{{ $notification->body }}" 
                    @if($notification->read == 0) 
                    data-hint-background="bg-green" 
                    @else 
                    data-hint-background="bg-amber" 
                    @endif
                    data-hint-color="fg-white">&nbsp;
                    <span class="mif-bell 
                    @if($notification->read == '0')
                    mif-ani-ring mif-ani-fast fg-lightGreen 
                    @else fg-amber 
                    @endif">
                    </span>
                </a>
            </li>
            <li class="bg-darker">
                <a href="#" id="rtl-demo" class="icon">&nbsp; <span class="mif-display fg-taupe"></span></a>
            </li>
            
            <li class="bg-darker ">
                <a href="#" class="dropdown-toggle">
                    <img src="{{ auth()->user()->photo_url }}" alt="{{ auth()->user()->name }}"
                    style="border: 2px solid #d3e0e9;
                    border-radius: 50%;
                    height: 40px;
                    padding: 2px;
                    width: 40px;
                    height: 50px;
                    width: 50px;">
                    {{ auth()->user()->name }}</a>
                <ul class="d-menu context place-right" data-role="dropdown">
                    <li><a href="{{url('/home')}}"><span class="mif-windows icon" ></span> Dashboard</a></li>
                    <li><a href="{{url('/')}}"><span class="mif-home icon" ></span>Front End</a></li>
                    <li class="divider"></li>
                    <li class="">
                        <a href="#" class="dropdown-toggle"><span class="fa fa-users icon " ></span>Teams</a>
                        <ul class="d-menu context drop-left" data-role="dropdown">
                            <li><a href="/settings#/teams" class="active-lang"><span class="mif-user-plus fg-green icon" ></span> Create Team</a></li>
                            <li><a href="#"><span class="icon" ></span> List All Your teams Here</a></li>
                        </ul>
                    </li>

                    <li><a href="/settings#/profile"><span class="mif-user icon" ></span> Profile</a></li>
                    <li><a href="/logout"><span class="mif-exit icon" ></span> Logout</a>
                    </li>
                </ul>
            </li>
            
             @endif
        </ul>
    </div>
</div>