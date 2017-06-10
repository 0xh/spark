<div class="sidebar-wrapper ">
    <ul class="sidebar subdown " id="sidebar-2">

        <li class="headline"><a href="#">
			<span class="fa fa-windows icon " ></span>
			<span class="title" >Admin Metro</span>
			<span class="counter" >Start now!</span>
		</a></li>
        <li class="{{ (Request::segment(2)=='dashboard'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
			<span class="mif-apps icon fg-yellow"></span>
			<span class="title">Dashboard</span>
			<span class="counter">Manage module</span>
		</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='dashboard'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)==1?'active':'') }}"><a href="{{ url('admin/dashboard/1') }}">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Dashboard #1</span>
					<span class="counter">Dashboard model 1</span>
				</a></li>
                <li class="{{ (Request::segment(3)==2?'active':'') }}"><a href="{{ url('admin/dashboard/2') }}">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Dashboard #2</span>
					<span class="counter">Dashboard model 1</span>
				</a></li>
                <li class="{{ (Request::segment(3)==3?'active':'') }}"><a href="{{ url('admin/dashboard/3') }}">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Dashboard #3</span>
					<span class="counter">Dashboard model 1</span>
				</a></li>
                <li class="{{ (Request::segment(3)==4?'active':'') }}"><a href="{{ url('admin/dashboard/4') }}">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Dashboard #4</span>
					<span class="counter">Dashboard model 1</span>
				</a></li>
            </ul>

        </li>
        <li class="{{ (Request::segment(2)=='powerbuilder'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
				<span class="fa fa-bolt icon fg-red"></span>
				<span class="title fg-amber">Power Builder</span>
				<span class="counter">Visual UI Builder</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='powerbuilder'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='layout'?'active':'') }}"><a href="{{ url('admin/powerbuilder/layout')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Layout Builder</span>
					<span class="counter">visual layout builder</span>
				</a> </li>
                <li class="{{ (Request::segment(3)==" form "?'active':'') }}"><a href="{{ url('admin/powerbuilder/form')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Form Builder</span>
					<span class="counter">visual form builder</span>
				</a> </li>
            </ul>
        </li>
        <li class="{{  (in_array(Request::segment(1),['users','groups'])?'active-container':'') }}"><a href="#" class="dropdown-toggle">
				<span class="fa fa-lock icon fg-lime"></span>
				<span class="title ">Metro Guard</span>
				<span class="counter">Based on Laravel 5.4 Auth</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (in_array(Request::segment(1),['users','groups'])?'display:block':'') }}">
                <li class="{{ (Request::segment(1)=='users'?'active':'') }}"><a href="{{ url('users') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Users</span>
					<span class="counter">user management</span>
				</a> </li>
                <li class="{{ (Request::segment(1)=='groups'?'active':'') }}"><a href="{{ url('groups') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Group</span>
					<span class="counter">group management</span>
				</a> </li>
                <li class="{{ (Request::segment(1)=='modules'?'active':'') }}"><a href="{{ url('modules') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Module</span>
					<span class="counter">module management</span>
				</a> </li>
            </ul>
        </li>
        <li class="{{ (Request::segment(2)=='form'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
			<span class="fa fa-tasks icon fg-magenta"></span>
			<span class="title">Form</span>
			<span class="counter">Form Template</span>
		</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='form'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='basic'?'active':'') }}"><a href="{{ url('admin/form/basic')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Basic Form</span>
					<span class="counter">general form example</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='extras'?'active':'') }}"><a href="{{ url('admin/form/extras')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Form Extra</span>
					<span class="counter">3rd party form component</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='xeditable'?'active':'') }}"><a href="{{ url('admin/form/xeditable')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">X Editable</span>
					<span class="counter">Popover editable input</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='wizard'?'active':'') }}"><a href="{{ url('admin/form/wizard')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Wizard</span>
					<span class="counter">jQuery step wizard template</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='editor'?'active':'') }}"><a href="{{ url('admin/form/editor')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Text Editor</span>
					<span class="counter">various text editor</span>
				</a> </li>
            </ul>
        </li>
        <li class="{{ (Request::segment(2)=='uicomponent'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
			<span class="mif-dice icon fg-lightTeal"></span>
			<span class="title">UI Components</span>
			<span class="counter">Visual components</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='uicomponent'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='grid'?'active':'') }}"><a href="{{url('admin/uicomponent/grid')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Grid System</span>
					<span class="counter">Metro Grid system</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='typography'?'active':'') }}"><a href="{{url('admin/uicomponent/typography')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Typography</span>
					<span class="counter">Metro Typography</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='button'?'active':'') }}"><a href="{{url('admin/uicomponent/button')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Button</span>
					<span class="counter">Metro Button</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='images'?'active':'') }}"><a href="{{url('admin/uicomponent/images')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Images</span>
					<span class="counter">Metro Image CSS</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='color'?'active':'') }}"><a href="{{url('admin/uicomponent/color')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Colors</span>
					<span class="counter">Metro Color CSS</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='icon'?'active':'') }}"><a href="{{url('admin/uicomponent/icon')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Icon</span>
					<span class="counter">Metro Icon Fonts</span>
				</a> </li>
            </ul>
        </li>
        <li class="{{ (Request::segment(2)=='uicontrol'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
			<span class="mif-gamepad icon fg-lime"></span>
			<span class="title">UI Control</span>
			<span class="counter">Visual Navigation</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='uicontrol'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='accordion'?'active':'') }}"><a href="{{url('admin/uicontrol/accordion')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Accordion</span>
					<span class="counter">Accordion navigation</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='tab'?'active':'') }}"><a href="{{url('admin/uicontrol/tab')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Tab Control</span>
					<span class="counter">Tab navigation</span>
					</a></li>
                <li class="{{ (Request::segment(3)=='treeview'?'active':'') }}"><a href="{{url('admin/uicontrol/treeview')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Tree View </span>
					<span class="counter">Tree navigation</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='listview'?'active':'') }}"><a href="{{url('admin/uicontrol/listview')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">List View</span>
					<span class="counter">List navigation</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='keypad'?'active':'') }}"><a href="{{url('admin/uicontrol/keypad')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Keypad</span>
					<span class="counter">Security virtual keypad</span>
				</a></li>
            </ul>
        </li>

        <li class="{{ (Request::segment(2)=='visual'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
			<span class="fa fa-camera icon fg-lighterBlue"></span>
			<span class="title">UI Visual</span>
			<span class="counter">Visual Enhancement</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='visual'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='tile'?'active':'') }}"><a href="{{ url('admin/visual/tile') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Tiles</span>
					<span class="counter">Metro tile model</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='carousel'?'active':'') }}"><a href="{{ url('admin/visual/carousel') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Carousel</span>
					<span class="counter">image slide show</span>
					</a></li>
                <li class="{{ (Request::segment(3)=='panel'?'active':'') }}"><a href="{{ url('admin/visual/panel') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Panel</span>
					<span class="counter">widget panel container</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='popover'?'active':'') }}"><a href="{{ url('admin/visual/popover') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Popover</span>
					<span class="counter">Show popover info</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='hints'?'active':'') }}"><a href="{{ url('admin/visual/hints') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Hints</span>
					<span class="counter">Show hints info</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='notify'?'active':'') }}"><a href="{{ url('admin/visual/notify') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Notify</span>
					<span class="counter">notify information/span>
				</a></li>
                <li class="{{ (Request::segment(3)=='slider'?'active':'') }}"><a href="{{ url('admin/visual/slider') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Slider</span>
					<span class="counter">slider input/span>
				</a></li>
                <li class="{{ (Request::segment(3)=='streamer'?'active':'') }}"><a href="{{ url('admin/visual/streamer') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Streamer</span>
					<span class="counter">stream time table</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='presenter'?'active':'') }}"><a href="{{ url('admin/visual/presenter') }}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Presenter</span>
					<span class="counter">animation slide show</span>
				</a></li>
            </ul>
        </li>
        <li class="{{ (Request::segment(2)=='table'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
				<span class="fa fa-table icon fg-lightYellow"></span>
				<span class="title">Data Table</span>
				<span class="counter">Table Grid</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='table'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='basic'?'active':'') }}"><a href="{{url('admin/table/basic')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Simple</span>
					<span class="counter">basic metro table</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='advanced'?'active':'') }}"><a href="{{url('admin/table/advanced')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Advance</span>
					<span class="counter">data table with with metro</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='colreorder'?'active':'') }}"><a href="{{url('admin/table/colreorder')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Column Reorder</span>
					<span class="counter">data table plugins</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='rowreorder'?'active':'') }}"><a href="{{url('admin/table/rowreorder')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Row Reorder</span>
					<span class="counter">data table plugins</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='fixedheader'?'active':'') }}"><a href="{{url('admin/table/fixedheader')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Fixed Header</span>
					<span class="counter">data table plugins</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='keytable'?'active':'') }}"><a href="{{url('admin/table/keytable')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Key Table</span>
					<span class="counter">data table plugins</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='select'?'active':'') }}"><a href="{{url('admin/table/select')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Select</span>
					<span class="counter">data table plugins</span>
				</a></li>
            </ul>
        </li>

        <li class="{{ (Request::segment(2)=='gallery'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
			<span class="mif-images icon fg-pink"></span>
			<span class="title">Gallery</span>
			<span class="counter">More Rich</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='gallery'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='gallery1'?'active':'') }}"><a href="{{ url('admin/gallery/gallery1')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Basic</span>
					<span class="counter">using lightbox</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='gallery2'?'active':'') }}"><a href="{{ url('admin/gallery/gallery2')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Gallery2</span>
					<span class="counter">using js shuffle</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='gallery3'?'active':'') }}"><a href="{{ url('admin/gallery/gallery3')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Gallery3</span>
					<span class="counter">media gallery</span>
				</a> </li>
                <li class="{{ (Request::segment(3)=='gallery4'?'active':'') }}"><a href="{{url('admin/gallery/dropzone')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Dropzone</span>
					<span class="counter">Drag n Drop file upload</span>
					</a></li>
            </ul>
        </li>

        <li class="{{ (Request::segment(2)=='chart'?'active-container':'') }}"><a href="#" class="dropdown-toggle">
				<span class="mif-chart-pie icon fg-lighterBlue"></span>
				<span class="title">Chart</span>
				<span class="counter">Graph &amp; chart</span>
			</a>
            <ul class="d-menu" data-role="dropdown" style="{{ (Request::segment(2)=='chart'?'display:block':'') }}">
                <li class="{{ (Request::segment(3)=='chartjs'?'active':'') }}"><a href="{{url('admin/chart/chartjs')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Chart Js</span>
					<span class="counter">chart js collection</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='flot'?'active':'') }}"><a href="{{url('admin/chart/flot')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Flot Chart</span>
					<span class="counter">flot chart collection</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='morris'?'active':'') }}"><a href="{{url('admin/chart/morris')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Morris Chart</span>
					<span class="counter">morris chart collection</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='peity'?'active':'') }}"><a href="{{url('admin/chart/peity')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Peity Chart</span>
					<span class="counter">piety chart collection</span>
				</a></li>
                <li class="{{ (Request::segment(3)=='sparkline'?'active':'') }}"><a href="{{url('admin/chart/sparkline')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Sparkline Chart</span>
					<span class="counter">sparkline chart collection</span>
				</a></li>
            </ul>
        </li>

        <li class=""><a href="#" class="dropdown-toggle">
				<span class="fa fa-user icon fg-lime"></span>
				<span class="title">User Templet</span>
				<span class="counter">Sign in &amp; Sign Up</span>
			</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="{{url('user/form/login1')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Sign in 1</span>
					<span class="counter">classic login page</span>
				</a></li>
                <li><a href="{{url('user/form/login1')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Sign Up 1</span>
					<span class="counter">classic login page</span>
				</a></li>
                <li><a href="{{url('user/form/login2')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Sign in 2</span>
					<span class="counter">modern login page</span>
				</a></li>
                <li><a href="{{url('user/form/signup1')}}" class="">
					<span class="mif-chevron-right icon"></span>
					<span class="title">Sign Up 2</span>
					<span class="counter">registration page</span>
				</a></li>
            </ul>
        </li>


        <li><a href="#" class="">
			<span class="mif-books icon fg-lightOrange"></span>
			<span class="title">Help</span>
			<span class="counter">Manual Guide</span>
		</a> </li>

        <li><a href="#" class="">
			<span class="mif-info icon fg-lightBlue"></span>
			<span class="title">About</span>
			<span class="counter">Application info</span>
		</a> </li>

        <li>
            <a class="sidebar-sizer">
			<span class="mif-tab icon fg-grayLighter mif-ani-horizontal mif-ani-slow " ></span>
			<span class="title" >Collapse Sidebar</span>
			<span class="counter" >Toggle Small - Wide</span>
			</a>
        </li>

    </ul>
    <div class="margin-bottom-60"></div>
</div>

<div class="sidebar-trigger-float sidebar-sizer" data-role="hint" data-hint="|show sidebar" data-hint-position="top"><span class="mif-tab icon mif-ani-horizontal mif-ani-slow "></span></div>