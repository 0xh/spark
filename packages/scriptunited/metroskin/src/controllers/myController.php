<?php

namespace Scriptunited\Metroskin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;
use Illuminate\Support\Facades\Response as Response;

use Scriptunited\Usermanager\Models\Modules as Modules;
use Scriptunited\Usermanager\Models\ModuleGroups as ModuleGroups;

use Scriptunited\Metroskin\Facades\Sitehelper as SiteHelpers;

Trait myController 
{
    
    public function implicitRoute()
    {

        $request = app('request');

    	$path = $request->path();

    	$uri_segments = explode('/',$path);

    	$param_arr = array_slice( $uri_segments , 2 );

    	$_method = $request->method();

    	$app = app();
    	$controller = $app->make(get_class($this));
    	return $controller->callAction($_method.$uri_segments[1], $param_arr);

    }

    public function validateRequest($rules)
    {

        $request = app('request');

        $v = Validator::make($request->all() , $rules );

        if(count($v->errors()->messages())){
            $data = ['result'=>0, 'message' => 'validation failed', 'fields' => $v->errors()->messages() ];
            Response::json($data)->send();
            exit;
        }

    }

    public function userCan( $access='')
    {

        return SiteHelpers::userCan($access,$this);

    }


    public function userCanOrRedirect($access='',$redirect='/') 
    {
        if(! ($userCan = $this->userCan($access))) {
            SiteHelpers::force_redirect($redirect);
        }else{
            return $userCan;
        }
    }

    public function userCanOrJson($access='',$messages='') 
    {
        if(! ($userCan = $this->userCan($access))) {
            $data = ['result'=>0, 'message' => $messages ,"can not" => $access ];
            Response::json($data)->send();
            exit;
        }else{
            return $userCan;
        }
    }

}
