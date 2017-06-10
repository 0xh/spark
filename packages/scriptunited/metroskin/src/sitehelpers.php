<?php 

namespace scriptunited\metroskin;

use Collective\Html\HtmlFacade as Html;

use Scriptunited\Usermanager\Models\Modules as Modules;
use Scriptunited\Usermanager\Models\ModuleGroups as ModuleGroups;


class sitehelpers {

	/**
	 * render js link html
	 * @param  array  $js array of js
	 * @return string     js link
	 */
	public static function call_js($js = array())
	{
		$htm = '';
		foreach ($js as $key => $value) {
			$htm .= Html::script( asset($value));
		}
		return $htm;
	}

	/**
	 * render css link in html
	 * @param  array  $css array of css
	 * @return stringn      css link
	 */
	public static function call_css($css = array())
	{
		$htm = '';
		foreach ($css as $key => $value) {
			$htm .= Html::style( asset($value) );
		}
		return $htm;
	}

	public static function word_limit($word = '', $limit='15')
	{
		preg_match( '/^([\w]+[\s[:punct:]]+){1,15}/' , $word , $m );
		return $m[0];
	}

	public static function force_redirect($url='/',$code = 302)
	{
		try {
	        \App::abort($code , '', ['Location' => $url]);
	    } catch (\Exception $exception) {
	        // the blade compiler catches exceptions and rethrows them
	        // as ErrorExceptions :(
	        //
	        // also the __toString() magic method cannot throw exceptions
	        // in that case also we need to manually call the exception
	        // handler
	        $previousErrorHandler = set_exception_handler(function () {
	        });
	        restore_error_handler();
	        call_user_func($previousErrorHandler, $exception);
	        die;
	    }
	}

	public static function userCan($access='',$class)
	{
        $request = app('request');

        if(empty($access)) return false;

        $module_controller = basename(get_Class($class));
        $group_member = session('group_member');

        if(empty($group_member)){
            SiteHelpers::force_redirect('/login');
        }

        $module = Modules::where(['module_controller'=>$module_controller])->first();

        $group_ids = [];
        foreach ($group_member as $key => $group_member_item) { 
            $group_ids[] = $group_member_item->group_id;
        }

        $moduleGroups = ModuleGroups::where(['module_id'=>$module->id])->wherein('group_id',$group_ids)->get();

        $access_datas = [];
        foreach ($moduleGroups as $key => $moduleGroup) {
            // if($key=='custom') continue;
            $access_datas = array_merge_recursive($access_datas, json_decode($moduleGroup->access_data,true));
        }

        if(is_array($access_datas['custom']))
            $access_datas['custom'] = explode(',',implode(',',$access_datas['custom']));

        $action_access = [];

        foreach ($access_datas as $key => $access_data) {
            if($key!='custom'){
                $t_access_data = false;
                if(is_array($access_data)){
                    foreach ($access_data as $n => $access_data_item) {
                        $t_access_data = $t_access_data || $access_data_item;
                    }
                }else{
                    $t_access_data = $access_data;
                }
                if($t_access_data){
                    $action_access[] = $key;
                }
            }
        }

        if(!is_array($access_datas['custom'])){
            $access_datas['custom'] = (array) $access_datas['custom'];
        }

        $action_access = array_merge($action_access, $access_datas['custom']);
        array_walk($action_access, function(& $data, $key){
        	$data = strtolower($data);
        });

        if(in_array(strtolower(	$access),$action_access)) {
        	return ['action'=> $action_access, 'access'=>$access,'group_member'=>$group_member,'module_groups'=>$moduleGroups];

        }else{
        	return false;
        }

	}



}


 ?>