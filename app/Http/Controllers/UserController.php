<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->data = array(
            'appcolor' => 'bg-darkTeal',
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function getForm($id=login1)
    {

        if(in_array($id,array('login2','signup2'))){
            $this->data['appcolor'] = '';
            $dir = scandir(base_path('public/images/lock/landscape'));
            foreach ($dir as $key => $value) {
                if(preg_match('/^\.+$/',$value)) {unset($dir[$key]);continue;}
                $tdir[] = $dir[$key];
            }
            $this->data['lock_images'] = $tdir; 
        }

        return view('landing.user.'.$id, $this->data);
    }

}



