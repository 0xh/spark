<?php

namespace Scriptunited\Usermanager\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleGroups extends Model
{
    protected $table = 'module_groups';


    public function getTable()
    {
    	return $this->table;
    }


}
