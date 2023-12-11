<?php include('include/header.php') ?>
<section class="fleetDriver_main smallfont">
	<div class="flex lg:flex-nowrap flex-wrap xl:gap-10 gap-5">
		<div class="lg:w-2/6 w-full greyBG text-sm">
			<div class="2xl:m-7 m-3">
				<div class="dash_search_box mb-8">
		            <div class="input-group flex sm:flex-nowrap flex-wrap align-items gap-5 justify-end sm:mx-0 mx-5">
		            	<input type="text" class="w-full 2xl:p-4 p-3 search_icon placeholder:text-[#1F1F41] border-r20 largefont"
		                placeholder="Search Here" aria-describedby="basic-addon1">
		            	<button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn modalButton" data-target="#add_driver_fleet_filter" data-toggle="modal"><img
		                    src="images/filter-icon.svg" class="w-1/2"></button>
		            	<button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn modalButton" data-target="#add_driver_fleet_sort_by" data-toggle="modal"><img
		                    src="images/data-frame-icon.svg" class="w-1/2"></button>
		            </div>
		        </div>
		        <a href="driver-configuration.php" class="w-full p-3 mb-8 text-base smallfont darkpurpleColor borderpurple border-r20 flex items-center justify-center"><img src="images/plus_icon.svg" class="mr-3" />Add Driver</a>
		        <div class="lg:h-[600px] overflow-auto w-full h-full pr-1">
		        	<ul class="nav-tabs driver_deetails lg:block flex gap-3">
	                    <li class="navtab_active shrink-0">
	                    	<a class="nav-link relative border-r20 2xl:p-5 pt-8 2xl:pb-8 p-3 mb-5 block bg-white" href="#driver1">
		                    	<label class="bg-green text-white border-r20 rounded-t 2xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[1.25rem] right-[1.25rem] text-sm smallfont font-medium">Unscheduled</label>
		                    	<div class="xl:flex md:block sm:flex items-center justify-between pt-1">
				                    <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
				                        <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center 2xl:text-2xl smallfont font-medium text-white">MR</div>
				                        <div>
				                            <div class="2xl:mb-2 text-xl smallfont font-semibold">Mike Ross</div>
				                            <div class="flex items-center 2xl:gap-3 gap-2">
				                                <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
				                                <span class="text-sm smallfont">3.5 (400)</span>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="mt-4 text-right">
				                        <span class="text-sm smallfont darkpurpleColor block">Truck With Trailer</span>
				                        <span class="text-sm smallfont darkpurpleColor block">Curtainside</span>
			                    	</div>
			                    </div>
			                    <div class="bg-[#FAF6FD99] border-r20 2xl:mt-6 mt-2 2xl:px-5 2xl:py-4 p-2">
			                    	<div class="bg-[url('images/green_location.svg')] bg-left-top bg-no-repeat pl-10 text-sm smallfont">
			                    		<div class="2xl:mb-3 mb-2"><span class="font-semibold">Mithimnis 30,</span> Athina 112 57, Greece</div>
			                    		<div class="lightgreyColor 2xl:mb-3 mb-2">25 Trips completed</div>
			                    		<div class="lightgreyColor">10,000 km on trip</div>
			                    	</div>
			                    </div>
		                    </a>
	                    </li>
	                    <li class="shrink-0">
	                    	<a class="nav-link relative border-r20 2xl:p-5 pt-8 2xl:pb-8 p-3 mb-5 block bg-white" href="#driver2">
		                    	<label class="bg-lemon border-r20 rounded-t 2xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[1.25rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
		                    	<div class="xl:flex md:block sm:flex items-center justify-between pt-1">
				                    <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
				                        <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center 2xl:text-2xl smallfont font-medium text-white">MR</div>
				                        <div>
				                            <div class="2xl:mb-2 text-xl smallfont font-semibold">Mike Ross</div>
				                            <div class="flex items-center 2xl:gap-3 gap-2">
				                                <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
				                                <span class="text-sm smallfont">3.5 (400)</span>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="mt-4 text-right">
				                        <span class="text-sm smallfont darkpurpleColor block">Truck With Trailer</span>
				                        <span class="text-sm smallfont darkpurpleColor block">Curtainside</span>
			                    	</div>
			                    </div>
			                    <div class="bg-[#FAF6FD99] border-r20 2xl:mt-6 mt-2 2xl:px-5 2xl:py-4 p-2">
			                    	<div class="bg-[url('images/green_location.svg')] bg-left-top bg-no-repeat pl-10 text-sm smallfont">
			                    		<div class="2xl:mb-3 mb-2"><span class="font-semibold">Mithimnis 30,</span> Athina 112 57, Greece</div>
			                    		<div class="lightgreyColor 2xl:mb-3 mb-2">25 Trips completed</div>
			                    		<div class="lightgreyColor">10,000 km on trip</div>
			                    	</div>
			                    </div>
		                    </a>
	                    </li>
	                    <li class="shrink-0">
	                    	<a class="nav-link relative border-r20 2xl:p-5 pt-8 2xl:pb-8 p-3 mb-5 block bg-white" href="#driver2">
		                    	<label class="bg-lemon border-r20 rounded-t 2xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[1.25rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
		                    	<div class="xl:flex md:block sm:flex items-center justify-between pt-1">
				                    <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
				                        <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center 2xl:text-2xl smallfont font-medium text-white">MR</div>
				                        <div>
				                            <div class="2xl:mb-2 text-xl smallfont font-semibold">Mike Ross</div>
				                            <div class="flex items-center 2xl:gap-3 gap-2">
				                                <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
				                                <span class="text-sm smallfont">3.5 (400)</span>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="mt-4 text-right">
				                        <span class="text-sm smallfont darkpurpleColor block">Truck With Trailer</span>
				                        <span class="text-sm smallfont darkpurpleColor block">Curtainside</span>
			                    	</div>
			                    </div>
			                    <div class="bg-[#FAF6FD99] border-r20 2xl:mt-6 mt-2 2xl:px-5 2xl:py-4 p-2">
			                    	<div class="bg-[url('images/green_location.svg')] bg-left-top bg-no-repeat pl-10 text-sm smallfont">
			                    		<div class="2xl:mb-3 mb-2"><span class="font-semibold">Mithimnis 30,</span> Athina 112 57, Greece</div>
			                    		<div class="lightgreyColor 2xl:mb-3 mb-2">25 Trips completed</div>
			                    		<div class="lightgreyColor">10,000 km on trip</div>
			                    	</div>
			                    </div>
		                    </a>
	                    </li>
	                </ul>
		        </div>
			</div>
		</div>
		<div class="lg:w-4/6 w-full border-r20 text-base smallfont borderlightGray border-r20 purpleBox-shadow tabView 2xl:mt-10 mt-3">
			<div class="tab-content">
				<div class="tab-pane active" id="driver1">
                	<div class="text-lg largefont font-medium grayBorder px-8 py-4 darkpurpleColor">Driver Details</div>
                	<div class="2xl:p-10 p-5">
                		<div class="sm:flex items-center justify-between xl:mb-10 mb-5">
	                		<a class="flex items-center 2xl:gap-5 gap-3 sm:mb-0 mb-3" href="shipper-ratings.php">
		                        <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
		                        <div>
		                            <div class="mb-2 text-xl smallfont font-semibold">Mike Ross</div>
		                            <div class="flex items-center 2xl:gap-3 gap-2">
		                                <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
		                                <span class="text-sm smallfont">3.5 (400)</span>
		                            </div>
		                        </div>
		                    </a>
		                    <div class="flex items-center gap-5">
		                    	<a class="text-sm smallfont font-medium borderpurple bg-[#F9F5FE] flex items-center justify-center 2xl:p-4 p-3 2xl:w-[200px] w-[150px] gap-2 border-r20" href="fleet-driver-permission.php">
		                    		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 19.998 19.999">
									  <path id="Permission_key" data-name="Permission key" d="M16.32,1.928a6.253,6.253,0,0,0-6.144,7.394l-7.6,7.6v3.75a1.25,1.25,0,0,0,1.25,1.25H5.07v-1.25h2.5v-2.5h2.5v-2.5h2.5l1.622-1.622A6.25,6.25,0,1,0,16.32,1.928ZM18.192,8.18a1.875,1.875,0,1,1,1.875-1.875A1.875,1.875,0,0,1,18.192,8.18Z" transform="translate(-2.57 -1.928)" fill="#9B51E0"/>
									</svg>
									Permissions
		                    	</a>
		                    	<a href="fleet-driver-view-trip.php" class="text-sm smallfont font-medium borderBlue bg-[#F9F5FE] text-center 2xl:p-4 p-3 2xl:w-[200px] w-[150px] border-r20">
		                    		View Trips
		                    	</a>
		                    </div>
	                    </div>
	                    <div class="overflow-y-auto">
	                    	<div class="lg:h-[500px] overflow-y-auto 2xl:mt-8 pr-1">
	                    		<div>
	                    			<label class="block 2xl:px-8 2xl:py-4 p-3  extradarkgreyColor bg-semilightapurple text-lg smallfont font-medium rounded-2xl">Live Operational Information</label>
		                    		<div class="grid sm:grid-cols-2 grid-cols-1 gap-5 2xl:mt-8 mt-3">
		                    			<div>
		                    				<label class="block text-sm smallfont font-medium mb-2">Status Indicator</label>
		                    				<button class="text-start 2xl:p-4 p-3 w-full greenStatusLabel pr-12 border-r20 modalButton" data-target="#change_driver_status" data-toggle="modal">Unscheduled</button>
		                    				<button class="text-start 2xl:p-4 p-3 w-full yellowStatusLabel pr-12 border-r20 hidden">Unassigned</button>
		                    			</div>
		                    			<div>
		                    				<label class="block text-sm smallfont font-medium mb-2">Assigned Vehicle Type</label>
		                    				<button class="text-start 2xl:p-4 p-3 w-full grayBorder darkpurpleColor font-medium border pr-12 border-r20 bg-[url('images/Assigned_Vehicle_Type_pen_icon.svg')] bg-no-repeat 2xl:bg-[center_right_1.5rem] bg-[center_right_1rem] modalButton" data-target="#assign_vehicle_modal" data-toggle="modal">Semi Trailer, Curtainside</button>
		                    			</div>
		                    		</div>
		                    		<div class="mt-6">
		                    			<label class="block text-sm smallfont font-medium mb-2">Current Location</label>
		                    				<div class="text-start 2xl:p-4 p-3 w-full grayBorder darkpurpleColor border pr-12 border-r20 bg-[url('images/location_blue.svg')] 2xl:bg-[center_right_1.5rem] bg-[center_right_1rem] bg-no-repeat">2895, Peloponnese, Western Greece and the Ionian, Argolis Regional Unit</div>
		                    		</div>
	                    		</div>
	                    		<div class="2xl:mt-10 mt-5">
	                    			<label class="block 2xl:px-8 2xl:py-4 p-3  extradarkgreyColor bg-semilightapurple text-lg smallfont font-medium rounded-2xl">Statistics</label>
		                    		<div class="grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-5 2xl:mt-8 mt-3">
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor">80</label>
		                    				<label class="block font-medium text-lg smallfont">Total Trips</label>
		                    			</div>
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor">12</label>
		                    				<label class="block font-medium text-lg smallfont">Trips/week</label>
		                    			</div>
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor flex align-items justify-center gap-2"><img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />4.1</label>
		                    				<label class="block font-medium text-lg smallfont">Last 10 trip Rating</label>
		                    			</div>
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor">90%</label>
		                    				<label class="block font-medium text-lg smallfont">On time Delivery</label>
		                    			</div>
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor">500</label>
		                    				<label class="block font-medium text-lg smallfont">Avg. Kms/trip</label>
		                    			</div>
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor">800 Tons</label>
		                    				<label class="block font-medium text-lg smallfont">Avg. Load/trip</label>
		                    			</div>
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor">10</label>
		                    				<label class="block font-medium text-lg smallfont">Shippers Visited</label>
		                    			</div>
		                    			<div class="bg-semilightapurple borderpurple border-r20 p-5 text-center">
		                    				<label class="block font-bold mb-2 font26 smallfont darkpurpleColor">8</label>
		                    				<label class="block font-medium text-lg smallfont">Trips last 7 days</label>
		                    			</div>
		                    		</div>
	                    		</div>
	                    		<div class="2xl:mt-10 mt-5">
	                    			<form action="">
					                	<div class="bg-semilightapurple rounded-2xl">
					                		<div class="flex items-center justify-between 2xl:px-8 2xl:py-4 p-3">
					                			<div class="text-lg smallfont font-medium change_labelName extradarkgreyColor">Driver Information</div>
				                				<a class="flex items-center darkpurpleColor" href="edit-driver-configuration.php">
					                				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="mr-2">
													  <path id="Edit_icon" data-name="Edit icon" d="M14.2,0H5.813C2.171,0,0,2.17,0,5.81v8.37C0,17.83,2.171,20,5.813,20h8.374C17.829,20,20,17.83,20,14.19V5.81C20.01,2.17,17.839,0,14.2,0Zm.47,9.25-1.621,1.02.14,2.4c.13,1.34-.33,1.8-1.6,1.95l-5.073.6a1.375,1.375,0,0,1-.61-.04L7.884,13.2a.754.754,0,0,0,0-1.06.767.767,0,0,0-1.071,0L4.842,14.12a1.373,1.373,0,0,1-.04-.61l.59-5.07c.16-1.27.62-1.68,1.961-1.6l2.391.14,1.031-1.63a1.316,1.316,0,0,1,2.131-.08l1.851,1.85A1.356,1.356,0,0,1,14.667,9.25Z" fill="#9b51e0"/>
													</svg>
													<span class="text-base smallfont font-medium">Edit Details</span>
				                				</a>
					                		</div>
					                	</div>
					                	<div class="grid xl:grid-cols-2 grid-cols-1 lg:gap-5 gap-3 smallfont 2xl:mt-6 mt-3">
					                		<div>
					                			<label class="text-sm smallfont font-medium">Email ID</label>
					                			<input type="email" placeholder="jhonjeel@gmail.com.in" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
					                		</div>
					                		<div>
					                			<label class="text-sm smallfont font-medium">Phone Number</label>
					                			<input type="number" placeholder="+30 12054 45131" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
					                		</div>
					                	</div>
				                	</form>
	                    		</div>
	                    	</div>
	                    </div>
                	</div>
				</div>
				<div class="tab-pane" id="driver2">
					knjbfhdbfkuwb
				</div>
			</div>
		</div>
	</div>
</section>

<!-- driver status change modal  -->
<div class="modal" id="change_driver_status">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5 font-semibold">Driver Status</div>
            </div>
            <div class="modal-body py-2 text-wcenter tailSelect-design">
                <select class="change_driverStatus">
                     <optgroup label="Select Driver Status">
                     	<option></option>
                        <option>Semi-Trailer</option>
                        <option>Truck With Trailer</option>
                        <option>Truck</option>
                        <option>Van</option>
                     </optgroup>
                </select>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <button class="w-full bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue" type="button">Update Status</button>
            </div>
        </div>
    </div>
</div>

<!-- My fleet fliter modal -->
<div class="modal" id="add_driver_fleet_filter">
    <div class="modal-dialog modal-dialog-lefted smallfont">
        <div class="modal-content">
            <div class="modal-header 2xl:p-7 p-4 grayBorder flex items-center justify-between">
                <div class="text-lg largefont font-semibold darkpurpleColor">Filters</div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-4 text-wcenter md:px-7 px-4 2xl:mb-20 mb-10">
            	<form action="">
            		<div class="w-full text-start select_design">
            			<label class="text-sm smallfont font-medium">By Driver Name</label>
	                	<select class="fleet_driver_name">
                         <optgroup label="Select Driver Name">
                            <option></option>
                            <option>Semi-Trailer</option>
                            <option>Truck With Trailer</option>
                            <option>Truck</option>
                            <option>Van</option>
                         </optgroup>
                    	</select>
            		</div>
            		<div class="w-full text-start mt-5 select_design">
            			<label class="text-sm smallfont font-medium">Status Indicator</label>
	                	<select class="fleet_trip_status">
                         <optgroup label="Select Trip Status">
                            <option></option>
                            <option>Semi-Trailer</option>
                            <option>Truck With Trailer</option>
                            <option>Truck</option>
                            <option>Van</option>
                         </optgroup>
                    	</select>
            		</div>
            		<div class="mt-8 mb-4 text-start">
            			<label class="darkpurpleColor font-medium">Type of Vehicle</label>
            		</div>
            		<div class="grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-3 text-start smallfont">
                		<div class="select_design">
                			<label class="text-sm smallfont font-medium">Vehicle</label>
                			<select class="type_of_vehicle">
	                         <optgroup label="Select Vehicle">
	                            <option></option>
	                            <option>Semi-Trailer</option>
	                            <option>Truck With Trailer</option>
	                            <option>Truck</option>
	                            <option>Van</option>
	                         </optgroup>
	                    	</select>
                		</div>
                		<div class="select_design">
                			<label class="text-sm smallfont font-medium">Cargo</label>
                			<select class="trip_cargo">
	                         <optgroup label="Select Cargo">
	                            <option></option>
	                            <option>Semi-Trailer</option>
	                            <option>Truck With Trailer</option>
	                            <option>Truck</option>
	                            <option>Van</option>
	                         </optgroup>
	                    	</select>
                		</div>
                		<div>
                			<label class="text-sm smallfont font-medium">Current Location</label>
                			<input type="text" placeholder="location" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/gps_location.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" />
                		</div>
                		<div>
                			<label class="text-sm smallfont font-medium">Radius</label>
                			<div class="slide-wrapper">
                                <div class="values">
                                    <div id="range1" class='range-value'>0 kms</div>
                                </div>
                                <div class="slide-container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="300" value="50" id="slider-1" class='range-slider_main'/>
                                </div>
                            </div> 
                		</div>
                	</div>
            	</form>
            </div>
            <div class="modal-footer 2xl:p-6 p-4 grayBox-shadow">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderpurple darkpurpleColor text-center p-2 2xl:py-3 border-r20 close_icon font-medium">Clear All</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- my fleet sort by modal -->
<div class="modal" id="add_driver_fleet_sort_by">
    <div class="modal-dialog modal-dialog-lefted smallfont">
        <div class="modal-content">
            <div class="modal-header 2xl:p-7 p-4 grayBorder flex items-center justify-between">
                <div class="text-lg largefont font-semibold darkpurpleColor">Sort by</div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body 2xl:mb-20 mb-10">
            	<form action="" class="sortingBy_modal">
            		<ul class="sort_by_list 2xl:px-7 p-2">
            			<li><a href="javascript:void(0)" class="grayBorder">Driver Name - A to Z</a></li>
            			<li><a href="javascript:void(0)">Driver Name - Z to A</a></li>
            		</ul>
            		<ul class="sort_by_list 2xl:px-7 p-2">
            			<li><a href="javascript:void(0)" class="grayBorder">Driver Rating - Low</a></li>
            			<li><a href="javascript:void(0)">Driver Rating - High</a></li>
            		</ul>
            		<ul class="sort_by_list 2xl:px-7 p-2">
            			<li><a href="javascript:void(0)" class="grayBorder">Number Of Trips Completed - Ascending</a></li>
            			<li><a href="javascript:void(0)">Number Of Trips Completed - Descending</a></li>
            		</ul>
            		<ul class="sort_by_list 2xl:px-7 p-2">
            			<li><a href="javascript:void(0)" class="grayBorder">Vehicle Assigned - A to Z</a></li>
            			<li><a href="javascript:void(0)">Vehicle Assigned - Z to A</a></li>
            		</ul>
            		<ul class="sort_by_list 2xl:px-7 p-2">
            			<li><a href="javascript:void(0)" class="grayBorder">Current Location City - A to Z</a></li>
            			<li><a href="javascript:void(0)">Current Location City - Z to A</a></li>
            		</ul>
            	</form>
            </div>
            <div class="modal-footer 2xl:p-6 p-4 grayBox-shadow">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderpurple darkpurpleColor text-center p-2 2xl:py-3 border-r20 close_icon font-medium" type="button">Clear</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue" type="button">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php') ?>