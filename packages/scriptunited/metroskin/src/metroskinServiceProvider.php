<?php 


namespace Scriptunited\Metroskin;

use Illuminate\Support\ServiceProvider;

class MetroskinServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      	//
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('scriptunited-metroskin-sitehelper',function(){
            return new sitehelpers();
        });

        $this->app->bind('scriptunited-metroskin-modelhelper',function(){
        	return new modelhelpers();
        });




    }
}





 ?>