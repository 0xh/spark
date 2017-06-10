<?php 

namespace Scriptunited\Metroskin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

/**
* modelhelper
*/
class Modelhelpers extends Model
{

	public static function getTableColumns($table_name)
	{
		return Schema::getColumnListing($table_name);
	}
	
	public static function getTableColumnsInfo($table_name)
	{
		return DB::select('show columns from ' . $table_name);
	}

	public function setAttributes( & $model, $table_name)
	{
		$columns = $this->getTableColumns($table_name);
		foreach ($columns as $i => $field) {
			$model->$field = null;
		}

		return $model;
	}

	public static function parse_find($search='')
	{
		if(!trim($search)) return [];
		$finds = [];
		$_ss = explode('|', $search);
		$n = count($_ss)/2;
		for($i=0;$i<$n;$i++) {
			$finds[] = [$_ss[$i*2], $_ss[$i*2+1]];
		}
		return $finds;
	}

	public static function parse_like($search='')
	{
		if(!trim($search)) return [];
		$finds = [];
		$_ss = explode('|', $search);
		$n = count($_ss)/2;
		for($i=0;$i<$n;$i++) {
			if(is_numeric($_ss[$i*2+1])){
				$finds[] = [$_ss[$i*2],'=', $_ss[$i*2+1]];
			}else{
				$finds[] = [$_ss[$i*2],'like', '%'.$_ss[$i*2+1].'%' ];
			}
		}
		return $finds;
	}



}



 ?>