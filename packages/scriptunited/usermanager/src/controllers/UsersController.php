<?php

namespace Scriptunited\Usermanager\Controllers;

use Illuminate\Support\Facades\App as App;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Mail as Mail;

use Scriptunited\Usermanager\Models\Users as Users;
use Scriptunited\Usermanager\Models\Groups as Groups;
use Scriptunited\Usermanager\Models\UserGroups as UserGroups;
use Illuminate\Http\Request;

use Scriptunited\Metroskin\Facades\Sitehelper as Sitehelper;
use Scriptunited\Metroskin\Facades\Modelhelper as Modelhelper;


class UsersController extends Controller
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
        $this->data['users'] = Users::paginate(20);
        $this->data['users']->withPath('/users/table/');

        return view('usersentinel::users.list', $this->data);

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


        $cfg = app('config')['metrouser'];
        $mail_data = [
            'email' => $request->email,
            'app_name' => $cfg['app_name'],
            'app_url' => $cfg['app_regis_url'],
            'invitor' => $cfg['mail_from_name'],
            'subject' => $request->subject , 
            'mail_from' => $cfg['mail_from'],
        ];

        @Mail::send('usersentinel::users.invite', $mail_data, function ($message) use ($mail_data){
            $message->from( $mail_data['mail_from'] );
            $message->to( $mail_data['email'] );
            $message->subject( $mail_data['subject']);
            $message->priority(3);
        });

        $data = ['result'=>1, 'message'=> 'User invited', 'mail_data'=>$mail_data];

        return response()->json($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        // skip
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        $id = $request->id;

        $v = Validator::make($request->all() , [
            'email' => 'required|unique:email|max:80',
        ]);

        if(count($v->errors()->messages())){
            $data = ['result'=>0, 'message' => 'validation failed', 'fields' => $v->errors()->messages() ];
            return response()->json($data);
        }

        $user = $users::find($id);
        if($user){
            $user->email      = $request->email;
            $user->first_name = $request->first_name;
            $user->last_name  = $request->last_name;

            try {
                $user->save();
                $data = ['result'=>1, 'user' => $user];
            } catch (Exception $e) {
                $data = ['result'=>null, 'user'=> null];
            }

            return response()->json($data);

        }

        return '';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users, $id = '')
    {
        try {
            Users::destroy($id);
            $data = ['result'=>1, 'message' => 'data delete permanently' ];
        } catch (Exception $e) {
            $data = ['result'=>null, 'message' => 'trouble deleting data.'];
        }
        return response()->json($data);

        // return 'destroy '. $user->id;
    }

    public function postTable()
    {

        $request = app('request');
        $find = ModelHelper::parse_like($request->s);
        $users = Users::where($find)->paginate(20);

        $users->withPath('/users/table/');
        $this->data['users'] = $users;

        return view('usersentinel::users.table', $this->data);
    }

    public function getTable()
    {
        $request = app('request');
        return $this->postTable($request);
    }

    /**
     * show user data
     * @param  string  $id 
     * @return \illuminate\Http\Response     
     */
    public function getShow($id)
    {
        $this->data['user'] = Users::find($id);
        $userGroups = Users::find($id)->UserGroups()->get();

        $this->data['userGroups'] = [];
        foreach ($userGroups as $k => $group) {
            $this->data['userGroups'][$k] = Groups::where(['id' => $group->group_id ])->first() ;
        }
        
        $this->data['_action'] = 'show';
        return view('usersentinel::users.show',$this->data);
    }

    /**
     * edit user data
     * @param  string  $id 
     * @return \Illuminate\Http\Response     
     */
    public function getEdit($id)
    {
        $this->data['user']    = Users::findOrFail($id);
        $this->data['_method'] = 'PUT';
        $this->data['_action'] = 'edit';

        return view('usersentinel::users.edit',$this->data);
    }

    public function getCreate()
    {
        $user = new Users;
        $table = $user->getTable();

        ModelHelper::setAttributes( $user, $table);

        $this->data['user']    = $user;
        $this->data['_method'] = 'POST';
        $this->data['_action'] = 'create';
        $this->data['metrouser'] = app('config')['metrouser'];

        return view('usersentinel::users.create',$this->data);

    }

    public function getSetgroup($user_id)
    {
        $groups = Groups::all();
        foreach ($groups as $i => & $group) {
            if(Groups::find($group->id)->userGroups()->first()){
                $group->is_user_assigned = 1;
            }else{
                $group->is_user_assigned = null;
            }
        }

        $this->data['groups'] = $groups;
        $this->data['user'] = Users::find($user_id)->first();

        return view('usersentinel::users.group', $this->data );
    }


    public function postSetgroup()
    {
        $request = app('request');
        $user_id = $request->id;

        Usergroups::where(['user_id'=>$user_id])->delete();
        
        foreach ($request->group_id as $k => $gid) {
            $insert_data[] = ['group_id'=>$gid,'user_id'=>$user_id];
        }

        try {
            Usergroups::insert($insert_data);
            $data = ['result'=>1,'message'=>'Groups Assigned'];
        } catch (Exception $e) {
            $data = ['result'=>0,'message'=>'Groups not assigned'];
        }

        return response()->json($data);

    }


}





