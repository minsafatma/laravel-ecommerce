@extends('admin_layout')
@section('admin_content')

	<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<p class="alert-success">
								<?php

								$message=Session::get('message');


								if ($message){
									echo $message;
									Session::put('message',NULL);
								}
							?>	
							</p>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
						<table class="table">
							<thead>
								<tr>
								  
								  <th>Category ID</th>
								  <th>Category Name</th>
								  <th>Category Description</th>
								  <th>Status</th>
								  <th>Actions</th>
								</tr>
							</thead>
                           @foreach($all_category_info as $v_category )


							<tbody>
								
								<tr>
								  <th scope="row">{{  $v_category->category_id  }}</th>
								  <td>{{ $v_category->category_name}}</td>
								  <td>{{ $v_category->category_des}}</td>
								  
								  <td>
                                    @if($v_category->public_status==1)
								  	<span class="label label-success"> Active</span>

                                   @else
                                       	<span class="label label-warning">Unactive</span>

                                   @endif
								  </td>
								  <td>
								  	@if($v_category->public_status==1)
								  	<a class="btn btn-danger"  href="{{URL::to('/unactive_category/'.$v_category->category_id)}}">
								  		<i class="fa fa-thumbs-down"></i>
								  	</a>
								  	@else
                                       <a class="btn btn-success"  href="{{URL::to('/active_category/'.$v_category->category_id)}}">
								  		<i class="fa fa-thumbs-up"></i>
								  	</a>
								  	@endif
								  	<a class="btn btn-primary"  href="{{URL::to('/edit-category/'.$v_category->category_id)}}">
								  		<i class="fa fa-edit"></i>
								  	</a>
								  	<a class="btn btn-danger"  href="{{URL::to('/delete-category/'.$v_category->category_id)}}">
								  		<i class="fa fa-trash"></i>
								  	</a >
								  </td>

								</tr>
								
							</tbody>
							@endforeach
						</table>
					</div>
					
				</div>
					
				</div>
			</div>
		</div>


@endsection


