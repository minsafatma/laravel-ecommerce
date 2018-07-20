@extends('admin_layout')
@section('admin_content')



		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Form Elements</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<p class="alert-success">
								<?php

								$message=Session::get('message');


								if ($message){
									echo $message;
									Session::put('message',NULL);
								}
							?>
								
							


								
							</p>
						</div>
						<div class="form-body">
							<form   action="{{ url('/save-category') }}" method="post">
								{{ csrf_field() }}
							 <div class="form-group"> <label for="exampleInput">Category Name</label>
							 <input type="text" class="form-control" id="exampleInput1" name="category_name"> </div> <div class="form-group"> <label for="exampleInput">Category Description</label>
							  <textarea class="form-control" name="category_des"rows="9"></textarea> </div>

                         <div class="form-group"> <label for="exampleInputEmail1">Public status</label>
							 <input type="checkbox"  name="public_status" value="1"> </div>

							   <div> <button type="submit" class="btn btn-default">Add Category</button> 
                         </div> <div> <button type="reset" class=""> Cancel</button></div>
							  </form> 
						</div>
					</div>
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">

@endsection