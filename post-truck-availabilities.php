<?php include('include/header.php') ?>
<section class="postload_sec loadTab_sec smallfont">
    <div class="mt-8">
        <div class="dash_search_box mb-8">
            <div class="input-group flex sm:flex-nowrap flex-wrap align-items gap-5 justify-end sm:mx-0 mx-5">
                <div class="align-middle sm:w-auto w-full">
                    <a href="load-post-driver-availability.php" class="md:w-[300px] sm:w-[200px] flex items-center justify-center h-full borderpurple darkpurpleColor border-r20 2xl:p-4 p-3 largefont">
                        <img src="images/truck_purple.svg" class="mr-4"><span>Post Driver's Availability</span>
                    </a>
                </div>
                <input type="text" class="w-full 2xl:p-4 p-3 search_icon placeholder:text-[#1F1F41] border-r20 largefont"
                placeholder="Search Here" aria-describedby="basic-addon1">
                <button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn modalButton" data-target="#post_load_filter"><img
                    src="images/filter-icon.svg" class="w-1/2"></button>
                <button class="bg-semilightapurple flex items-center justify-center border-r20 p-2 fil_btn modalButton" data-target="#post_load_sort_by"><img
                    src="images/data-frame-icon.svg" class="w-1/2"></button>
            </div>
        </div>
        <div>
            <div class="text-sm smallfont font-medium text-center">
                <ul class="flex flex-wrap justify-around tab_gra_bg">
                    <li class="sm:w-4/12 w-full">
                        <a href="public-load.php" class="inline-block p-5 w-full">Public Marketplace Loads (12)</a>
                    </li>
                    <li class="sm:w-4/12 w-full navtab_active">
                        <a href="post-truck-availabilities.php" class="inline-block p-5 w-full">Post Truck Availabilities (23)</a>
                    </li>
                    <li class="sm:w-4/12 w-full">
                        <a href="private-load-request.php" class="inline-block p-5 w-full">Private Load Requests (23)</a>
                    </li>
                </ul>
                <div class="mt-10">
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
                                                <label class="block smallfont">Curtainside</label>
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
                                        <div class="grid sm:grid-cols-2 gap-x-2 items-start mt-3 gap-y-3">
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
                                        <a href="load-post-bid-details.php" class="viewGreen_btn 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">View 10 Bids</a>
                                        <button class="flex items-center justify-center bin_btn border-r20 modalButton" data-target="#delete_availbility_modal"><img src="images/bin.svg" /></button>
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
                                                <label class="block smallfont">Curtainside</label>
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
                                        <a class="noBirdrec_btn 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20" disabled>No Bids Received</a>
                                        <button class="flex items-center justify-center bin_btn border-r20 modalButton" data-target="#delete_availbility_modal"><img src="images/bin.svg" class="delet_img" /></button>
                                        <a href="load-post-edit-driver-availability.php" class="flex items-center justify-center edit_btn border-r20"><img src="images/edit_icon.svg" class="delet_img" /></a>
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
</section>

<!-- public load filter pop-up -->
<div class="modal" id="post_load_filter">
    <div class="modal-dialog modal-dialog-lefted smallfont">
        <div class="modal-content">
            <div class="modal-header 2xl:p-7 p-4 grayBorder flex items-center justify-between">
                <div class="text-lg largefont font-semibold darkpurpleColor">Filters</div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-4 md:px-5 px-4 mb-5">
                <form action="">
                    <div class="h-[600px] overflow-y-auto px-1 datepiker_range">
                        <div class="w-full select_design">
                            <label class="text-sm smallfont font-medium">Bid Status</label>
                            <select class="post_load_bidStatus">
                             <optgroup label="Select Bid Status">
                                <option></option>
                                <option>Globex Corporation</option>
                             </optgroup>
                            </select>
                            <div class="tail-move-container"></div>
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
                        <div class="w-full mt-5 select_design">
                            <label class="text-sm smallfont font-medium">By Driver Name</label>
                            <select class="post_load_driver">
                             <optgroup label="Select Driver Name">
                                <option></option>
                                <option>Semi-Trailer</option>
                                <option>Truck With Trailer</option>
                                <option>Truck</option>
                                <option>Van</option>
                             </optgroup>
                            </select>
                        </div>
                        <div class="w-full mt-5 Trip Length">
                            <label class="text-sm smallfont font-medium">Trip Length</label>
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
                                                <label class="block text-sm smallfont darkpurpleColor block mb-1">Time To</label>
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
                                                <label class="block text-sm smallfont darkpurpleColor block mb-1">Time To</label>
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

<!-- public load sorting pop-up -->
<div class="modal" id="post_load_sort_by">
    <div class="modal-dialog modal-dialog-lefted smallfont">
        <div class="modal-content">
            <div class="modal-header 2xl:p-7 p-4 grayBorder flex items-center justify-between">
                <div class="text-lg largefont font-semibold darkpurpleColor">Sort by</div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body mb-5">
                <form action="" class="sortingBy_modal">
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Trip Distance - Ascending</a></li>
                        <li><a href="javascript:void(0)">Trip Distance - Ascending</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Pickup City - A to Z</a></li>
                        <li><a href="javascript:void(0)">Pickup City - Z to A</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Dropoff City - A to Z</a></li>
                        <li><a href="javascript:void(0)">Dropoff City - Z to A</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Driver Name - A to Z</a></li>
                        <li><a href="javascript:void(0)">Driver Name - Z to A</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Price - Ascending</a></li>
                        <li><a href="javascript:void(0)">Price - Descending</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Time Of Passing - Earliest</a></li>
                        <li><a href="javascript:void(0)">Time Of Passing - Latest</a></li>
                    </ul>

                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Pickup Time - Earliest</a></li>
                        <li><a href="javascript:void(0)">Pickup Time - Latest</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Dropoff Time - Earliest</a></li>
                        <li><a href="javascript:void(0)">Dropoff Time - Latest</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Direct Trip</a></li>
                        <li><a href="javascript:void(0)">Multiple Stop Trip</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Truck Type - A to Z</a></li>
                        <li><a href="javascript:void(0)">Truck Type - Z to A</a></li>
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

<!-- delete availability modal  -->
<div class="modal" id="delete_availbility_modal">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 redColor font-semibold">Delete Availability</div>
            </div>
            <div class="modal-body py-2 text-wcenter">
                <div class="text-center lg:w-2/3 w-full font-medium">
                    Do you really want to delete your posted availability?
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon font-medium">No</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton" data-target="#successdelete_modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- post record delete successfully popup --->
<div class="modal" id="successdelete_modal">
    <div class="modal-dialog modal-dialog-centered">    
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-2 text-wcenter text-base smallfont">
                <div class="text-center">
                    <img src="images/check-mark.png" class="m-auto mb-5">
                </div>
                <div class="text-center w-full font-medium">
                    Availability Deleted Successfully
                </div>
            </div>
            <div class="modal-footer lg:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3 text-base smallfont">
                    <button class="w-full borderBlue text-center p-2 2xl:py-3 border-r20 close_icon bg-darkblue text-white">Go Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>