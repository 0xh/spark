<?php

namespace Scriptunited\Usermanager\Models;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    protected $table = 'modules';


    public function getTable()
    {
    	return $this->table;
    }

    public function moduleGroups()
    {
		return $this->hasMany( 'Scriptunited\Usermanager\Models\ModuleGroups' , 'module_id', 'id' );
    }

}
