
<?php foreach($taglines_desc as $tagline_desc){ $desc = $tagline_desc['value']; }?>
<div class="top-baner swiper-animate arrows">
			<div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
				<div class="swiper-wrapper">
                                    <?php $count=''; foreach($taglines as $tagline){ $count++;?>
					<div class="swiper-slide active" data-val="<?php echo $count; ?>"> 
					  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(<?php echo base_url(); ?>assets/img/home_1/main.jpg)">
						 </div>
					  </div>
						<div class="vertical-align">
						  <div class="container">
							<div class="row">
							  <div class="col-md-12">
								<div class="main-title vert-title">
								  <div class="top-weather-info delay-1">
									<p>London</p>
									  <img src="<?php echo base_url(); ?>assets/img/weather_icon.png" alt="">
										<span>+30&deg;C</span>
								  </div>
								  <h1 class="color-white delay-1">
                                                                  <?php 
                                                                  if (strpos($tagline['value'], '.')) {
                                                                      $res = explode('.', $tagline['value']);
                                                                      echo $res[0];
                                                                  }
                                                                  else{
                                                                      echo $tagline['value']; 
                                                                  }
                                                                  ?><br>
                                                                  <?php if (strpos($tagline['value'], '.')) {echo $res[1];}?></h1>
									<p class="color-white-op delay-2"><?php echo $desc;?></p>
									<a href="#" class="c-button bg-aqua hv-transparent delay-2"><img src="<?php echo base_url(); ?>assets/img/loc_icon.png" alt=""><span>view our tours</span></a>
								 </div>
							   </div>
							  </div>
							</div>
						 </div>
					</div>
					
                                    <?php }?>
				</div>    
				  <div class="pagination pagination-hidden poin-style-1"></div>
			</div>
				  <div class="arrow-wrapp m-200">
					<div class="cont-1170">
						<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
						<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
					</div>
				  </div>
                 
                  <div class="baner-tabs">
                   <div class="text-center">
                     <div class="drop-tabs">
                       <b>hotels</b>	
                        <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
						 <ul class="nav-tabs tpl-tabs tabs-style-1">
							<li class="active click-tabs"><a href="#one" data-toggle="tab" aria-expanded="false">hotels</a></li>
							<li class="click-tabs"><a href="#two" data-toggle="tab" aria-expanded="false">flights</a></li>
							<li class="click-tabs"><a href="#three" data-toggle="tab" aria-expanded="false">cars</a></li>
							<li class="click-tabs"><a href="#four" data-toggle="tab" aria-expanded="false">CRUISES</a></li>
							<li class="click-tabs"><a href="#five" data-toggle="tab" aria-expanded="false">activities</a></li>
						 </ul>
                     </div>
	               </div>
		             <div class="tab-content tpl-tabs-cont section-text t-con-style-1">
						<div class="tab-pane active in" id="one">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 ui-widget">
                           		      <div class="tabs-block">
                                                  <?php //echo form_open('functions/hotel_search');?>
                            		    <h5>Enter Hotel Name</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/loc_icon_small.png" alt="">
                                                 <input type="text" class="keyword" placeholder="Enter a destination or hotel name" name="term">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                    
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Min Price</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>Select Min Price</b>
													<a href="#" class="drop-list miprice"><i class="fa fa-angle-down"></i></a>
														<span>
                                                                                                                        <?php foreach($prices as $price){echo '<a href="#">'.$price.'</a>';}?>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Max Price</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>Select Max Price</b>
													<a href="#" class="drop-list maprice"><i class="fa fa-angle-down"></i></a>
														<span>
															<?php foreach($prices as $price){echo '<a href="#">'.$price.'</a>';}?>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"id="hotel_search"><i class="fa fa-search"></i></a>

                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="two">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or flight name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="three">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or car name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="four">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or cruise name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="five">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or activities name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="<?php echo base_url(); ?>assets/img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
					</div>
			    </div>				  	
	</div> 
       
    <div class="main-wraper padd-90">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="second-title">
    					<h2>The Best Cruises</h2>
    					  <p class="color-grey">We give you the best experience on sea with our premium and luxurious yachts.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row">
                    <?php foreach($cruises as $cruise){?>
    			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    				<div class="radius-mask tour-block hover-aqua">
    				  <div class="clip">
						 <?php echo '<div class="bg bg-bg-chrome act" style="background-image:url(assets/img/cruises/'.$cruise["c_image"].')"></div>';?>
					  </div>
					  <div class="tour-layer delay-1"></div>
					  <div class="tour-caption">
					  	 <div class="vertical-align">
					  	 	<h3 class="hover-it"> 
                                                            <?php echo $cruise["cruise_name"];?>
                                                        </h3>
                                                     <?php echo '<h4>from $<b>'.$cruise["unit_price"].'</b></h4>';?>
					  	 </div>
                                                     <div class="rate-wrap rate-left">
                                                     <?php
                                                            if($cruise["cruise_rating"] > 3){
                                                                for($i=0; $i<$cruise["cruise_rating"]; $i++){
                                                                     echo '<div class="rate">
                                                                            <span class="fa fa-star color-yellow"></span>
                                                                           </div>';
                                                                }
                                                                for($i=5; $i>$cruise["cruise_rating"]; $i--){
                                                                     echo '<div class="rate">
                                                                            <span class="fa fa-star"></span>
                                                                           </div>';
                                                                }
                                                            }?>
                                                         </div>
					  	 	
                                                 
					  	 <div class="vertical-bottom">
					  	   <div class="fl">
					  	 	<div class="tour-info">
					  	 		<img src="assets/img/calendar_icon.png" alt="">
                                                                <?php 
                                                                    $c_std_date= $cruise["avail_date"]; 
                                                                    $c_end_date= $cruise["end_date"]; 
                                                                    $c_std_date = new DateTime($c_std_date);
                                                                    $c_end_date = new DateTime($c_end_date);
                                                                    $c_r1 = $c_std_date->format('Y-m-d'); $c_r2=$c_end_date->format('Y-m-d');
                                                                    ?>
					  	 		  <span class="font-style-2 color-grey-4"><strong class="color-white"> <?php echo date("jS F", strtotime($c_r1)) ?></strong> to <strong class="color-white"> <?php echo date("jS F", strtotime($c_r2)) ?></strong></span>
					  	 	</div>
					  	   </div>	
					  	 	<a href="#" class="c-button b-50 bg-aqua hv-transparent fr"><img src="assets/img/flag_icon.png" alt=""><span>view more</span></a>
					  	 </div>
					  </div>
    				</div>
    			</div>
                        <?php }?>
    		</div>
    	</div>
    </div> 
       
    <div class="main-wraper">
    	  <div class="clip">
              
			 <div class="bg bg-bg-chrome" style="background-image:url(<?php echo base_url(); ?>assets/img/home_1/<?php echo $options->value;?>)">
			 </div>
		  </div>
		  <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1" id="tour-slide">
			 <div class="swiper-wrapper">
                             <?php  foreach($packages as $package){?>
				<div class="swiper-slide">
			      <div class="container">
			      	 <div class="row">
			      	 	<div class="col-md-12">
		      	 	      <div class="slider-tour padd-90-90">
			      	 	    <h3>from $<?php echo $package["package_price"]; //$packages[0]->package_price; object method used?> </h3>
                                            <div class="rate-wrap rate-top">
                                                <div class="rate"><?php 
                                                            $rating=$package["package_rating"];
					  	 	  	if($rating> 0){
                                                                    for($i=0; $i<$rating; $i++){
                                                                         echo '<div class="rate">
                                                                                <span class="fa fa-star color-yellow"></span>
                                                                               </div>';
                                                                    }
                                                                    for($i=5; $i>$rating; $i--){
                                                                         echo '<div class="rate">
                                                                                <span class="fa fa-star"></span>
                                                                               </div>';
                                                                    }
                                                                } ?>
					  	 	  </div>
                                            </div>
							  <h2><?php echo $package["package_name"]; ?></h2> 
							   <h5><?php 
                                                                    $std_date= $package["start_date"]; 
                                                                    $end_date= $package["p_end_date"]; 
                                                                    $std_date = new DateTime($std_date);
                                                                    $end_date = new DateTime($end_date);
                                                                    $r1 = $std_date->format('Y-m-d'); $r2=$end_date->format('Y-m-d');
                                                                    echo "<strong>".date("jS F", strtotime($r1))."</strong>"." to "."<strong>".date("jS F", strtotime($r2))."</strong>";//text representation of date
                                                                ?></h5>
		      	          </div>	
			      	 	</div>
                             </div>
			      </div> 
				</div>
                            <?php }?>
			 </div>
			 <div class="pagination poin-style-1"></div>
		  </div>
    </div>
        
    <div class="main-wraper padd-90">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="second-title">
    					<h2>Most Popular Travel Countries</h2>
    					  <p class="color-grey">A lot of our clients have visited these countries, why not visit?.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row"><?php foreach($countries as $country){?>
    			<div class="col-xs-12 col-md-6 col-md-push-6 col-sm-12">
    				<div class="popular-desc text-left">
    				    <div class="clip">
						    <div class="bg bg-bg-chrome act bg-contain" style="background-image:url(<?php echo base_url(); ?>assets/img/home_1/map_1.png)">
							</div>
					    </div>
    					<div class="vertical-align">
    						<h3><?php echo $country['country_name'];?></h3>
    						  <p class="color-grey"><?php echo $country['country_desc'];?> </p>
    						  
    						<a href="#" class="c-button bg-aqua hv-transparent b-50 custom-icon">
    							<img class="img-hide" src="<?php echo base_url(); ?>assets/img/flag_icon.png" alt="">
    							<img class="img-hov" src="<?php echo base_url(); ?>assets/img/flag_icon_aqua.png" alt="" >
    							<span>view all places</span></a>
    					</div>
    				</div>
    			</div>
    			<div class="col-xs-12 col-md-6 col-md-pull-6 col-sm-12">
    				<div class="row">
    					<div class="col-md-6 col-sm-6 col-xs-12">
    					  <div class="radius-mask popular-img">
    						 <div class="clip">
                                                                <div class="bg bg-bg-chrome act" style="background-image:url(<?php echo base_url(); ?>assets/img/hotels/<?php echo $country['image_loc'];?>)">
								</div>
							 </div>
							 <div class="tour-layer delay-1"></div>
							 <div class="vertical-bottom">
								 <h4><a href="#"><?php echo $country['image_desc'];?></a></h4>
					         </div>
						  </div>
    					</div>
    					<div class="col-md-6 col-sm-6 col-xs-12">
    					  <div class="radius-mask popular-img">
    						 <div class="clip">
								<div class="bg bg-bg-chrome act" style="background-image:url(<?php echo base_url(); ?>assets/img/countries/<?php echo $country['image_loc1'];?>)">
								</div>
							 </div>
							 <div class="tour-layer delay-1"></div>
							 <div class="vertical-bottom">
				                <h4><a href="#"><?php echo $country['image_desc1'];?></a></h4>
					         </div>
						  </div>
    					</div>
    					<div class="col-md-6 col-sm-6 col-xs-12">
    					  <div class="radius-mask popular-img">
    						 <div class="clip">
								<div class="bg bg-bg-chrome act" style="background-image:url(<?php echo base_url(); ?>assets/img/countries/<?php echo $country['image_loc2'];?>)">
								</div>
							 </div>
							 <div class="tour-layer delay-1"></div>
							 <div class="vertical-bottom">
				                <h4><a href="#"><?php echo $country['image_desc2'];?></a></h4>
					         </div>
						  </div>
    					</div>
    					<div class="col-md-6 col-sm-6 col-xs-12">
    					  <div class="radius-mask popular-img">
    						 <div class="clip">
								<div class="bg bg-bg-chrome act" style="background-image:url(<?php echo base_url(); ?>assets/img/countries/<?php echo $country['image_loc3'];?>)">
								</div>
							 </div>
							 <div class="tour-layer delay-1"></div>
							 <div class="vertical-bottom">
				                <h4><a href="#"><?php echo $country['image_desc3'];?></a></h4>
					         </div>
						  </div>
    					</div>
                                </div><br>
    			</div>
                </div><?php } ?>
    		
		</div>
	</div> 
    
    