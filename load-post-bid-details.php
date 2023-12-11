<?php include 'include/header.php'; ?>
<section class="postBid_details smallfont">
	<div class="">
		<div class="greyBG p-6 grid 2xl:grid-cols-6 md:grid-cols-3 sm:grid-cols-2 2xl:gap-4 gap-2">
			<div class="bg-white border break-words border-r20 xl:p-4 p-3 flex items-center 2xl:gap-4 gap-2">
	        	<img src="images/profile.png" class="w-14 h-14 rounded-2xl object-cover">
	        	<div>
	        		<label class="block text-lg smallfont font-medium mb-1">Robert Williams</label>
	        		<span class="block text-xl darkpurpleColor smallfont font-bold">€ 567</span>
	        	</div>
			</div>
			<div class="bg-white border break-words border-r20 xl:p-4 p-3 flex items-center 2xl:gap-4 gap-2">
	        	<img src="images/truck.png" class="2xl:w-24 w-16 h-16 object-contain">
	        	<div>
	        		<label class="block mb-1">Truck With Tariler</label>
	        		<span class="block text-sm smallfont">Curtainside</span>
	        	</div>
			</div>
			<div class="bg-white border break-words border-r20 xl:p-4 p-3">
				<div class="xl:mb-3.5 flex items-center">
			 		<img src="images/load_shipment_type.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
			 		<span class="extradarkgreyColor">Shipment Types</span>
			 	</div>
			 	<span class="block">Direct Route . Private Post</span>
			</div>
			<div class="bg-white border break-words border-r20 xl:p-4 p-3">
				<div class="xl:mb-3.5 flex items-center">
			 		<img src="images/load_shipment_dis.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
			 		<span class="extradarkgreyColor">From</span>
			 	</div>
			 	<span class="block">Loannina 112 57, Greece</span>
			</div>
			<div class="bg-white border break-words border-r20 xl:p-4 p-3">
				<div class="xl:mb-3.5 flex items-center">
			 		<img src="images/load_shipment_dis.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
			 		<span class="extradarkgreyColor">To</span>
			 	</div>
			 	<span class="block">Loannina 112 57, Greece</span>
			</div>
			<div class="bg-white border break-words border-r20 xl:p-4 p-3">
				<div class="xl:mb-3.5 flex items-center">
			 		<img src="images/load_shipment_time.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
			 		<span class="extradarkgreyColor">Availability</span>
			 	</div>
			 	<span class="block">From June 6th, 2023 at 11:00AM</span>
			</div>
		</div>
		<div class="2xl:my-8 my-5">
			<a href="post-bid-match-list.php" class="flex items-center justify-center gap-4 darkpurpleColor borderpurple p-4 border-r20">
				<img src="images/load_shipment_type.svg">
				<span class="font-medium">3 Matched Loads</span>
			</a>
		</div>
		<div class="bid_detail_listing">
			<div class="">
				<div class="bg-semilightapurple rounded-2xl flex items-center justify-between 2xl:ps-6 p-2">
					<label class="block text-lg smallfont font-medium">10 Bids Received</label>
					<button class="bg-darkpurple flex items-center justify-center rounded-2xl p-3 modalButton" data-target="#bid_requests_sort_by"><img src="images/sorting_icon.svg"></button>
				</div>
				<div class="mt-3">
					<div class="h-[500px] overflow-auto pe-1 text-sm smallfont">
                        <div class="px-6 py-4 purpleBorder border-r20 relative my-3">
                            <div class="grid grid-cols-12 lg:gap-2 gap-4 items-center">
                                <div class="text-start col-start-1 2xl:col-end-5 xl:col-end-5 lg:col-end-5 md:col-end-6 col-span-full">
                                    <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                                        <label class="text-xl smallfont font-semibold">Abc Company</label>
                                        <label class="text-xl smallfont darkpurpleColor break-normal font-semibold">#123456789</label>
                                        <label
                                            class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                            400</label>
                                    </div>
                                    <div class="mt-2">
                                        <img src="images/rating.svg" class="me-2 inline-block" />
                                        <span class="me-2 align-middle">3.5 (400)</span>
                                    </div>
                                    <div class="mt-4 bg-lightpurple xl:py-4 xl:px-5 p-2 inline-block border-r20">
                                        <div class="flex lg:flex-nowrap flex-wrap items-center gap-y-3">
                                            <img src="images/truck.png" class="w-20 me-3" />
                                            <div class="blurColor60 pe-4">
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
                                <div class="text-start xl:col-start-5 lg:col-end-10 lg:col-start-5 md:col-start-6 sm:col-end-13 col-span-full">
                                    <div class="">
                                        <label class="p-2 blurColor60 total_km_count inline-block me-2">Total
                                            <span class="darkblueColor font-medium">200 Km</span></label>
                                        <label class="bg-[#1F1F411F] 2xl:px-3 p-1 rounded-xl inline-block mb-2 text-sm smallfont">Pickup is 50 km out of range</label>
                                        <div class="grid sm:grid-cols-2 gap-x-2 items-start mt-5 md:gap-y-3">
                                            <div class="about_loca_icon_bg">
                                                <div class="relative stop_before stop_count z-10">
                                                    <label
                                                        class="text-base smallfont blurColor60 block mb-3 bg-white inline-block pe-1">ABC
                                                        INC</label>
                                                    <p class="mb-2 w-9/12"><span class="font-semibold">Mithimnis 30,</span>
                                                        Athina 112 57, Greece</p>
                                                    <label class="about_date_icon me-4 inline-block mb-1">March 17th, 2023</label>
                                                    <label class="about_time_icon inline-block mb-2">08:30</label>
                                                    <label class="darkpurpleColor absolute top-[25px] right-[5%] stop_count_label">2 stop</label>
                                                </div>
                                            </div>
                                            <div class="about_flag_icon_bg">
                                                <div class="">
                                                    <label class="text-base smallfont blurColor60 block mb-3">XYZ INC</label>
                                                    <p class="mb-2 w-9/12"><span class="font-semibold">Location-B,</span>
                                                        Vari - Voula, Regional Unit of East Attica</p>
                                                    <label class="about_date_icon me-4 inline-block mb-1">March 17th, 2023</label>
                                                    <label class="about_time_icon inline-block mb-1">18:30</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-start-10 lg:col-end-13 sm:col-start-7 sm:col-end-13 col-span-full lg:mb-0 mb-8">
                                    <div class="relative flex 2xl:flex-nowrap lg:flex-wrap items-center justify-end gap-x-3 text-center">
                                        <button class="2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20 text-white w-48 bg-red mb-2 modalButton" data-target="#post_reject_bid_modal">Reject</button>
                                        <a href="private-load-details.php" class="2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20 text-white w-48 bg-green mb-2 block">Accept</a>
                                        <div class="darkgreyColor mt-4 absolute 2xl:bottom-[-45px] bottom-[-30px] right-0">Posted at 08:30, on June 06th, 2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-4 purpleBorder border-r20 relative my-3">
                            <div class="grid grid-cols-12 lg:gap-2 gap-4 items-center">
                                <div class="text-start col-start-1 2xl:col-end-5 xl:col-end-5 lg:col-end-5 md:col-end-6 col-span-full">
                                    <div class="flex items-center 2xl:gap-3 gap-2 xl:flex-nowrap flex-wrap">
                                        <label class="text-xl smallfont font-semibold">Abc Company</label>
                                        <label class="text-xl smallfont darkpurpleColor break-normal font-semibold">#123456789</label>
                                        <label
                                            class="font22 smallfont darkpurpleColor font-bold ps-4 border-l border-[#9A9AA9]">€
                                            400</label>
                                    </div>
                                    <div class="mt-2">
                                        <img src="images/rating.svg" class="me-2 inline-block" />
                                        <span class="me-2 align-middle">3.5 (400)</span>
                                    </div>
                                    <div class="mt-4 bg-lightpurple xl:py-4 xl:px-5 p-2 inline-block border-r20">
                                        <div class="flex lg:flex-nowrap flex-wrap items-center gap-y-3">
                                            <img src="images/truck.png" class="w-20 me-3" />
                                            <div class="blurColor60 pe-4">
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
                                <div class="text-start xl:col-start-5 lg:col-end-10 lg:col-start-5 md:col-start-6 sm:col-end-13 col-span-full">
                                    <div class="">
                                        <label class="p-2 blurColor60 total_km_count inline-block me-2">Total
                                            <span class="darkblueColor font-medium">200 Km</span></label>
                                        <label class="bg-[#1F1F411F] 2xl:px-3 p-1 rounded-xl inline-block mb-2 text-sm smallfont">Pickup is 50 km out of range</label>
                                        <div class="grid sm:grid-cols-2 gap-x-2 items-start mt-5 md:gap-y-3">
                                            <div class="about_loca_icon_bg">
                                                <div class="relative stop_before stop_count z-10">
                                                    <label
                                                        class="text-base smallfont blurColor60 block mb-3 bg-white inline-block pe-1">ABC
                                                        INC</label>
                                                    <p class="mb-2 w-9/12"><span class="font-semibold">Mithimnis 30,</span>
                                                        Athina 112 57, Greece</p>
                                                    <label class="about_date_icon me-4 inline-block mb-1">March 17th, 2023</label>
                                                    <label class="about_time_icon inline-block mb-2">08:30</label>
                                                    <label class="darkpurpleColor absolute top-[25px] right-[5%] stop_count_label">2 stop</label>
                                                </div>
                                            </div>
                                            <div class="about_flag_icon_bg">
                                                <div class="">
                                                    <label class="text-base smallfont blurColor60 block mb-3">XYZ INC</label>
                                                    <p class="mb-2 w-9/12"><span class="font-semibold">Location-B,</span>
                                                        Vari - Voula, Regional Unit of East Attica</p>
                                                    <label class="about_date_icon me-4 inline-block mb-1">March 17th, 2023</label>
                                                    <label class="about_time_icon inline-block mb-1">18:30</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-start-10 lg:col-end-13 sm:col-start-7 sm:col-end-13 col-span-full lg:mb-0 mb-8">
                                    <div class="relative flex 2xl:flex-nowrap lg:flex-wrap items-center justify-end gap-x-3 text-center">
                                        <button class="2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20 text-white w-48 bg-red mb-2 modalButton" data-target="#post_reject_bid_modal">Reject</button>
                                        <a class="2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20 text-white w-48 bg-green mb-2 block">Accept</a>
                                        <div class="darkgreyColor mt-4 absolute 2xl:bottom-[-45px] bottom-[-30px] right-0">Posted at 08:30, on June 06th, 2023</div>
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


<!-- Bid request load sorting pop-up -->
<div class="modal" id="bid_requests_sort_by">
    <div class="modal-dialog modal-dialog-lefted smallfont">
        <div class="modal-content">
            <div class="modal-header 2xl:p-7 p-4 grayBorder flex items-center justify-between">
                <div class="text-lg largefont font-semibold darkpurpleColor">Sort by</div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body mb-5">
                <form action="" class="sortingBy_modal">
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Bid Amount - Low</a></li>
                        <li><a href="javascript:void(0)">Bid Amount - High</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Shipper Rating - Low</a></li>
                        <li><a href="javascript:void(0)">Shipper Rating - High</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Pickup Distance - Nearest</a></li>
                        <li><a href="javascript:void(0)">Pickup Distance - Farthest</a></li>
                    </ul>
                    <ul class="sort_by_list 2xl:px-7 p-2">
                        <li><a href="javascript:void(0)" class="grayBorder">Dropoff Distance - Nearest</a></li>
                        <li><a href="javascript:void(0)">Dropoff Distance - Farthest</a></li>
                    </ul>
                </form>
            </div>
            <div class="modal-footer 2xl:p-6 p-4 grayBox-shadow">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderpurple darkpurpleColor text-center p-2 2xl:py-3 border-r20 close_icon font-medium" type="button">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue" type="button">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- reject bid modal  -->
<div class="modal" id="post_reject_bid_modal">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 redColor font-semibold">Reject Bid</div>
            </div>
            <div class="modal-body py-2 text-wcenter">
                <div class="text-center lg:w-2/3 w-full font-medium">
                    Are you sure you want to reject this bid?
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon font-medium">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Bid</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>