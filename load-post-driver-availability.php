<?php include('include/header.php') ?>
<section class="driver_load_ava smallfont">
	<div class="2xl:mt-10 mt-5">
		<div class="greyBG 2xl:p-6 p-4 border-r20">
			<div class="borderpurple border-r20">
				<div class="py-4 px-8 purpleBottom">
					<label class="darkpurpleColor text-lg smallfont font-medium">Enter Driver's Availability</label>
				</div>
				<div class="2xl:p-8 p-4">
					<form>
						<div>
							<div class="bg-semilightapurple rounded-2xl 2xl:mb-6 mb-3 flex items-center gap-3 2xl:px-6 2xl:py-4 p-3">
	                			<img src="images/user-icon.svg">
	                			<div class="text-lg smallfont font-medium">Driver Selection</div>
	                		</div>
		                	<div class="w-full mt-5 select_design">
	                            <label class="text-sm smallfont font-medium block mb-2">Select Driver <span class="redColor">*</span></label>
	                            <button class="border grayBorder bg-white block w-full blurColor60 font-medium block text-start rounded-2xl 2xl:px-5 2xl:py-4 p-3 pr-12 bg-[url('images/arrow-down.svg')] bg-no-repeat 2xl:bg-[center_right_1rem] bg-[center_right_0.5rem] modalButton" data-target="#driver-assign-vehicle">
			                		Semi Trailer, Curtainside
			                	</button>
	                        </div>
						</div>
						<div class="2xl:mt-10 mt-5">
	                		<div class="bg-semilightapurple rounded-2xl 2xl:mb-6 mb-3 flex items-center gap-3 2xl:px-6 2xl:py-4 p-3">
	                			<img src="images/load_shipment_time.svg">
	                			<div class="text-lg smallfont font-medium">Timing of Availability</div>
	                		</div>
		                	<div>
		                		<input type="radio" id="schedule_av" name="load_time_av" class="hidden radioCustom_btn" checked/>
	                			<label for="schedule_av" class="font-medium 2xl:mr-10 mr-5 my-1">Schedule Availability</label>
	                			<input type="radio" id="available_time" name="load_time_av" class="hidden radioCustom_btn" />
	                			<label for="available_time" class="font-medium my-1">Available Now</label>
		                	</div>
		                	<div class="grid lg:grid-cols-4 grid-cols-2 items-end lg:gap-5 gap-3 2xl:mt-7 mt-4">
		                		<div class="date_picker relative">
	                                <label class="text-sm smallfont font-medium">Start <span class="redColor">*</span></label>
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/calendar_icon.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Date">
                                        <div class="bg-white border-r20 datePicker_design">
                                            <div class="flex items-center mb-5 justify-between">
                                                <label class="block font-medium darkpurpleColor">Select Date & Time</label>
                                                <a class="close_date cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512" fill="#292d32"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
                                            </div>
                                            <div class="datepicker_custom"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="date_picker relative">
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/time_icon_bg.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Time">
                                        <div class="bg-white border-r20 datePicker_design dateTime_design">
                                            <div class="w-full">
                                                <label class="text-sm smallfont darkpurpleColor block mb-1">Time From</label>
                                                <div class="flex items-center border bg-[#1F1F410F] extradarkgreyColor rounded-2xl p-3 w-full bg-[url('images/time_icon_bg.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat">
                                                	<select class="pl-1 time_design cursor-pointer text-center">
	                                                	<option>01</option>
	                                                	<option>02</option>
	                                                	<option>03</option>
	                                                	<option>04</option>
													</select>
													<p class="fw-bold">:</p>
													<select class="pl-1 time_design cursor-pointer text-center">
	                                                	<option>11</option>
	                                                	<option>12</option>
	                                                	<option>13</option>
	                                                	<option>14</option>
													</select>
                                                </div>
                                            </div>
                                            <button class="close_date w-full bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue mt-5" type="button">Done</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="date_picker relative">
	                                <label class="text-sm smallfont font-medium">End</label>
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/calendar_icon.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Date">
                                        <div class="bg-white border-r20 datePicker_design">
                                            <div class="flex items-center mb-5 justify-between">
                                                <label class="block font-medium darkpurpleColor">Select Date & Time</label>
                                                <a class="close_date cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512" fill="#292d32"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
                                            </div>
                                            <div class="datepicker_custom"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="date_picker relative">
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/time_icon_bg.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Time">
                                        <div class="bg-white border-r20 datePicker_design dateTime_design">
                                            <div class="w-full">
                                                <label class="text-sm smallfont darkpurpleColor block mb-1">Time From</label>
                                                <div class="flex items-center border bg-[#1F1F410F] extradarkgreyColor rounded-2xl p-3 w-full bg-[url('images/time_icon_bg.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat">
                                                	<select class="pl-1 time_design cursor-pointer text-center">
	                                                	<option>01</option>
	                                                	<option>02</option>
	                                                	<option>03</option>
	                                                	<option>04</option>
													</select>
													<p class="fw-bold">:</p>
													<select class="pl-1 time_design cursor-pointer text-center">
	                                                	<option>11</option>
	                                                	<option>12</option>
	                                                	<option>13</option>
	                                                	<option>14</option>
													</select>
                                                </div>
                                            </div>
                                            <button class="close_date w-full bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue mt-5" type="button">Done</button>
                                        </div>
                                    </div>
                                </div>
		                	</div>
						</div>
						<div class="2xl:mt-10 mt-5">
							<div class="bg-semilightapurple rounded-2xl 2xl:mb-6 mb-3 flex items-center gap-3 2xl:px-6 2xl:py-4 p-3">
	                			<img src="images/define-route.svg">
	                			<div class="text-lg smallfont font-medium">Define Route</div>
		                	</div>
		                	<div class="grid lg:grid-cols-4 grid-cols-2 lg:gap-5 gap-3 mt-5">
	                            <div>
	                                <label class="text-sm smallfont font-medium block mb-2">Start Location <span class="redColor">*</span></label>
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
	                            <div>
	                            	<label class="text-sm smallfont font-medium block mb-2">End Location</label>
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
	                        <div class="mt-7">
	                        	<input type="checkbox" name="" class="checkbox_design me-2.5" id="multiple_stop">
	                        	<label for="multiple_stop" class="align-middle mr-10 cursor-pointer">Willing To Do Multiple Stops</label>
	                        	<input type="checkbox" name="" class="checkbox_design me-2.5" id="direct_route">
	                        	<label for="direct_route" class="align-middle cursor-pointer">Direct Route</label>
	                        </div>
						</div>
						<div class="2xl:mt-10 mt-5">
							<div class="bg-semilightapurple rounded-2xl 2xl:mb-6 mb-3 flex items-center gap-3 2xl:px-6 2xl:py-4 p-3">
	                			<img src="images/load_shipment_price.svg">
	                			<div class="text-lg smallfont font-medium">Bid Start Price</div>
		                	</div>
	                		<div>
	                			<input type="number" name="" placeholder="Enter Bid Starting Price" class="w-full border rounded-2xl p-3 bg-white bg-[url('images/bid_price-icon.svg')] ps-10 2xl:bg-[center_left_1.5rem] bg-[center_left_0.75rem] bg-no-repeat">
	                		</div>
		                </div>
		                <div class="2xl:mt-10 mt-5 text-end">
		                	<button class="darkblur_btn font-medium border-r20 2xl:p-4 p-3 2xl:w-1/4 modalButton">Post Availability</button>
		                </div>
					</form>
				</div>
			</div>
		</div>		
	</div>
</section>

<!-- assing driver modal -->
<div class="modal" id="driver-assign-vehicle">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont darkpurpleColor 2xl:pt-6 pt-4 font-medium">Select Driver</div>
            </div>
            <div class="modal-body py-2">
                <div class="max-h-[470px] overflow-y-auto">
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unscheduled</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold me-2.5">John Williams Smith</label>
                                 <label class="text-sm smallfont inline-block py-2 px-3 bg-grey rounded-full mb-1">Freelancer</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unscheduled</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="on_trip_blue border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">On Trip</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                        <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                            <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                            <div>
                                <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                <div class="flex items-center 2xl:gap-3 gap-2">
                                    <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                    <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                </div>
                            </div>
                        </div>
                        <div class="md:mt-6 text-end text-sm smallfont">
                    	    <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unassigned</label>
                            <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Select</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>