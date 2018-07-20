@extends('admin_layout')
@section('admin_content')



		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Update Manufacture</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
					
						</div>
						<div class="form-body">
							<form   action="{{ url('/update-manufacture',$manufacture_info->manufac_id) }}" method="post">
								{{ csrf_field() }}
							 <div class="form-group"> <label for="exampleInput">Manufacture Name</label>
							 <input type="text" class="form-control" id="exampleInput1" name="manufac_name" value="{{$manufacture_info->manufac_name}}"> </div> <div class="form-group"> <label for="exampleInput">Manufacture Description</label>
							  <textarea class="form-control" name="manufac_des"rows="9">
							  	{{$manufacture_info->manufac_des}}
							  </textarea> </div>

               
							   <div> <button type="submit" class="btn btn-default">update Manufacture</button> 
                         </div> 
							  </form> 
						</div>
					</div>
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">

@endsection