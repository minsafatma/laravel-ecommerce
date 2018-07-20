@extends('layout')
@section('content')

	
 <div class="container">

		 <div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1">Best seller</a></li>
				<li><a href="#tab2">Popular</a></li>
				<li><a href="#tab3">New Arrivals</a></li>
			</ul>
			<div class="clearfix"> </div>
		 <div class="tab-grids">
		 	<div id="tab1" class="tab-grid1">	
		 	
                <?php
							  foreach ($all_published_product as $v_published_product) {?>
			 		   				  
				 <a href="single.html"><div class="product-grid">					  
						<div class="more-product-info"><span>NEW</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">						   
							<img src='{{asset($v_published_product->pro_img)}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns"><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><<p>{{$v_published_product->pro_name}}</p></a>ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>{{$v_published_product->pro_name}}</h4>
								<span class="item_price">{{$v_published_product->pro_price}}TK</span>

								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>			
					
					 <a href="single.html"><div class="product-grid">
						 <div class="more-product-info"></div>						
						 <div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs2.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						 </div>	</a>					
						 <div class="product-info simpleCart_shelfItem">
							 <div class="product-info-cust">
								<h4>CLUBYORK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							 </div>							 				
							 <div class="clearfix"> </div>
						 </div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs3.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>ROADSTER</h4>
								<span class="item_price">$220.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>												
							<div class="clearfix"> </div>
						</div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs4.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>BLACKFLPS</h4>
								<span class="item_price">$150.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>												
							<div class="clearfix"> </div>
						</div>
					 </div>	
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"><span>NEW</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs5.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>RED CHECKS</h4>
								<span class="item_price">$140.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">		
							</div>														
							<div class="clearfix"> </div>
						</div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs6.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEW LOOK</h4>
								<span class="item_price">$100.00</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>												
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
			 </div>				
				
			 <div id="tab2" class="tab-grid2">
				 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c1.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c2.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$120.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>												
							<div class="clearfix"> </div>
						</div>
					</div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"><span>NEW</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c3.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"><span>NEW</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c4.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>														
							<div class="clearfix"> </div>
						</div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
				<div class="product-img b-link-stripe b-animate-go  thickbox">                  					<img src='{{asset("frontendd/images/c5.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>							
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c6.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$180.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
			 </div>
		 
			 <div id="tab3" class="tab-grid3">
				  <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs3.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>ROADSTER</h4>
								<span class="item_price">$160.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs5.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>RED CHECKS</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c5.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">
							</div>														
							<div class="clearfix"> </div>
						</div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c4.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>MANGO</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>												
							<div class="clearfix"> </div>
						</div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/c3.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>SISLEY</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>												
							<div class="clearfix"> </div>
						</div>
					 </div>
					
					 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src='{{asset("frontendd/images/bs1.jpg")}}' class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>ROADSTER</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>						 						
							<div class="clearfix"> </div>
						</div>
					</div>
				   <div class="clearfix"></div>	

				<?php  } ?>
				   @endsection	