<?php

namespace Scriptunited\Usermanager\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    protected $table = 'user_groups';


    public function getTable()
    {
    	return $this->table;
    }


}
