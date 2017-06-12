<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->data = array(
		'appcolor' => 'bg-darkTeal',
	  );

        // $this->middleware('subscribed');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show()
    {
        $this->data['js'] = array(
			'flot'         => 'metro/plugins/flot/jquery.flot.js',
			'flot-tooltip' => 'metro/plugins/flot/jquery.flot.tooltip.min.js',
			'flot-spline'  => 'metro/plugins/flot/jquery.flot.spline.js',
			'flot-resize'  => 'metro/plugins/flot/jquery.flot.resize.js',
			'flot-pie'     => 'metro/plugins/flot/jquery.flot.pie.js',
			'flot-symbol'  => 'metro/plugins/flot/jquery.flot.symbol.js',
			'flot-time'    => 'metro/plugins/flot/jquery.flot.time.js',
			'summernote'   => 'metro/plugins/summernote/summernote-metro.js',
			'sparkline'    => 'metro/plugins/sparkline/jquery.sparkline.js',
			'chartjs'      => 'metro/plugins/chartjs/Chart.js',
			'peity'        => 'metro/plugins/peity/jquery.peity.js',
		);

		$this->data['css'] = array(
			'summernote'     => 'metro/plugins/summernote/summernote.css' , 
			'summernote-bs3' => 'metro/plugins/summernote/summernote-metro.css' , 
		);
		
        return view('admin.dashboard.1',$this->data);
    }
}
