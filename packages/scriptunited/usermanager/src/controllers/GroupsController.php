<?php

namespace Scriptunited\Usermanager\Controllers;

use App\Http\Controllers\Controller as Controller;
use Scriptunited\Usermanager\Models\Groups as Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;

use Scriptunited\Metroskin\Facades\Sitehelper as Sitehelper;
use Scriptunited\Metroskin\Facades\Modelhelper as Modelhelper;


class GroupsController extends Controller
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
        $this->data['groups'] = Groups::paginate(20);
        $this->data['groups']->withPath('/groups/table/');

        return view('usersentinel::groups.list', $this->data);

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
            'group_title' => 'required|unique:groups|max:80',
            'group_description' => 'required|filled',
        ];

        $this->validateRequest($rules);

/*
        $group = Groups::where(['group_title'=>$request->group_title])->get();

        if(count($group)){
            $data = ['result'=>0,'message'=>'Group Name already registered','group'=>null];
            return json_encode($data);
        }
*/
        $group = new Groups;
        $group->group_title       = $request->group_title;
        $group->group_description = $request->group_description;
        
        try {
            $group->save();
            $data = ['result'=>1, 'message'=>'data saved', 'group' => $group];
        } catch (Exception $e) {
            $data = ['result'=>null, 'message'=>'save fail...', 'group'=> null];
        }

        return json_encode($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function show(Groups $groups)
    {
        // skip
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function edit(Groups $groups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Groups $groups)
    {
        $id = $request->id;

        $rules = [
            'group_title' => 'required|unique:groups|max:80',
            'group_description' => 'required|filled',
        ];

        $this->validateRequest($rules);

/*
        $group_chk = $groups::where([['group_title',$request->group_title],['id','!=',$id]])->get();
        if(count($group_chk)){
            $data = ['result'=>null, 'message' => 'Group name already registered', 'group' => null];
            return response()->json($data);
        }
*/

        $group = $groups::find($id);
        if($group){

            $group->group_title       = $request->group_title;
            $group->group_description = $request->group_description;

            try {
                $group->save();
                $data = ['result'=>1, 'group' => $group];
            } catch (Exception $e) {
                $data = ['result'=>null, 'group'=> null];
            }

            return response()->json($data);

        }

        return '';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groups $groups, $id = '')
    {
        try {
            Groups::destroy($id);
            $data = ['result'=>1, 'message' => 'data delete permanently' ];
        } catch (Exception $e) {
            $data = ['result'=>null, 'message' => 'trouble deleting data.'];
        }
        return response()->json($data);

        // return 'destroy '. $group->id;
    }

    public function postTable()
    {

        $request = app('request');
        $find = ModelHelper::parse_like($request->s);
        $groups = Groups::where($find)->paginate(20);

        $groups->withPath('/groups/table/');
        $this->data['groups'] = $groups;

        return view('usersentinel::groups.table', $this->data);
    }

    public function getTable()
    {
        $request = app('request');
        return $this->postTable($request);
    }

    /**
     * show group data
     * @param  string  $id 
     * @return \illuminate\Http\Response     
     */
    public function getShow($id)
    {
        $this->data['group'] = Groups::findOrFail($id);
        $this->data['_action'] = 'show';
        return view('usersentinel::groups.show',$this->data);
    }

    /**
     * edit group data
     * @param  string  $id 
     * @return \Illuminate\Http\Response     
     */
    public function getEdit($id)
    {
        $this->data['group']    = Groups::findOrFail($id);
        $this->data['_method'] = 'PUT';
        $this->data['_action'] = 'edit';

        return view('usersentinel::groups.edit',$this->data);
    }

    public function getCreate()
    {
        $group = new Groups;
        $table = $group->getTable();

        ModelHelper::setAttributes( $group, $table);

        $this->data['group']    = $group;
        $this->data['_method'] = 'POST';
        $this->data['_action'] = 'create';

        return view('usersentinel::groups.edit',$this->data);

    }



}
