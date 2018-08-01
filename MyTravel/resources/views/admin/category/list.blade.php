@extends('layouts.admin')
@section('title','danh mục')
@section('content')
	<div class="scrum-title">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		     <li class="breadcrumb-item"><a href="#">Home</a></li>
    		<li class="breadcrumb-item active" aria-current="page">Category</li>
		  </ol>
		</nav>
	</div>
	<div class="container">
		<div class="category">
			<h3 class="text-center">Loại tour</h3>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-success">
	                    <div class="panel-heading">
	                        DataTables Advanced Tables
	                    </div>
	                    <div class="panel-body">
	                    	<table class="table table-bordered">
								<thead>
									<tr>
										<th>header</th>
										<th>header</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>data</td>
										<td>data</td>
									</tr>
								</tbody>
							</table>
	                    </div>
	                 	</div>
	                </div>
				</div>
		</div>
		<div class="clearfix"></div>
		<div id="pagewrapper">
	        <div class="row ">
	            <div class="col-lg-12">
	                <h1 class="page-header">Tables</h1>
	            </div>
	            <!-- /.col-lg-12 -->
	        </div>
	        <!-- /.row -->
	        <div class="row">
	            <div class="col-lg-12">
	                <div class="panel panel-green">
	                    <div class="panel-heading">
	                        DataTables Advanced Tables
	                    </div>
	                    <!-- /.panel-heading -->
	                    <div class="panel-body">
	                        <div class="dataTable_wrapper">
	                            <table class="table table-bordered table-hover" id="dataTables-example">
	                                <thead>
	                                    <tr>
	                                        <th>Rendering engine</th>
	                                        <th>Browser</th>
	                                        <th>Platform(s)</th>
	                                        <th>Engine version</th>
	                                        <th>CSS grade</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    {{-- <tr class="odd gradeX">
	                                        <td>Trident</td>
	                                        <td>Internet Explorer 4.0</td>
	                                        <td>Win 95+</td>
	                                        <td class="center">4</td>
	                                        <td class="center">X</td>
	                                    </tr>  --}}                        
	                                </tbody>
	                            </table>
	                        </div>     
	                    </div>
	                    <!-- /.panel-body -->
	                </div>
	                <!-- /.panel -->
	            </div>
	            <!-- /.col-lg-12 -->
	        </div>
	    </div>	
   	</div>
@endsection