<?php include('include/header.php') ?>
<section class="dashboard_main">
    <div class="mt-8 smallfont text-sm">
        <div class="dash_search_box lg:flex items-center justify-between mb-8">
        	<a class="inline-flex items-center 2xl:gap-5 gap-3" href="shipper-ratings.php">
                <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                <div>
                    <div class="mb-2 text-xl smallfont font-semibold">Mike Ross</div>
                    <div class="flex items-center 2xl:gap-3 gap-2">
                        <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                        <span class="text-sm smallfont">3.5 (400)</span>
                    </div>
                </div>
            </a>
            <div class="xl:w-1/2 lg:w-2/3 input-group flex sm:flex-nowrap flex-wrap align-items gap-5 justify-end sm:mx-0 mx-5 lg:mt-0 mt-5">
            	<div class="align-middle hidden sm:w-auto w-full" id="post_truck_ave">
            		<a href="" class="md:w-[300px] sm:w-[260px] flex items-center justify-center h-full borderpurple darkpurpleColor border-r20 2xl:p-4 p-3 largefont">
            			<img src="images/truck_purple.svg" class="mr-4"><span>Post Driver's Availability</span>
            		</a>
            	</div>
            	<input type="text" class="w-full 2xl:p-4 p-3 search_icon placeholder:text-[#1F1F41] border-r20 largefont"
                placeholder="Search Here" aria-describedby="basic-addon1">
            	<button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn modalButton" data-target="#view_trip_filter" data-toggle="modal"><img
                    src="images/filter-icon.svg" class="w-1/2"></button>
            	<button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn"><img
                    src="images/data-frame-icon.svg" class="w-1/2"></button>
            </div>
        </div>
        <div class="h-[650px] overflow-auto pr-1">
            <div class="px-6 py-4 purpleBorder border-r20 relative my-3">
                <div class="grid grid-cols-12 lg:gap-2 gap-4 items-center">
                    <div class="text-start col-start-1 xl:col-end-5 lg:col-end-4 md:col-end-6 col-span-full">
                        <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                            <label class="text-xl smallfont font-semibold">Abc Company</label>
                            <label class="text-xl smallfont darkpurpleColor break-normal font-semibold">#123456789</label>
                            <label
                                class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                400</label>
                        </div>
                        <div class="mt-4 bg-lightpurple xl:py-4 xl:px-6 p-2 inline-block border-r20">
                            <div class="2xl:flex items-center">
                            	<img src="images/truck.png" class="w-28 mr-3 2xl:mb-0 mb-3" />
                                <div class="flex items-center">
                                	<div class="blurColor60 pe-5">
                                    <label class="block text-base smallfont darkblueColor font-medium">Truck With
                                        Tariler</label>
                                    <label class="block">Curtainside</label>
	                                </div>
	                                <div class="border-l blurColor60 border-[#9A9AA9] truck_bg">
	                                    <label class="block text-base smallfont darkblueColor font-medium">100 Kg</label>
	                                    <label class="block">Total Load</label>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-start xl:col-start-5 lg:col-end-10 lg:col-start-4 md:col-start-6 sm:col-end-13 col-span-full">
                        <div class="">
                            <label class="p-2 blurColor60 total_km_count inline-block">Total
                                <span class="darkblueColor font-medium">200 Km</span></label>
                            <div class="grid sm:grid-cols-2 gap-x-2 items-start mt-5 md:gap-y-3">
                                <div class="about_loca_icon_bg">
                                    <div class="relative stop_before stop_count z-10">
                                        <label
                                            class="text-base smallfont blurColor60 block mb-3 bg-white inline-block pe-1">ABC
                                            INC</label>
                                        <p class="mb-2 w-9/12"><span class="font-semibold">Mithimnis 30,</span>
                                            Athina 112 57, Greece</p>
                                        <label class="about_date_icon me-4">March 17th, 2023</label>
                                        <label class="about_time_icon inline-block mb-2">08:30</label>
                                    	<label class="darkpurpleColor absolute top-[25px] right-[5%] stop_count_label">2 stop</label>
                                    </div>
                                </div>
                                <div class="about_flag_icon_bg">
                                    <div class="">
                                        <label class="text-base smallfont blurColor60 block mb-3">XYZ INC</label>
                                        <p class="mb-2 w-9/12"><span class="font-semibold">Location-B,</span>
                                            Vari - Voula, Regional Unit of East Attica</p>
                                        <label class="about_date_icon me-4">March 17th, 2023</label>
                                        <label class="about_time_icon">18:30</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end lg:col-start-10 lg:col-end-13 sm:col-start-9 sm:col-end-13 col-span-full">
                        <div>
                            <label
                                class="on_trip_blue border-r22 2xl:py-3 2xl:px-5 xl:p-3 p-2 inline-block mb-5 text-base smallfont rounded-e-none -me-6">On Trip</label>
                        </div>
                        <button class="purple_btn 2xl:p-4 lg:p-3 p-2 text-sm smallfont border-r20">View live trip</button>
                        <div class="darkgreyColor mt-4">Posted at 08:30, on June 06th, 2023</div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 purpleBorder border-r20 relative my-3">
                <div class="grid grid-cols-12 lg:gap-2 gap-4 items-center">
                    <div class="text-start col-start-1 xl:col-end-5 lg:col-end-4 md:col-end-6 col-span-full">
                        <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                            <label class="text-xl smallfont font-semibold">Abc Company</label>
                            <label class="text-xl smallfont darkpurpleColor break-normal font-semibold">#123456789</label>
                            <label
                                class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                400</label>
                        </div>
                        <div class="mt-4 bg-lightpurple xl:py-4 xl:px-6 p-2 inline-block border-r20">
                            <div class="2xl:flex items-center">
                            	<img src="images/truck.png" class="w-28 mr-3 2xl:mb-0 mb-3" />
                                <div class="flex items-center">
                                	<div class="blurColor60 pe-5">
                                    <label class="block text-base smallfont darkblueColor font-medium">Truck With
                                        Tariler</label>
                                    <label class="block">Curtainside</label>
	                                </div>
	                                <div class="border-l blurColor60 border-[#9A9AA9] truck_bg">
	                                    <label class="block text-base smallfont darkblueColor font-medium">100 Kg</label>
	                                    <label class="block">Total Load</label>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-start xl:col-start-5 lg:col-end-10 lg:col-start-4 md:col-start-6 sm:col-end-13 col-span-full">
                        <div class="">
                            <label class="p-2 blurColor60 total_km_count inline-block">Total
                                <span class="darkblueColor font-medium">200 Km</span></label>
                            <div class="grid sm:grid-cols-2 gap-x-2 items-start mt-5 md:gap-y-3">
                                <div class="about_loca_icon_bg">
                                    <div class="relative stop_before stop_count z-10">
                                        <label
                                            class="text-base smallfont blurColor60 block mb-3 bg-white inline-block pe-1">ABC
                                            INC</label>
                                        <p class="mb-2 w-9/12"><span class="font-semibold">Mithimnis 30,</span>
                                            Athina 112 57, Greece</p>
                                        <label class="about_date_icon me-4">March 17th, 2023</label>
                                        <label class="about_time_icon inline-block mb-2">08:30</label>
                                    	<label class="darkpurpleColor absolute top-[25px] right-[5%] stop_count_label">2 stop</label>
                                    </div>
                                </div>
                                <div class="about_flag_icon_bg">
                                    <div class="">
                                        <label class="text-base smallfont blurColor60 block mb-3">XYZ INC</label>
                                        <p class="mb-2 w-9/12"><span class="font-semibold">Location-B,</span>
                                            Vari - Voula, Regional Unit of East Attica</p>
                                        <label class="about_date_icon me-4">March 17th, 2023</label>
                                        <label class="about_time_icon">18:30</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end lg:col-start-10 lg:col-end-13 sm:col-start-9 sm:col-end-13 col-span-full">
                        <div>
                        	<label class="px-2 py-1 border-r20 bg-semilightapurple darkpurpleColor mr-5 inline-block text-sm smallfont">1.2 mile Deadhead</label>
                            <label
                                class="ready_trip_blue border-r22 2xl:py-3 2xl:px-5 xl:p-3 p-2 inline-block mb-5 text-base smallfont rounded-e-none -me-6">Ready</label>
                        </div>
                        <button class="purple_btn 2xl:p-4 lg:p-3 p-2 text-sm smallfont border-r20">View live trip</button>
                        <div class="darkgreyColor mt-4">Posted at 08:30, on June 06th, 2023</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- fleet view trip filter pop-up -->
<div class="modal" id="view_trip_filter">
    <div class="modal-dialog modal-dialog-lefted smallfont">
        <div class="modal-content">
            <div class="modal-header 2xl:p-7 p-4 grayBorder flex items-center justify-between">
                <div class="text-lg largefont font-semibold darkpurpleColor">Filters</div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-4 md:px-5 px-4 mb-10">
                <form action="">
                    <div class="h-[600px] overflow-y-auto px-1 datepiker_range">
                        <div class="w-full select_design">
                            <label class="text-sm smallfont font-medium">Shipper Name</label>
                            <select class="shipper_driver_name">
                             <optgroup label="Select Shipper">
                                <option></option>
                                <option>Globex Corporation</option>
                                <option>Soylent Corp</option>
                                <option>Truck</option>
                                <option>Van</option>
                                <option>dsdsdsdsdsdsds</option>
                                <option>sdfgsdfsdfsdfsd</option>
                                <option>dfbfbubg;en</option>
                                <option>fherguerbg</option>
                             </optgroup>
                            </select>
                            <div class="tail-move-container"></div>
                        </div>
                        <div class="w-full mt-5 select_design">
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
                        <div class="w-full mt-5 select_design">
                            <label class="text-sm smallfont font-medium">Load Type</label>
                            <select class="fleet_trip_load">
                             <optgroup label="Select Load Type">
                                <option></option>
                                <option>Semi-Trailer</option>
                                <option>Truck With Trailer</option>
                                <option>Truck</option>
                                <option>Van</option>
                             </optgroup>
                            </select>
                        </div>
                        <div class="w-full mt-5 Trip Length">
                            <label class="text-sm smallfont font-medium">Load Type</label>
                            <div class="mt-2">
                                <input type="radio" id="more-price" name="payment_group" class="hidden radioCustom_btn" checked />
                                <label for="more-price" class="text-sm smallfont extradarkgreyColor font-medium mr-5 my-1"><500 Km</label>
                                <input type="radio" id="less-price" name="payment_group" class="hidden radioCustom_btn" />
                                <label for="less-price" class="text-sm smallfont extradarkgreyColor font-medium mr-5 my-1">>500 Km</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-3 smallfont mt-5">
                            <div class="select_design">
                                <label class="text-sm smallfont font-medium">Type of Vehicle</label>
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
                                <label class="text-sm smallfont font-medium">Type of Cargo</label>
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
                        </div>
                        <div class="w-full mt-5 select_design">
                            <label class="text-sm smallfont font-medium">Product Type</label>
                            <select class="Pro_type">
                             <optgroup label="Select Product Type">
                                <option></option>
                                <option>Semi-Trailer</option>
                             </optgroup>
                            </select>
                        </div>
                        <div class="mt-5 relative">
                            <label class="text-sm smallfont font-medium">Pickup Date & Time</label>
                            <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-3 smallfont">
                                <div class="date_picker">
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/calendar_icon.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Select Date & Time">
                                        <div class="bg-white border-r20 datePicker_design">
                                            <div class="flex items-center mb-5 justify-between">
                                                <label class="block font-medium darkpurpleColor">Select Date & Time</label>
                                                <a class="close_date cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512" fill="#292d32"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
                                            </div>
                                            <div class="datepicker_custom"></div>
                                            <div class="w-full mt-4">
                                                <label class="block text-sm smallfont darkpurpleColor block mb-1">Time From</label>
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
                                <div class="date_picker">
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/calendar_icon.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Select Date & Time">
                                        <div class="bg-white border-r20 datePicker_design">
                                            <div class="flex items-center mb-5 justify-between">
                                                <label class="block font-medium darkpurpleColor">Select Date & Time</label>
                                                <a class="close_date cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512" fill="#292d32"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
                                            </div>
                                            <div class="datepicker_custom"></div>
                                            <div class="w-full mt-4">
                                                <label class="text-sm smallfont darkpurpleColor block mb-1">Time To</label>
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
                        <div class="mt-5 relative">
                            <label class="text-sm smallfont font-medium">Dropoff Date & Time</label>
                            <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-3 smallfont">
                                <div class="date_picker">
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/calendar_icon.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Select Date & Time">
                                        <div class="bg-white border-r20 datePicker_design">
                                            <div class="flex items-center mb-5 justify-between">
                                                <label class="block font-medium darkpurpleColor">Select Date & Time</label>
                                                <a class="close_date cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512" fill="#292d32"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
                                            </div>
                                            <div class="datepicker_custom"></div>
                                            <div class="w-full mt-4">
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
                                <div class="date_picker">
                                    <div class="datepiker_wrapper">
                                        <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/calendar_icon.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Select Date & Time">
                                        <div class="bg-white border-r20 datePicker_design">
                                            <div class="flex items-center mb-5 justify-between">
                                                <label class="block font-medium darkpurpleColor">Select Date & Time</label>
                                                <a class="close_date cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512" fill="#292d32"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
                                            </div>
                                            <div class="datepicker_custom"></div>
                                            <div class="w-full mt-4">
                                                <label class="text-sm smallfont darkpurpleColor block mb-1">Time To</label>
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
                        <div class="w-full mt-5 select_design">
                            <label class="text-sm smallfont font-medium">Type of Trip</label>
                            <select class="type_of_trip">
                             <optgroup label="Select Trip Type">
                                <option></option>
                                <option>Semi-Trailer</option>
                             </optgroup>
                            </select>
                        </div>
                        <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-3 mt-5 smallfont">
                            <div>
                                <label class="text-sm smallfont font-medium">Pickup Location</label>
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
                                <label class="text-sm smallfont font-medium">Dropoff Location</label>
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
                        <div class="w-full mt-5 select_design">
                            <label class="text-sm smallfont font-medium">Deadhead Length</label>
                            <select class="deadhead_length">
                             <optgroup label="Select Deadhead Length">
                                <option></option>
                                <option>Semi-Trailer</option>
                             </optgroup>
                            </select>
                        </div>
                        <div class="w-full mt-5 select_design">
                            <label class="text-sm smallfont font-medium">Number of Drivers</label>
                            <select class="number_of_drivers">
                             <optgroup label="Select Number of Drivers">
                                <option></option>
                                <option>Semi-Trailer</option>
                             </optgroup>
                            </select>
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
<?php include('include/footer.php') ?>