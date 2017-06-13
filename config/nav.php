<?php

return [
    'brand' => [
        'logo' => env('BRAND_LOGO', '<img src="http://logos-download.com/wp-content/uploads/2016/09/Laravel_logo_wordmark_logotype.png" class="logo" style="height: 50px;widht:175px;" >'),
        'title' => env('BRAND_TITLE', 'Evolutly.com')
    ],
    'home' => '#!',
    // Add your Navigation Links Here use Metro Ui CSS , Follow the Format below
    'guest' => [
        'support' => '<li class="bg-darker">
                <a class="icon bg-hover-red" href="#!" data-role="hint" data-hint="Need Help?" data-hint-background="bg-darkTeal"
                    data-hint-color="fg-white">&nbsp;<span class="mif-help fg-orange"></span> Support</a>
            </li>',
        'login' => '<li class="bg-darker">
                <a class="icon bg-hover-red" href="{{ route("login") }}" data-role="hint" data-hint="Already A Member?" data-hint-background="bg-darkTeal"
                    data-hint-color="fg-white">&nbsp;<span class="mif-enter fg-lime"></span>  Login</a>
            </li>',
        'register' => '<li class="bg-darker">
                <a class="icon bg-hover-red" href="{{ route("register") }}" data-role="hint" data-hint="Dont Have Any Account Yet?" data-hint-background="bg-darkTeal"
                    data-hint-color="fg-white">&nbsp;<span class="mif-user-plus fg-teal "></span>  Register</a>
            </li>',
        
    ],
    'auth' => [
        // Add Your Auth User Link Here
    ],
];