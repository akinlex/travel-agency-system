<div class="inner-banner">
  		<img class="center-image" src="<?php echo base_url(); ?>assets/img/hotels/<?php echo $options->value;?>" alt="">
	  	<div class="vertical-align">
	  		<div class="container">
	  			<ul class="banner-breadcrumb color-white clearfix">
	  				<li><a class="link-blue-2" href="<?php echo base_url(); ?>">home</a> /</li>
	  				<li><a class="color-blue-2" href="<?php echo base_url(); ?>hotel_list">hotels</a></li>
	  			</ul>
	  			<h2 class="color-white">all hotels for you</h2>
	  			<h4 class="color-white">We found: <span><?php echo $num_of_hotels; ?></span> Hotel(s)</h4>
	  		</div>
  		</div>
  	</div>

  	<div class="list-wrapper bg-grey-2">
  		<div class="container">
  			<div class="row">
  				<div class="col-xs-12 col-sm-4 col-md-3">
  					<div class="sidebar bg-white clearfix">
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">search hotels</h4>
							<div class="search-inputs">
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="<?php echo base_url(); ?>assets/img/loc_icon_small_grey.png" alt="">
                                                                                <input type="text" name="loc" placeholder="What city do you prefer?" id="loca" class="filter">
                                                                                </form>
									</div>
								</div>
							</div>				
						</div>
						
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">price range</h4>
							<div class="slider-range color-1 clearfix" data-counter="$" data-position="start" data-from="0" data-to="<?php echo round($avg_price['unit_price']); ?>" data-min="0" data-max="<?php echo $max_price['unit_price']+10; ?>">
								<div class="range range-hotel"></div>
								<input type="text" class="amount-start" readonly  id="sp">
								<input type="text" class="amount-end" readonly id="cp">						
							</div>				
						</div>
									
  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="list-header clearfix">
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort order-drop">
						  <div class="drop">
							 <b>Sort by price</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
                                                                    <a href="#" class="order">Cheapest</a>
									<a href="#" class="order">Most Expensive</a>
								</span>
						   </div>
						</div>
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort order-drop1">
						  <div class="drop">
							 <b>Sort by rating</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#" class="order1">Least Rated</a>
									<a href="#" class="order1">Most Rated</a>
								</span>
						   </div>
						</div>
						<div class="list-view-change">
							<div class="change-grid color-1 fr active"><i class="fa fa-th"></i></div>
							<div class="change-list color-1 fr"><i class="fa fa-bars"></i></div>
							<div class="change-to-label fr color-grey-8">View:</div>
						</div>
					</div>
  					<div class="grid-content clearfix"  id="clear-list1">
                                            <?php foreach ($hotels as $hotel) {?>  
  						<div class="list-item-entry">
					        <div class="hotel-item style-3 bg-white" ><a href="#">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="<?php echo base_url(); ?>assets/img/hotels/<?php echo $hotel['h_image'];?>" alt="">          	 	 
						          	</div>
						          	<div class="title hotel-middle clearfix cell-view">
						          	    <h4><b><?php echo $hotel['hname'];?></b></h4>
					          	           <div class="rate-wrap">
                                                                    <?php
						          	        if($hotel["h_class"] > 0){
                                                                            for($i=0; $i<$hotel["h_class"]; $i++){
                                                                                echo '<div class="rate">
                                                                                <span class="fa fa-star color-yellow"></span>
                                                                                </div>';
                                                                            }
                                                                            for($i=5; $i>$hotel["h_class"]; $i--){
                                                                                echo '<div class="rate">
                                                                                <span class="fa fa-star"></span>
                                                                                </div>';
                                                                            }
                                                                        }?> 
					                       </div> 
							            <p class="f-14">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
						            </div>
						            <div class="title hotel-right clearfix cell-view"> 
						            	<div class="hotel-person color-dark-2">from <span class="color-blue"><?php echo '$'.$hotel["unit_price"];?></span> /Night</div>
										</a>
						            </div>
					            </div>
					        </div>  						
                                            </div> <?php }?>
                                        </div>
                                    <div class="grid-content clearfix"  id="clear-list2"></div>
                                    <div class="grid-content clearfix"  id="clear-list3"></div>
                                    <div class="grid-content clearfix"  id="clear-list4"></div>
                                    <div class="grid-content clearfix"  id="clear-list5"></div>

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
