<div class="top-baner arrows">
     	<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2">
		    <div class="swiper-wrapper">
                        <?php   foreach($f_cruises as $f_cruise ) {?>
                                    <div class="swiper-slide">
                                            <div class="inner-banner style-3">
                                                    <?php echo '<img class="center-image" src="'.base_url().'assets/img/cruises/'.$f_cruise['c_image'].'" alt="">';?>
                                                    <div class="vertical-align">
                                                            <div class="container">
                                                                    <h4 class="color-white">featured cruises</h4>
                                                                    <div class="rate-wrap clearfix">
                                                                         <?php
						          	        if($f_cruise["cruise_rating"]> 0){
                                                                            for($i=0; $i<$f_cruise["cruise_rating"]; $i++){
                                                                                echo '<div class="rate">
                                                                                <span class="fa fa-star color-yellow"></span>
                                                                                </div>';
                                                                            }
                                                                            for($i=5; $i>$f_cruise["cruise_rating"]; $i--){
                                                                                echo '<div class="rate">
                                                                                <span class="fa fa-star"></span>
                                                                                </div>';
                                                                            }
                                                                        }?>
                                            </div>					  			
                                                                    <h2 class="color-white"><?php echo $f_cruise['cruise_name'];?></h2>
                                                                    <h3 class="color-white"><span><?php echo $f_cruise['unit_price'];?> /</span> person</h3>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                               <?php } ?> 	  				  				  	
			</div>
			<div class="pagination pagination-hidden poin-style-1"></div>
		</div>
        <div class="arrow-wrapp arr-s-6">
			<div class="cont-1170">
				<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
				<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
			</div>
		</div>
    </div>




  	<div class="list-wrapper bg-grey-2">
  		<div class="container">
  			<ul class="list-breadcrumb clearfix">
  				<li><a class="color-grey link-dr-blue" href="#">home</a> /</li>
  				<li><a class="color-grey link-dr-blue" href="#">hotels</a> /</li>
  				<li><span class="color-dr-blue">list hotels</span></li>
  			</ul>  		
  			<div class="row">
  				<div class="col-xs-12 col-sm-4 col-md-3">
  					<div class="sidebar bg-white clearfix">
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">search</h4>
							<div class="search-inputs">
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
										<input type="text" placeholder="Where do you want to go?">
									</div>
								</div>							
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check In" class="datepicker">
									</div>					
								</div>
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check Out" class="datepicker">
									</div>					
								</div>
							</div>
							<input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">				
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">categories</h4>
							<ul class="sidebar-category color-3">
								<li class="active">
									<a class="cat-drop" href="#">tours <span class="fr">(68)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>
								</li>
								<li>
									<a class="cat-drop" href="#">hotels <span class="fr">(125)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>									
								</li>
								<li>
									<a class="cat-drop" href="#">cruises <span class="fr">(75)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>									
								</li>
								<li>
									<a class="cat-drop" href="#">flights  <span class="fr">(93)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>									
								</li>								
							</ul>
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">price range</h4>
							<div class="slider-range color-3 clearfix" data-counter="$" data-position="start" data-from="0" data-to="1500" data-min="0" data-max="2000">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="$0">
								<input type="text" class="amount-end" readonly value="$1500">						
							</div>
							<input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">				
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">cruise line</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-5">
									<input class="checkbox-form" id="text-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-1" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Avalon Waterways</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="text-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-2" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Carnival</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="text-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-3" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Crystal Cruise</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="text-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-4" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">The cruise WEB</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="text-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-5" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">MNCS Cruises</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="text-6" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-6" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Cruise Holidays</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="text-7" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-7" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Groove Cruise</span>
									</label>
								</div>																
							</div>											
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">cruise length</h4>
							<div class="slider-range color-3 clearfix" data-counter=" NIGNT" data-position="end" data-from="0" data-to="7" data-min="0" data-max="9">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="0 NIGNT">
								<input type="text" class="amount-end" readonly value="7 NIGNT">						
							</div>
							<input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">				
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">cruise preference</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-5">
									<input class="checkbox-form" id="ref-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="ref-1" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Buffet Restaurant</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="ref-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="ref-2" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Entertainment</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="ref-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="ref-3" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Swimming Pools</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="ref-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="ref-4" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Clubs</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="ref-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="ref-5" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Fitness Center</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="ref-6" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="ref-6" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Live Shows</span>
									</label>
								</div>
								<div class="input-entry color-5">
									<input class="checkbox-form" id="ref-7" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="ref-7" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Duty Free Shops</span>
									</label>
								</div>																
							</div>											
						</div>												
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">Review Score</h4>
							<div class="sidebar-score">
								<div class="input-entry type-2 color-6">
									<input class="checkbox-form" id="score-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-5" >
										<span class="checkbox-text">
											5
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-6">
									<input class="checkbox-form" id="score-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-4" >
										<span class="checkbox-text">
											4
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-6">
									<input class="checkbox-form" id="score-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-3" >
										<span class="checkbox-text">
											3
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-6">
									<input class="checkbox-form" id="score-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-2" >
										<span class="checkbox-text">
											2
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-6">
									<input class="checkbox-form" id="score-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-1" >
										<span class="checkbox-text">
											1
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
							</div>							
						</div>					
  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="list-header clearfix">
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
						  <div class="drop">
							 <b>Sort by price</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
						   </div>
						</div>
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
						  <div class="drop">
							 <b>Sort by ranking</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
						   </div>
						</div>
						<div class="list-view-change">
							<div class="change-grid color-3 fr"><i class="fa fa-th"></i></div>
							<div class="change-list color-3 fr active"><i class="fa fa-bars"></i></div>
							<div class="change-to-label fr color-grey-8">View:</div>
						</div>
					</div>
  					<div class="list-content clearfix">
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_1.jpg" alt="">
						          	 	<div class="price price-s-4">$600</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>ASIA  CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$755</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_1.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_2.jpg" alt="">
						          	 	<div class="price price-s-4">$500</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>AFRICA CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$500</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_2.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_3.jpg" alt="">
						          	 	<div class="price price-s-4">$450</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>alaska CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$450</span> person</div>
										<img class="hotel-right-logo" src=<?php echo base_url(); ?>assets/"img/tour_list/cruise_logo_3.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_4.jpg" alt="">
						          	 	<div class="price price-s-4">$650</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>usa CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_1.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_5.jpg" alt="">
						          	 	<div class="price price-s-4">$670</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>ASIA & AFRICA CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_3.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_6.jpg" alt="">
						          	 	<div class="price price-s-4">$200</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>europe CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_2.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_7.jpg" alt="">
						          	 	<div class="price price-s-4">$400</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>ASIA & AFRICA CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_3.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_8.jpg" alt="">
						          	 	<div class="price price-s-4">$550</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>usa CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_2.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_9.jpg" alt="">
						          	 	<div class="price price-s-4">$600</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>spain CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_1.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_10.jpg" alt="">
						          	 	<div class="price price-s-4">$600</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>italy CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_2.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div> 
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_11.jpg" alt="">
						          	 	<div class="price price-s-4">$700</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>ASIA & AFRICA CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_3.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-9 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/tour_list/cruise_grid_12.jpg" alt="">
						          	 	<div class="price price-s-4">$450</div>	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
									  	 	</div>
											<div class="tour-info fl">
									  	 		<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
									  	 		<span class="font-style-2 color-grey-3">alaska</span>
									  	 	</div>						
										</div>
						          	    <h4><b>china CRUISES</b></h4>
					          	        <div class="rate-wrap list-hidden">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>  
							            <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
							            <div class="buttons-block bg-dr-blue-2">
								            <a href="#" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
								            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
							            </div>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="rate-wrap">
					          	        	<i>485 rewies</i>
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
					                    </div>						             
						            	<div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
										<img class="hotel-right-logo" src="<?php echo base_url(); ?>assets/img/tour_list/cruise_logo_1.jpg" alt="">
						            </div>						            
						        </div>
					        </div> 						
  						</div>   						  						 						   						 						   						 						  						   						 						  						
  					</div>

  					<div class="c_pagination clearfix padd-120">
						<a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev page</a>
						<a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next page</a>
						<ul class="cp_content color-3">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">10</a></li>
						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
