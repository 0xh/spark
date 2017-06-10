<?php

namespace Scriptunited\Usermanager\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';


    public function getTable()
    {
    	return $this->table;
    }

    public function userGroups()
    {
		return $this->hasMany( 'Scriptunited\Usermanager\Models\UserGroups' , 'user_id', 'id' );
    }

}
