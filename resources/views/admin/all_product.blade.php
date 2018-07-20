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
						<h4>Product Table:</h4>
						<table class="table">
							<thead>
								<tr>
								  
								  <th>product ID</th>
								  <th>product Name</th>
								  <th>product Description</th>
								  <th>product image</th>
								  <th>product price</th>
								  <th>Category Name</th>
								  <th>Manufacture Name</th>
								  <th>Status</th>
								  <th>Actions</th>
								</tr>
							</thead>
                           @foreach($all_product_info as $v_product )


							<tbody>
								
								<tr>
								  <th scope="row">{{  $v_product->product_id  }}</th>
								  <td>{{ $v_product->pro_name}}</td>
								  <td>{{ $v_product->pro_des}}</td>
								  <td><img src="{{URL::to( $v_product->pro_img)}}" style="height: 80px; width: 80px;"></td>
								    <td>{{ $v_product->pro_price}} TK</td>
								      <td>{{ $v_product->category_name}}</td>
								        <td>{{ $v_product->manufac_name}}</td>
								  <td>
                                    @if($v_product->public_status==1)
								  	<span class="label label-success"> Active</span>

                                   @else
                                       	<span class="label label-warning">Unactive</span>

                                   @endif
								  </td>
								  <td>
								  	@if($v_product->public_status==1)
								  	<a class="btn btn-danger"  href="{{URL::to('/unactive_product/'.$v_product->product_id)}}">
								  		<i class="fa fa-thumbs-down"></i>
								  	</a>
								  	@else
                                       <a class="btn btn-success"  href="{{URL::to('/active_product/'.$v_product->product_id)}}">
								  		<i class="fa fa-thumbs-up"></i>
								  	</a>
								  	@endif
								  	<a class="btn btn-primary"  href="{{URL::to('/edit-product/'.$v_product->product_id)}}">
								  		<i class="fa fa-edit"></i>
								  	</a>
								  	<a class="btn btn-danger"  href="{{URL::to('/delete-product/'.$v_product->product_id)}}">
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


