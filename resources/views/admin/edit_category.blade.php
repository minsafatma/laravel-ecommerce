@extends('admin_layout')
@section('admin_content')



		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Update Category</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
					
						</div>
						<div class="form-body">
							<form   action="{{ url('/update-category',$category_info->category_id) }}" method="post">
								{{ csrf_field() }}
							 <div class="form-group"> <label for="exampleInput">Category Name</label>
							 <input type="text" class="form-control" id="exampleInput1" name="category_name" value="{{$category_info->category_name}}"> </div> <div class="form-group"> <label for="exampleInput">Category Description</label>
							  <textarea class="form-control" name="category_des"rows="9">
							  	{{$category_info->category_des}}
							  </textarea> </div>

               
							   <div> <button type="submit" class="btn btn-default">update Category</button> 
                         </div> 
							  </form> 
						</div>
					</div>
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">

@endsection