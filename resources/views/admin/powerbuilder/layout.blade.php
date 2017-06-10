@extends('layouts.metro')

@section('content')

<section class="section-wrapper padding10">
	<br>
	<div class="panel widget-box ">
		<div class="heading">
			<div class="title">Visual Layout Builder</div>
		</div>
		<div class="content">
			<div class="text" >
				
				<div class="fluent-menu" data-role="fluentmenu">
					<ul class="tabs-holder">
						<li class="active"><a href="#create">Create</a></li>
						<li><a href="#template">Layout Template</a></li>
						<li><a href="#panel">Panel</a></li>
						<li><a href="#cell">Cell</a></li>
						<li><a href="#code">Code</a></li>
					</ul>

					<div class="tabs-content">
						
						<div class="tab-panel" id="create">
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-big-button" id="add_row">
										<span class="icon fa fa-plus-circle"></span>
										<span>Add Row</span>
									</button>
									<button class="fluent-big-button" id="min_row">
										<span class="icon fa fa-times-circle"></span>
										<span>Remove<br>Row</span>
									</button>
								</div>
								<div class="tab-group-caption">Rows</div>
							</div>
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-big-button" id="add_col">
										<span class="icon fa fa-sign-in"></span>
										<span>Add<br>Column</span>
									</button>
									<button class="fluent-big-button" id="min_col">
										<span class="icon fa fa-sign-out"></span>
										<span>Remove<br>Column</span>
									</button>
									<button class="fluent-big-button" id="reset_col">
										<span class="icon fa fa-desktop"></span>
										<span>Reset<br>Column</span>
									</button>
								</div>
								<div class="tab-group-caption">Columns</div>
							</div>

						</div>

						<!-- templat -->
						<div class="tab-panel" id="template">
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-big-button btn-layout" data-row="cells3" data-cell="div.cell{-- cell content --}" data-repeat=3 >
										<span class="icon fa fa-desktop"></span>
										<span>1*3</span>
									</button>
									<button class="fluent-big-button btn-layout" data-row="cells3" data-cell="div.cell{-- cell content --}+div.cell.colspan2{-- cell content }" >
										<span class="icon fa fa-desktop"></span>
										<span>1:2</span>
									</button>
									<button class="fluent-big-button btn-layout" data-row="cells3" data-cell="div.cell.colspan2{-- cell content --}+div.cell{-- cell content }" >
										<span class="icon fa fa-desktop"></span>
										<span>2:1</span>
									</button>
								</div>
								<div class="tab-group-caption">3 columns</div>
							</div>
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-big-button btn-layout" data-row="cells4" data-cell="div.cell{-- cell content --}" data-repeat=4 >
										<span class="icon fa fa-desktop"></span>
										<span>1*4</span>
									</button>
									<button class="fluent-big-button btn-layout" data-row="cells4" data-cell="div.cell{-- cell content --}+div.cell.colspan3{-- cell content }" >
										<span class="icon fa fa-desktop"></span>
										<span>1:3</span>
									</button>
									<button class="fluent-big-button btn-layout" data-row="cells4" data-cell="div.cell.colspan3{-- cell content --}+div.cell{-- cell content }" >
										<span class="icon fa fa-desktop"></span>
										<span>3:1</span>
									</button>
									<button class="fluent-big-button btn-layout" data-row="cells4" data-cell="div.cell{-- cell content --}+div.cell.colspan2{-- cell content --}+div.cell{-- cell content }" >
										<span class="icon fa fa-desktop"></span>
										<span>1:2:1</span>
									</button>
								</div>
								<div class="tab-group-caption">4 columns</div>
							</div>

							<!-- .row & .cell class property -->
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<div class="tab-content-segment sub-class">
										<div class="dropdown-wrap">
											<button class="fluent-button keep dropdown-toggle" >
												<span class="icon fa fa-bars "></span>
												<span>Row Class</span>
											</button>
											<div class="d-menu padding10 " data-role="dropdown-keep">
												<div class="input-control full-size text" data-role="input">
													<input type="text" id="row_class">
													<button class="button"><span class="fa fa-check"></span></button>
												</div>
											</div>
										</div>
										<div class="dropdown-wrap">
											<button class="fluent-button keep dropdown-toggle" >
												<span class="icon fa fa-th "></span>
												<span>Cell Class</span>
											</button>
											<div class="d-menu padding10" data-role="dropdown-keep">
												<div class="input-control full-size text" data-role="input">
													<input type="text" id="cell_class">
													<button class="button"><span class="fa fa-check"></span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-group-caption">Class</div>
							</div>
						</div>
						
						<!-- panel -->
						<div class="tab-panel" id="panel">
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-button" id="is_panel">
										<span class="icon fa fa-list-alt"></span>
										<span>Apply Panel</span>
									</button>
									<button class="fluent-button" id="is_collapse">
										<span class="icon fa fa-toggle-up"></span>
										<span>Collapsible</span>
									</button>
								</div>
								<div class="tab-group-caption">Panel</div>
							</div>

							<div class="tab-panel-group">
								<div class="tab-group-content">
									<div class="fluent-button">
										<div class="input-control text">
											<input type="text" id="panel_title">
										</div>
									</div>

									<div class="tab-content-segment">
										<button class="fluent-button dropdown-toggle" >
											<span class="icon fa fa-paint-brush "></span>
											<span>Title Background Color</span>
										</button>
										<ul id="panel_title_bg" class="d-menu" data-role="dropdown">
											<li></li>
										</ul>
									</div>

								</div>
								<div class="tab-group-caption">Title</div>

							</div>
							
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<div class="fluent-button">
										<div class="input-control textarea">
											<textarea id="panel_content" ></textarea>
										</div>
									</div>

								</div>
								<div class="tab-group-caption">Content</div>

							</div>

						</div>
						
						<!-- cell -->
						<div class="tab-panel" id="cell">

							<div class="tab-panel-group">
								<div class="tab-group-content">
									<div class="fluent-button">
										<div class="input-control textarea">
											<textarea id="cell_content" ></textarea>
										</div>
									</div>

								</div>

								<div class="tab-group-caption">Cell Content</div>
							</div>

						</div>
						
						<!-- code -->
						<div class="tab-panel" id="code">
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-big-button" id="show_code">
										<span class="icon fa fa-eye"></span>
										<span>Show / Hide<br/>Code</span>
									</button>
									<button class="fluent-big-button" id="build_code">
										<span class="icon fa fa-cloud-download"></span>
										<span>Build<br/>Code</span>
									</button>
								</div>
								<div class="tab-group-caption">Code</div>
							</div>
							<div class="tab-panel-group">
								<div class="tab-group-content">

									<div class="tab-content-segment">
										<button class="fluent-button" >
											<div class="input-control textarea">
												<textarea name="" id="zen_input" placeholder="try table.table>tr>th{heading}*3"
												></textarea>
											</div>
										</button>
									</div>
									<div class="tab-content-segment">
										<button class="fluent-button" >
											<div class="input-control textarea">
												<textarea name="" id="zen_output" 
												></textarea>
											</div>
										</button>
									</div>

								</div>
								<div class="tab-group-caption">Zen Code Tools</div>
							</div>
						</div>

					</div>
				</div>

				<div id="layout_preview" class="grid bg-grayLight padding10 bg-chess" style="min-height: 250px;">
					
				</div>
				<div class="input-control full-size textarea hide" id="code_build">
					<label>Generated Code</label>
					<textarea name="" id="text_code" cols="30" rows="10"></textarea>
				</div>




			</div>
		</div>
	</div>


</section>
<div class="hide" id="zen_area"></div>


@endsection


@section('javascript')


@endsection


@section('stylesheet')


@endsection


@section('style')

<style>
	
#layout_preview .row {border:5px dashed #ddd;padding:5px;min-height: 1.5rem;background-color: #fff;}	
#layout_preview .cell {border:1px dashed #bbb;padding:10px;min-height: 1.5rem;}
#layout_preview .panel .heading {z-index: 0;}
.fluent-menu .input-control {margin:3px 0;line-height: 1.5rem;height: 1.5rem;}
.fluent-menu .active-button {background-color: #BCDDFA;}
.color-box {border:1px solid #000;width: 1.25rem;height:1rem;float: left;margin:1px;}
#panel_title_bg  {max-width: 500px;width: 500px;}
#panel_title_bg > li {max-width: 500px;width: 500px;}
#panel_content {height:85px;min-height: 85px;width: 300px;}
#cell_content {height:85px;min-height: 85px;width: 700px;}
#zen_input {height: 85px;min-height: 85px;width: 200px;}
#zen_output {height: 85px;min-height: 85px;width: 500px;}
.sub-class .d-menu {width: 15.625rem;}
.dropdown-wrap {position: relative;}
.fluent-menu .input-control.text button.button {height:1.5rem;padding:0.25rem 0.375rem;line-height: 0.8rem; }

</style>


@endsection