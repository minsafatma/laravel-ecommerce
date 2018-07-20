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
								  
								  <th>Manufacture ID</th>
								  <th>Manufacture Name</th>
								  <th>Manufacture Description</th>
								  <th>Status</th>
								  <th>Actions</th>
								</tr>
							</thead>
                           @foreach($all_manufacture_info as $v_manufacture )


							<tbody>
								
								<tr>
								  <th scope="row">{{  $v_manufacture->manufac_id  }}</th>
								  <td>{{ $v_manufacture->manufac_name}}</td>
								  <td>{{ $v_manufacture->manufac_des}}</td>
								  
								  <td>
                                    @if($v_manufacture->public_status==1)
								  	<span class="label label-success"> Active</span>

                                   @else
                                       	<span class="label label-warning">Unactive</span>

                                   @endif
								  </td>
								  <td>
								  	@if($v_manufacture->public_status==1)
								  	<a class="btn btn-danger"  href="{{URL::to('/unactive_manufacture/'.$v_manufacture->manufac_id)}}">
								  		<i class="fa fa-thumbs-down"></i>
								  	</a>
								  	@else
                                       <a class="btn btn-success"  href="{{URL::to('/active_manufacture/'.$v_manufacture->manufac_id)}}">
								  		<i class="fa fa-thumbs-up"></i>
								  	</a>
								  	@endif
								  	<a class="btn btn-primary"  href="{{URL::to('/edit-manufacture/'.$v_manufacture->manufac_id)}}">
								  		<i class="fa fa-edit"></i>
								  	</a>
								  	<a class="btn btn-danger"  href="{{URL::to('/delete-manufacture/'.$v_manufacture->manufac_id)}}">
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


