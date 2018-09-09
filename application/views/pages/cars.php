<div class="inner-banner">
  		<img class="center-image" src="<?php echo base_url(); ?>assets/img/cars/<?php echo $options->value;?>" alt="">
	  	<div class="vertical-align">
	  		<div class="container">
	  			<ul class="banner-breadcrumb color-white clearfix">
	  				<li><a class="link-blue-2" href="<?php echo base_url(); ?>">home</a> /</li>
	  				<li><a class="color-blue-2" href="<?php echo base_url(); ?>cars">cars</a></li>
                                </ul>
	  			<h2 class="color-white">all cars for you</h2>
                                <h4 class="color-white">We found: <span><?php echo $num_of_cars; ?></span> car(s)</h4>
	  		</div>
  		</div>
  	</div>

  	<div class="list-wrapper bg-grey-2">
  		<div class="container">
  			<div class="row">
  				<div class="col-xs-12 col-sm-4 col-md-3">
  					<div class="sidebar bg-white clearfix">
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">search</h4>
							<div class="search-inputs">
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
										<input type="text" id="c-model"  placeholder="Preferred car model">
									</div>
								</div>							
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="<?php echo base_url(); ?>assets/img/calendar_icon_grey.png" alt="">
										<input type="text" id="c-colour"  placeholder="Preferred colour">
									</div>					
								</div>
							</div>
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">price range</h4>
                                                        <div class="slider-range color-1 clearfix" data-counter="$" data-position="start" data-from="0" data-to="<?php echo round($avg_price['unit_price']); ?>" data-min="0" data-max="<?php echo $max_price['unit_price']+10; ?>">
								<div class="range range-car"></div>
								<input type="text" class="amount-start" readonly value="$0">
								<input type="text" class="amount-end" readonly value="$1500">						
							</div>
						</div>
											
  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="list-header clearfix">
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort order-drop-car">
						  <div class="drop">
							 <b>Sort by price</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#" class="order-car">Cheapest</a>
									<a href="#" class="order-car">Most Expensive</a>
								</span>
						   </div>
						</div>
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort order-drop-car1">
						  <div class="drop">
							 <b>Sort by ranking</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#"class="order-car1">Least Rated</a>
									<a href="#" class="order-car1">Most Rated</a>
								</span>
						   </div>
						</div>
						<div class="list-view-change">
							<div class="change-grid color-1 fr"><i class="fa fa-th"></i></div>
							<div class="change-list color-1 fr active"><i class="fa fa-bars"></i></div>
							<div class="change-to-label fr color-grey-8">View:</div>
						</div>
					</div>
  					<div class="list-content clearfix" id="car-list1">
                                            <?php foreach ($cars as $car) {?> 
  						<div class="list-item-entry">
					        <div class="hotel-item style-3 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/cars/<?php echo $car['car_image'];?>" alt="">          	 	 
						          	</div>
						          	<div class="title hotel-middle clearfix cell-view">
						          	 	
                                                                    <h4><b><?php echo $car['car_model'];?></b></h4><br>
                                                                    <div class="date list">Colour: <strong><?php echo $car["car_colour"];?></strong></div>
                                                                    <div class="date list">Type: <strong><?php echo $car["car_type"];?></strong></div>
					          	           <div class="rate-wrap">
						          	          <?php
						          	        if($car["rating"] > 0){
                                                                            for($i=0; $i<$car["rating"]; $i++){
                                                                                echo '<div class="rate">
                                                                                <span class="fa fa-star color-yellow"></span>
                                                                                </div>';
                                                                            }
                                                                            for($i=5; $i>$car["rating"]; $i--){
                                                                                echo '<div class="rate">
                                                                                <span class="fa fa-star"></span>
                                                                                </div>';
                                                                            }
                                                                        }?> 
					                       </div> 
							            
						            </div>
						            <div class="title hotel-right clearfix cell-view"> 
						            	<div class="hotel-person color-dark-2">price <span class="color-blue"><?php echo '$'.$car["unit_price"];?></span> day</div>
										<a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
						            </div>
					            </div>
					        </div>  						
  						</div> <?php }?>
  					</div>
                                    
                                            <div class="list-content clearfix"  id="car-list2"></div>
                                            <div class="list-content clearfix"  id="car-list3"></div>
                                            <div class="list-content clearfix"  id="car-list4"></div>
                                            <div class="list-content clearfix"  id="car-list5"></div>
                                            
  					<div class="c_pagination clearfix padd-120">
						<a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fl">prev page</a>
						<a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fr">next page</a>
						<ul class="cp_content color-1">
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
