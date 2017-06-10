<?php

namespace Scriptunited\Usermanager\Controllers;

use App\Http\Controllers\Controller as Controller;
use Scriptunited\Usermanager\Models\Modules as Modules;
use Scriptunited\Usermanager\Models\Groups as Groups;
use Scriptunited\Usermanager\Models\ModuleGroups as ModuleGroups;
use Illuminate\Http\Request;

use Scriptunited\Metroskin\Facades\Sitehelper as Sitehelper;
use Scriptunited\Metroskin\Facades\Modelhelper as Modelhelper;


class ModulesController extends Controller
{

    public function __construct(){
      $this->data = array(
        'appcolor' => 'bg-darkTeal',
        'maincolor' => 'bg-white',
      );
    
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 

        $this->data['modules'] = Modules::paginate(20);
        $this->data['modules']->withPath('/modules/table/');

        return view('usersentinel::modules.list', $this->data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Skip
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'module_controller' => 'required|unique:modules|max:80',
            'module_title' => 'required',
            'module_subtitle' => 'required',
        ];

        $this->validateRequest($rules);
/*
        $module = Modules::where(['module_title'=>$request->module_title])->get();

        if(count($module)){
            $data = ['result'=>0,'message'=>'Module Name already registered','module'=>null];
            return json_encode($data);
        }
*/

        $module = new Modules;
        $module->module_controller  = $request->module_controller;
        $module->module_title       = $request->module_title;
        $module->module_subtitle    = $request->module_subtitle;
        $module->module_description = $request->module_description;
        
        try {
            $module->save();
            $data = ['result'=>1, 'message'=>'data saved', 'module' => $module];
        } catch (Exception $e) {
            $data = ['result'=>null, 'message'=>'save fail...', 'module'=> null];
        }

        return json_encode($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function show(Modules $modules)
    {
        // skip
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function edit(Modules $modules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modules $modules)
    {
        $id = $request->id;

        $rules = [
            'module_controller' => 'required|unique:modules|max:80',
            'module_title' => 'required',
            'module_subtitle' => 'required',
        ];

        $this->validateRequest($rules);

/*
        $module_chk = $modules::where([['module_title',$request->module_title],['id','!=',$id]])->get();
        if(count($module_chk)){
            $data = ['result'=>null, 'message' => 'Module name already registered', 'module' => null];
            return response()->json($data);
        }
*/
        $module = $modules::find($id);
        if($module){

            $module->module_controller  = $request->module_controller;
            $module->module_title       = $request->module_title;
            $module->module_subtitle    = $request->module_subtitle;
            $module->module_description = $request->module_description;

            try {
                $module->save();
                $data = ['result'=>1, 'module' => $module];
            } catch (Exception $e) {
                $data = ['result'=>null, 'module'=> null];
            }

            return response()->json($data);

        }

        return '';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modules $modules, $id = '')
    {
        try {
            Modules::destroy($id);
            $data = ['result'=>1, 'message' => 'data delete permanently' ];
        } catch (Exception $e) {
            $data = ['result'=>null, 'message' => 'trouble deleting data.'];
        }
        return response()->json($data);

        // return 'destroy '. $module->id;
    }

    public function postTable()
    {
        $request = app('request');
        $find = ModelHelper::parse_like($request->s);
        $modules = Modules::where($find)->paginate(20);

        $modules->withPath('/modules/table/');
        $this->data['modules'] = $modules;

        return view('usersentinel::modules.table', $this->data);
    }

    public function getTable()
    {
        $request = app('request');
        return $this->postTable($request);
    }

    /**
     * show module data
     * @param  string  $id 
     * @return \illuminate\Http\Response     
     */
    public function getShow($id)
    {
        $this->data['module'] = Modules::findOrFail($id);
        $this->data['_action'] = 'show';
        return view('usersentinel::modules.show',$this->data);
    }


    /**
     * edit module data
     * @param  string  $id 
     * @return \Illuminate\Http\Response     
     */

    public function getEdit($id)
    {
        $this->data['module']    = Modules::findOrFail($id);
        $this->data['_method'] = 'PUT';
        $this->data['_action'] = 'edit';

        return view('usersentinel::modules.edit',$this->data);
    }

    /**
     * Create Module data
     * @return \illuminate\http\response
     */
    public function getCreate()
    {
        $module = new Modules;
        $table = $module->getTable();

        ModelHelper::setAttributes( $module, $table);

        $this->data['module']    = $module;
        $this->data['_method'] = 'POST';
        $this->data['_action'] = 'create';

        return view('usersentinel::modules.edit',$this->data);

    }


    public function getAccess($module_id) 
    {
        
        $groups = Groups::all();
        $module_action = ['global'=>null,'create'=>null,'list'=>null,'update'=>null,'show'=>null,'destroy'=>null,'custom'=>''];

        foreach ($groups as $i => & $group) {
            if($access = moduleGroups::where(['group_id'=> $group->id, 'module_id'=> $module_id ])->first()){
                $group->access_data = array_merge( $module_action, json_decode($access->access_data, true));
            }else{
                $group->access_data = $module_action;
            }
        }

        $this->data['groups'] = $groups;
        $this->data['action'] = 'access';
        $this->data['module'] = Modules::where(['id'=>$module_id])->first();

        return view('usersentinel::modules.group', $this->data );

    }


    public function postAccess()
    {

        $request = app('request');
        
        $access_data = $request->access_data;

        $t_access_data_item = ['global'=>null,'create'=>null,'list'=>null,'update'=>null,'show'=>null,'destroy'=>null,'custom'=>''];

        foreach ($access_data as $key => $access_data_item) {
            $access_data[$key] = array_merge($t_access_data_item, $access_data_item);
        }

        $module_id = $request->id;

        foreach ($access_data as $group_id => $access_data_item) {
            
            $moduleGroup = ModuleGroups::where([
                'module_id' => $module_id,
                'group_id' => $group_id,
            ])->first();

            if(empty($moduleGroup)){
                $moduleGroup = new moduleGroups();
            }

            $moduleGroup->module_id = $module_id;
            $moduleGroup->group_id = $group_id;
            $moduleGroup->access_data = json_encode($access_data_item);

            $moduleGroup->save();

        }

        $data = ['result'=>1, 'message'=>'data saved' , 'access_data' => $access_data ];
        return response()->json($data);
    }

}
