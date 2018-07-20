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
							<form   action="{{ url('/save-product') }}" method="post" enctype="multiple/from-data">
								{{ csrf_field() }}
							 <div class="form-group"> <label for="exampleInput">Product Name</label>
							 <input type="text" class="form-control" id="exampleInput1" name="pro_name"> </div> <div class="form-group">
									<label class="col-sm-2 control-label">Product Category</label>
									<div class="col-sm-8">

										<select multiple="" class="form-control1" name="category_id">
											<option></option>
														<?php
								$all_published_category=DB::table('tbl_category')
								        ->where('public_status',1)
								        ->get();


                                   foreach ($all_published_category as $v_category) {?>
                                   
											<option>{{$v_category->category_name}}</option>
                                            <?php } ?>
										</select>
										
									</div>
									<div class="form-group">
							<label class="col-sm-2 control-label">Brands Name</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control1" name="manufacture_id">
											<option></option>
												<?php
								$all_published_manufacture=DB::table('tbl_manufacture')
								        ->where('public_status',1)
								        ->get();


                                   foreach ($all_published_manufacture as $v_manufacture) {?>
								<option>{{$v_manufacture->manufac_name}}</option>
											 <?php } ?>
										</select>
									</div>
								</div>
								</div><label for="exampleInput">Product Short Description</label>
							  <textarea class="form-control" name="pro_des"rows="9"></textarea> </div>
							  </div><label for="exampleInput">Product Long Description</label>
							  <textarea class="form-control" name="pro_l_des"rows="9"></textarea> </div>
							  <div class="form-group"> <label for="exampleInput">Product Price</label>
							 <input type="text" class="form-control" id="exampleInput1" name="pro_price"> </div> 
							 <div class="control-group">
									<label for="fileInput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8 controls" >
										<input type="file" class="-input-file uniform_on" id="fileInput" name="pro_img" >
									</div>
									 <div class="form-group"> <label for="exampleInput">Product size</label>
							 <input type="text" class="form-control" id="exampleInput1" name="pro_size"> </div> 
							  <div class="form-group"> <label for="exampleInput">Product Color</label>
							 <input type="text" class="form-control" id="exampleInput1" name="pro_color"> </div> 

                         <div class="form-group"> <label for="exampleInputEmail1">Public status</label>
							 <input type="checkbox"  name="public_status" value="1"> </div>

							   <div> <button type="submit" class="btn btn-default">Add Products</button> 
                         </div> <div> <button type="reset" class=""> Cancel</button></div>
							  </form> 
						</div>
					</div>
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">

@endsection