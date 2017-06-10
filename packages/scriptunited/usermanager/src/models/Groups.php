<?php

namespace Scriptunited\Usermanager\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table = 'groups';


    public function getTable()
    {
    	return $this->table;
    }

    public function userGroups()
    {
    	return $this->hasMany('\Scriptunited\Usermanager\Models\UserGroups','group_id','id');
    }

    public function moduleGroups()
    {
    	return $this->hasMany('\Scriptunited\Usermanager\Models\ModuleGroups','group_id','id');
    }



}
