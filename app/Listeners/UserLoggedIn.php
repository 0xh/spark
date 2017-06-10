<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

use Scriptunited\Usermanager\Models\Users as Users;
use Scriptunited\Usermanager\Models\Groups as Groups;

class UserLoggedIn
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $login)
    {

        $groups = Users::find($login->user->id)->userGroups()->get();
        $request = app('request');
        $request->session()->put('group_member',$groups);
        
    }
}
