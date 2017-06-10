<?php 


namespace Scriptunited\Usermanager;

use Illuminate\Support\ServiceProvider;

class UsermanagerServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      	
        //  load routes
        include __DIR__ . '/routes/route.php';


        $this->loadViewsFrom(__DIR__.'/views', 'usersentinel');

        $this->publishes([
            __DIR__ . '/config/metrouser.php' => config_path('metrouser.php'),
        ]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}




 ?>