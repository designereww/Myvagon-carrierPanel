<?php include('include/header.php') ?>
<section class="dashboard_main">
    <div class="mt-8">
        <div class="dash_search_box mb-8">
            <div class="input-group flex sm:flex-nowrap flex-wrap align-items gap-5 justify-end sm:mx-0 mx-5">
            	<div class="align-middle hidden sm:w-auto w-full" id="post_truck_ave">
            		<a href="" class="md:w-[300px] sm:w-[260px] flex items-center justify-center h-full borderpurple darkpurpleColor border-r20 2xl:p-4 p-3 largefont">
            			<img src="images/truck_purple.svg" class="mr-4"><span>Post Driver's Availability</span>
            		</a>
            	</div>
            	<input type="text" class="w-full 2xl:p-4 p-3 search_icon placeholder:text-[#1F1F41] border-r20 largefont"
                placeholder="Search Here" aria-describedby="basic-addon1">
            	<button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn"><img
                    src="images/filter-icon.svg" class="w-1/2"></button>
            	<button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn"><img
                    src="images/data-frame-icon.svg" class="w-1/2"></button>
            </div>
        </div>
        <div class="about_dash_tabview">
            <div class="text-sm smallfont font-medium text-center tabView">
                <ul class="nav-tabs flex flex-wrap justify-around tab_gra_bg">
                    <li class="sm:w-4/12 w-full navtab_active">
                        <a href="#public_mark_loads" class="nav-link inline-block p-5 w-full">Public Marketplace Loads (12)</a>
                    </li>
                    <li class="sm:w-4/12 w-full">
                        <a href="#post_truck_ava" class="nav-link inline-block p-5 w-full">Post Truck Availabilities (23)</a>
                    </li>
                    <li class="sm:w-4/12 w-full">
                        <a href="#private_load_req" class="nav-link inline-block p-5 w-full">Private Load Requests (23)</a>
                    </li>
                </ul>
                <div class="tab-content mt-10">
                    <div class="tab-pane active" id="public_mark_loads">
                        <div class="h-[650px] overflow-auto">
                            <!-- Modal trigger - anchor by default -->
                            <div class="px-6 py-4 purpleBorder border-r20 relative my-3">
                                <div class="grid grid-cols-12 lg:gap-2 gap-4 items-center">
                                    <div class="text-start col-start-1 xl:col-end-5 lg:col-end-4 md:col-end-6 col-span-full">
                                        <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                                            <label class="text-xl smallfont">Abc Company</label>
                                            <label class="text-xl smallfont darkpurpleColor break-normal">#123456789</label>
                                            <label
                                                class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                                400</label>
                                        </div>
                                        <div class="mt-4 bg-lightpurple xl:py-4 xl:px-6 p-2 inline-block border-r20">
                                            <div class="flex items-center">
                                                <div class="blurColor60 pe-5">
                                                    <label class="block text-base smallfont darkblueColor">Truck With
                                                        Tariler</label>
                                                    <label class="block">Curtainside</label>
                                                    <label class="block">Deep-Freeze Trailer</label>
                                                </div>
                                                <div class="border-l blurColor60 border-[#9A9AA9] truck_bg">
                                                    <label class="block text-base smallfont darkblueColor">100 Kg</label>
                                                    <label class="block">Total Load</label>
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
                                                class="bg-yellow border-r22 2xl:py-3 2xl:px-5 xl:p-3 p-2 inline-block mb-5 text-black text-base smallfont rounded-e-none -me-6">No
                                                Bids Received</label>
                                        </div>
                                        <a href="load-details.php" class="darkblur_btn 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">Bid Now</a>
                                        <div class="darkgreyColor mt-4">Posted at 08:30, on June 06th, 2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="pagination flex flex-row flex-nowrap justify-between md:justify-center items-center my-3" aria-label="Pagination">
						    <a class="flex w-10 h-10 sm:mr-2 mr-1 justify-center items-center bg-semilightapurple border-r10" href="#" title="Previous Page">
						        <span class="sr-only">Previous Page</span>
						        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								  <g id="vuesax_linear_arrow-down" data-name="vuesax/linear/arrow-down" transform="translate(24) rotate(90)">
								    <g id="arrow-down">
								      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
								    </g>
								  </g>
								</svg>
						    </a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border-gray-400 bg-darkpurple text-white" href="#" title="Page 1" aria-current="page">1</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 2">2</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 3">3</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 4">4</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 5">5</a>
						    <a class="flex w-10 h-10 sm:ml-2 ml-1 justify-center items-center bg-semilightapurple border-r10" href="#" title="Next Page">
						        <span class="sr-only">Next Page</span>
						        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="rotate-180">
								  <g id="vuesax_linear_arrow-down" data-name="vuesax/linear/arrow-down" transform="translate(23 -237) rotate(90)">
								    <g id="arrow-down" transform="translate(237 -1)">
								      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
								    </g>
								  </g>
								</svg>
						    </a>
						</nav>
                    </div>
                    <div class="tab-pane" id="post_truck_ava">
                    	<div class="h-[650px] overflow-auto">
                            <div class="p-6 purpleBorder border-r20 relative my-3">
                                <div class="grid grid-cols-12 lg:gap-3 gap-4 items-center">
                                    <div class="text-start col-start-1 2xl:col-end-4 xl:col-end-5 lg:col-end-5 md:col-end-6 col-span-full">
                                        <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                                            <label class="text-xl smallfont">John Williams Smith</label>
                                            <label
                                                class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                                400</label>
                                        </div>
                                        <div class="mt-4 bg-lightpurple xl:py-4 xl:px-6 p-2 inline-block border-r20">
                                            <div class="flex items-center gap-5 xl:flex-nowrap flex-wrap">
                                                <img src="images/truck.png" class="w-28" />
                                                <div class="text-sm blurColor60">
                                                    <label class="block text-base smallfont darkblueColor">Truck With
                                                        Tariler</label>
                                                    <label class="block">Curtainside</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start xl:col-start-5 lg:col-end-9 lg:col-start-5 md:col-start-6 sm:col-end-13 col-span-full">
                                        <div class="post_mul_stop">
                                            <div>
                                            	<label class="2xl:p-2 p-1 total_km_count inline-block me-3 mb-2">Multiple Stops</label>
                                            	<label class="2xl:p-2 p-1 about_clock_icon border-r22 inline-block mb-2">From June 06th, 2023 at 11:00 PM</label>
                                            </div>
                                            <div class="grid sm:grid-cols-2 gap-x-2 items-start mt-5 gap-y-3">
                                                <div class="">
                                                    <div class="relative stop_before z-10">
                                                        <img src="images/location_purple.svg" />
                                                    </div>
                                                    <p class="my-3 w-9/12"><span class="font-semibold">Mithimnis 30,</span>Athina 112 57, Greece</p>
                                                </div>
                                                <div class="">
                                                    <div class="relative z-10">
                                                        <img src="images/flag_purple.svg">
                                                    </div>
                                                    <p class="my-3 w-9/12"><span class="font-semibold">Location-B,</span>Vari - Voula, Regional Unit of East Attica</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-start-9 lg:col-end-13 sm:col-start-7 sm:col-end-13 col-span-full lg:mb-0 mb-8">
                                    	<div class="relative flex items-center justify-end gap-3">
                                    		<a class="viewGreen_btn 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">View 10 Bids</a>
                                        	<a class="flex items-center justify-center bin_btn border-r20"><img src="images/bin.svg" /></a>
                                        	<div class="darkgreyColor mt-4 absolute bottom-[-40px] right-0">Private Post</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 purpleBorder border-r20 relative my-3">
                                <div class="grid grid-cols-12 lg:gap-3 gap-4 items-center">
                                    <div class="text-start col-start-1 2xl:col-end-4 xl:col-end-5 lg:col-end-5 md:col-end-6 col-span-full">
                                        <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                                            <label class="text-xl smallfont">John Williams Smith</label>
                                            <label
                                                class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                                400</label>
                                        </div>
                                        <div class="mt-4 bg-lightpurple xl:py-4 xl:px-6 p-2 inline-block border-r20">
                                            <div class="flex items-center gap-5 xl:flex-nowrap flex-wrap">
                                                <img src="images/truck.png" class="w-28" />
                                                <div class="text-sm blurColor60">
                                                    <label class="block text-base smallfont darkblueColor">Truck With
                                                        Tariler</label>
                                                    <label class="block">Curtainside</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start xl:col-start-5 lg:col-end-9 lg:col-start-5 md:col-start-6 sm:col-end-13 col-span-full">
                                        <div class="post_mul_stop">
                                            <div>
                                                <label class="2xl:p-2 p-1 total_km_count inline-block me-3 mb-2">Multiple Stops</label>
                                                <label class="2xl:p-2 p-1 about_clock_icon border-r22 inline-block mb-2">From June 06th, 2023 at 11:00 PM</label>
                                            </div>
                                            <div class="grid sm:grid-cols-2 gap-x-2 items-start mt-5 gap-y-3">
                                                <div class="">
                                                    <div class="relative stop_before z-10">
                                                        <img src="images/location_purple.svg" />
                                                    </div>
                                                    <p class="my-3 w-9/12"><span class="font-semibold">Mithimnis 30,</span>Athina 112 57, Greece</p>
                                                </div>
                                                <div class="">
                                                    <div class="relative z-10">
                                                        <img src="images/flag_purple.svg">
                                                    </div>
                                                    <p class="my-3 w-9/12"><span class="font-semibold">Location-B,</span>Vari - Voula, Regional Unit of East Attica</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-start-9 lg:col-end-13 sm:col-start-7 sm:col-end-13 col-span-full lg:mb-0 mb-8">
                                        <div class="relative flex items-center justify-end gap-3">
                                            <a class="noBirdrec_btn 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">No Bids Received</a>
                                            <button class="flex items-center justify-center bin_btn border-r20"><img src="images/bin.svg" class="delet_img" /></button>
                                            <button class="flex items-center justify-center edit_btn border-r20"><img src="images/edit_icon.svg" class="delet_img" /></button>
                                            <div class="darkgreyColor mt-4 absolute bottom-[-40px] right-0">Private Post</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="pagination flex flex-row flex-nowrap justify-between md:justify-center items-center my-3" aria-label="Pagination">
						    <a class="flex w-10 h-10 sm:mr-2 mr-1 justify-center items-center bg-semilightapurple border-r10" href="#" title="Previous Page">
						        <span class="sr-only">Previous Page</span>
						        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								  <g id="vuesax_linear_arrow-down" data-name="vuesax/linear/arrow-down" transform="translate(24) rotate(90)">
								    <g id="arrow-down">
								      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
								    </g>
								  </g>
								</svg>
						    </a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border-gray-400 bg-darkpurple text-white" href="#" title="Page 1" aria-current="page">1</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 2">2</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 3">3</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 4">4</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 5">5</a>
						    <a class="flex w-10 h-10 sm:ml-2 ml-1 justify-center items-center bg-semilightapurple border-r10" href="#" title="Next Page">
						        <span class="sr-only">Next Page</span>
						        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="rotate-180">
								  <g id="vuesax_linear_arrow-down" data-name="vuesax/linear/arrow-down" transform="translate(23 -237) rotate(90)">
								    <g id="arrow-down" transform="translate(237 -1)">
								      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
								    </g>
								  </g>
								</svg>
						    </a>
						</nav>
                    </div>
                    <div class="tab-pane" id="private_load_req">
                    	<div class="h-[650px] overflow-auto">
                            <div class="px-6 py-4 purpleBorder border-r20 relative my-3">
                                <div class="grid grid-cols-12 lg:gap-2 gap-4 items-center">
                                    <div class="text-start col-start-1 2xl:col-end-5 xl:col-end-5 lg:col-end-5 md:col-end-6 col-span-full">
                                        <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                                            <label class="text-xl smallfont">Abc Company</label>
                                            <label class="text-xl smallfont darkpurpleColor break-normal">#123456789</label>
                                            <label
                                                class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                                400</label>
                                        </div>
                                        <div class="mt-2">
                                        	<img src="images/rating.svg" class="me-2 inline-block" />
                                        	<span class="me-2 align-middle">3.5 (400)</span>
                                        	<span class="bg-[#1F1F412B] inline-block p-2 border-r10">Partner</span>
                                        </div>
                                        <div class="mt-4 bg-lightpurple xl:py-4 xl:px-5 p-2 inline-block border-r20">
                                            <div class="flex lg:flex-nowrap flex-wrap items-center gap-y-3">
                                            	<img src="images/truck.png" class="w-20 me-3" />
                                                <div class="blurColor60 pe-4">
                                                    <label class="block text-base smallfont darkblueColor">Truck With
                                                        Tariler</label>
                                                    <label class="block">Curtainside</label>
                                                    <label class="block">Deep-Freeze Trailer</label>
                                                </div>
                                                <div class="border-l blurColor60 border-[#9A9AA9] truck_bg">
                                                    <label class="block text-base smallfont darkblueColor">100 Kg</label>
                                                    <label class="block">Total Load</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start xl:col-start-5 lg:col-end-10 lg:col-start-5 md:col-start-6 sm:col-end-13 col-span-full">
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
                                    <div class="lg:col-start-10 lg:col-end-13 sm:col-start-7 sm:col-end-13 col-span-full lg:mb-0 mb-8">
                                    	<div class="relative xl:flex items-center justify-end gap-3">
                                    		<a class="2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20 text-white w-48 bg-red mb-2">Decline</a>
                                    		<a class="2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20 text-white w-48 bg-green mb-2">I'm Interested</a>
                                        	<div class="darkgreyColor mt-4 absolute bottom-[-40px] right-0">Private Post</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="pagination flex flex-row flex-nowrap justify-between md:justify-center items-center my-3" aria-label="Pagination">
						    <a class="flex w-10 h-10 sm:mr-2 mr-1 justify-center items-center bg-semilightapurple border-r10" href="#" title="Previous Page">
						        <span class="sr-only">Previous Page</span>
						        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								  <g id="vuesax_linear_arrow-down" data-name="vuesax/linear/arrow-down" transform="translate(24) rotate(90)">
								    <g id="arrow-down">
								      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
								    </g>
								  </g>
								</svg>
						    </a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border-gray-400 bg-darkpurple text-white" href="#" title="Page 1" aria-current="page">1</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 2">2</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 3">3</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 4">4</a>
						    <a class="flex w-10 h-10 sm:mx-2 mx-1 justify-center items-center border-r10 border border-gray-400" href="#" title="Page 5">5</a>
						    <a class="flex w-10 h-10 sm:ml-2 ml-1 justify-center items-center bg-semilightapurple border-r10" href="#" title="Next Page">
						        <span class="sr-only">Next Page</span>
						        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="rotate-180">
								  <g id="vuesax_linear_arrow-down" data-name="vuesax/linear/arrow-down" transform="translate(23 -237) rotate(90)">
								    <g id="arrow-down" transform="translate(237 -1)">
								      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
								    </g>
								  </g>
								</svg>
						    </a>
						</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" id="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-6">
            <div class="modal-header text-end">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px]"></button>
            </div>
            <div class="modal-body p-2">
                <div class="font-semibold mb-6 font22 largefont text-center">Assigned Vehicle</div>
            </div>
            <div class="modal-footer">
                <button type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="">
     <div class="modal-dialog modal-dialog-lefted">
        <div class="modal-content p-7">
            <div class="modal-header b_bottom pb-5 flex items-center justify-between">
                <div class="font-semibold font22 largefont text-center darkpurpleColor">Filters</div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px]"></button>
            </div>
            <div class="modal-body p-2">
                <div class="font-semibold mb-6 text-sm smallfont text-center">Shipper Name</div>

            </div>
            <div class="modal-footer">
                <button type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>