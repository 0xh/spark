<div class="app-bar fixed-top bg-darker" data-role="appbar">
    <div class="container-top">
        <div class="sidebar-trigger sidebar-sizer mobile-only"><span class="fa fa-menu"></span></div>
        <a href="#!" class="app-bar-element branding bg-hover-red"> 
             {!!config('nav.brand.logo')!!}
             {!!config('nav.brand.title')!!}
        </a>

        <ul class="app-bar-menu place-right">
            @foreach(config('nav.guest') as $link) {!! $link !!} @endforeach
        </ul>
    </div>
</div>