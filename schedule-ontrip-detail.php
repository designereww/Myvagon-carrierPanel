<?php include('include/header.php') ?>
<section class="load_detail_main smallfont">
	<div class="flex lg:flex-nowrap flex-wrap xl:gap-10 gap-5">
		<div class="xl:w-2/6 lg:w-1/2 w-full greyBG text-sm">
			<div class="bg-darkblue py-6">
				<div class="track_load_design relative">
	                <ul class="track-value">
	                    <li></li>
	                    <li></li>
	                    <li></li>
	                    <li></li>
	                    <li></li>
	                </ul>
	                <div class="track-container pb-3">
	                    <input type="range" min="0" max="300" value="50" id="track-1" class='track-slider_main w-full'/>
	                </div>
	                <span class="block text-lg smallfont text-white text-center">En route to Abc Inc</span>
	            </div>
			</div>
			<div class="2xl:p-6 xl:p-4 p-3 purpleBottom">
				<label class="text-2xl largefont font-medium extradarkgreyColor">Order ID: <span class="font-semibold darkblueColor">#BA765412</span></label>
			</div>
			<div class="2xl:p-6 p-4 manage_load_ontrip">
				<label class="text-xl smallfont font-medium">Itinerary Details</label>
				<div class="h-[650px] pr-1 overflow-y-auto xl:mt-8 mt-4">
					<div class="location-box pl-10">
						<div data-marked="false" data-track="true" class="location-box_card relative text-xs rounded-2xl bg-white mb-6 count">
							<div class="location-label smallfont track_status_truck">PICKUP</div>
							<div class="content-wrapper">
								<div class="xl:flex items-start justify-between 2xl:p-5 p-3">
									<label class="block w-2/4 text-base smallfont font-semibold mb-1">Abc Company</label>
									<div class="text-sm smallfont text-right">
										<label class="about_date_icon mb-1 inline-block">March 17th, 2023</label>
										<label class="about_time_icon inline-block mb-1 inline-block ms-4">08:30</label>
									</div>
								</div>
								<div class="bg-semilightapurple 2xl:px-5 2xl:py-4 py-3 p-3">
									<label class="block bg-[url('images/load-location.svg')] bg-no-repeat bg-[left_center] pl-4 darkgreyColor text-sm smallfont location_notRecevied">Mithimnis 30, Loannina 112 57, Greece</label>
								</div>
								<div class="2xl:p-5 p-3 text-sm smallfont">
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList notRecevied mb-3">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle errorTruck">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList afterRecevied">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
								</div>
								<div class="pickup_reasonMsg">
									<div class="reason_reach">
										<label class="block px-6 py-3 redColor text-sm smallfont font-medium">Reacon for Unable to Reach</label>
									</div>
									<div class="px-6 py-3 mb-2">
										<label class="inline-block bg-lightred redColor text-sm smallfont px-4 py-2 border-r20 mb-4">Equipment issue</label>
										<div class="blurColor60 font-medium text-base smallfont">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
									</div>
								</div>
							</div>
						</div>
						<div data-marked="true" data-track="true" class="location-box_card relative text-xs rounded-2xl bg-white mb-6">
							<div class="location-label smallfont track_status_truck track">DROP-OFF</div>
							<div class="content-wrapper">
								<div class="xl:flex items-start justify-between 2xl:p-5 p-3">
									<label class="block w-2/4 text-base smallfont font-semibold mb-1">Abc Company</label>
									<div class="text-sm smallfont text-right">
										<label class="about_date_icon mb-1 inline-block">March 17th, 2023</label>
										<label class="about_time_icon inline-block mb-1 inline-block ms-4">08:30</label>
									</div>
								</div>
								<div class="bg-semilightapurple 2xl:px-5 2xl:py-4 py-3 p-3">
									<label class="block bg-[url('images/load-location.svg')] bg-no-repeat bg-[left_center] pl-4 darkgreyColor text-sm smallfont">Mithimnis 30, Loannina 112 57, Greece</label>
								</div>
								<div class="2xl:p-5 p-3 text-sm smallfont">
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList mb-3">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList ">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div data-marked="false" class="location-box_card relative text-xs rounded-2xl bg-white mb-6">
							<div class="location-label smallfont">PICKUP</div>
							<div class="content-wrapper">
								<div class="xl:flex items-start justify-between 2xl:p-5 p-3">
									<label class="block w-2/4 text-base smallfont font-semibold mb-1">Abc Company</label>
									<div class="text-sm smallfont text-right">
										<label class="about_date_icon mb-1 inline-block">March 17th, 2023</label>
										<label class="about_time_icon inline-block mb-1 inline-block ms-4">08:30</label>
									</div>
								</div>
								<div class="bg-semilightapurple 2xl:px-5 2xl:py-4 py-3 p-3">
									<label class="block bg-[url('images/load-location.svg')] bg-no-repeat bg-[left_center] pl-4 darkgreyColor text-sm smallfont">Mithimnis 30, Loannina 112 57, Greece</label>
								</div>
								<div class="2xl:p-5 p-3 text-sm smallfont">
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList mb-3">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div data-marked="false" class="location-box_card relative text-xs rounded-2xl bg-white mb-6">
							<div class="location-label smallfont">PICKUP</div>
							<div class="content-wrapper">
								<div class="xl:flex items-start justify-between 2xl:p-5 p-3">
									<label class="block w-2/4 text-base smallfont font-semibold mb-1">Abc Company</label>
									<div class="text-sm smallfont text-right">
										<label class="about_date_icon mb-1 inline-block">March 17th, 2023</label>
										<label class="about_time_icon inline-block mb-1 inline-block ms-4">08:30</label>
									</div>
								</div>
								<div class="bg-semilightapurple 2xl:px-5 2xl:py-4 py-3 p-3">
									<label class="block bg-[url('images/load-location.svg')] bg-no-repeat bg-[left_center] pl-4 darkgreyColor text-sm smallfont">Mithimnis 30, Loannina 112 57, Greece</label>
								</div>
								<div class="2xl:p-5 p-3 text-sm smallfont">
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList mb-3">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div data-marked="true" class="location-box_card relative text-xs rounded-2xl bg-white">
							<div class="location-label smallfont">DROP-OFF</div>
							<div class="content-wrapper">
								<div class="xl:flex items-start justify-between 2xl:p-5 p-3">
									<label class="block w-2/4 text-base smallfont font-semibold mb-1">Abc Company</label>
									<div class="text-sm smallfont text-right">
										<label class="about_date_icon mb-1 inline-block">March 17th, 2023</label>
										<label class="about_time_icon inline-block mb-1 inline-block ms-4">08:30</label>
									</div>
								</div>
								<div class="bg-semilightapurple 2xl:px-5 2xl:py-4 py-3 p-3">
									<label class="block bg-[url('images/load-location.svg')] bg-no-repeat bg-[left_center] pl-4 darkgreyColor text-sm smallfont">Mithimnis 30, Loannina 112 57, Greece</label>
								</div>
								<div class="2xl:p-5 p-3 text-sm smallfont">
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList mb-3">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
									<div class="xl:py-5 py-3 xl:px-6 px-3 location_orderList">
										<label class="block text-base smallfont darkgreyColor font-medium mb-2">Order ID: <span class="darkpurpleColor font-semibold">123FR345FS345</span></label>
										<label class="block font-semibold mb-2">Colis Morphs</label>
										<div class="">
											<label class="pl-6 border-r bg-[url('images/load-truck.svg')] bg-no-repeat bg-[left_center] darkgreyColor pr-3 mr-2 align-middle">5 Tons</label>
											<label class="pl-6 bg-[url('images/load-truck-weight.svg')] bg-no-repeat bg-[left_center] darkgreyColor align-middle">10 X Pallets</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="xl:w-4/6 lg:w-1/2 w-full pt-12 relative">
			<div>
				<label class="on_trip_blue border-r30 rounded-t-none 2xl:w-[380px] w-[230px] p-2.5 block text-center absolute top-0 right-0 text-xl smallfont font-medium">On Trip</label>
			</div>
			<div class="purpleBorder assign_trip_driver border-r20 mt-10">
				<div class="flex justify-between px-7 py-4 items-center purpleBottom">
					<div class="flex items-center gap-5">
						<p class="text-base smallfont purplecolor font-medium border-r purpleBorder border-0 pr-4">Assigned Drivers</p>
						<a href="javascript:void(0)" class="text-sm smallfont seeless expanedDriverList" data-label="See Less">See All</a>
					</div>
					<Button class="bg-darkblue font-medium border-r20 py-2 px-14 text-white modalButton" data-target="#schedule_add_driver_list">Add Driver</Button>
				</div>
				<div class="expanedDriverExpand">
					<div class="xl:flex justify-between px-7 py-4">
     					<div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3 xl:mb-0 mb-3">
                            <div class="bg-darkpurple 2xl:min-w-[60px] min-w-[40px] 2xl:h-[60px] h-[40px] rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                            <div>
                                <label class="inline-block text-base smallfont font-medium darkblueColor me-2">Mike Ross</label>
                                <label class="px-2 py-1 text-xs darkpurpleColor bg-semilightapurple border-r20">+2</label>
                                <div class="flex items-center 2xl:gap-3 gap-2">
                                    <img src="images/star-solid.svg" class="2xl:w-[px] w-[15px]">
                                    <span class="text-sm smallfont"><span class="text-base smallfont">3.5</span> (30)</span>
                                </div>
                            </div>
                         </div>
                         <div class="flex gap-10 items-center justify-between">
                         	<div class="xl:text-end text-start">
                         		<p class="inline-block darkblueColor py-2 text-sm smallfont font-medium on_trip_blue px-3 border-r20">On Trip</p>
                         		<p class="text-base smallfont purplecolor mt-1">Truck With Trailer</p>
                         	</div>
                         </div>
     				</div>
				</div>
				<div class="togglemenus hidden">
					<div class="group outline-none opacity-50 accordion-section purpleBottom" tabindex="1">
		       			<div class="group flex justify-between px-7 py-4 items-center transition extradarkgreyColor ease duration-500 cursor-pointer relative font-medium">
		         			<div class="transition ease duration-500 text-xl smallfont w-full">
		         				<div class="xl:flex justify-between">
		         					<div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3 xl:mb-0 mb-3">
			                            <div class="bg-darkpurple 2xl:min-w-[60px] min-w-[40px] 2xl:h-[60px] h-[40px] rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
			                            <div>
			                                <label class="inline-block text-base smallfont font-medium darkblueColor">1<sup>st</sup>. Mike Ross</label>
			                                <div class="flex items-center 2xl:gap-3 gap-2">
			                                    <img src="images/star-solid.svg" class="2xl:w-[px] w-[15px]" />
			                                    <span class="text-sm smallfont"><span class="text-base smallfont">3.5</span> (30)</span>
			                                </div>
			                            </div>
			                         </div>
			                         <div class="flex gap-10 items-center me-5 justify-between">
			                         	<div class="xl:text-end text-start">
			                         		<p class="text-base smallfont purplecolor mt-1">Truck With Trailer</p>
			                         	</div>
			                         </div>
		         				</div>
					         </div>
					        <div class="h-6 w-6 bg-[url('images/arrow-down.svg')] bg-no-repeat"></div>
		       			</div>
		       			<div>
					       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7">
					         		<div class="flex items-start gap-3">
					         			<p class="borderBlue darkblueColor text-[10px] rounded-full h-4 w-4 text-center leading-4">1</p>
					         			<div>
							         		<p class="font-medium purplecolor">Pickup Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
					       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7">
					         		<div class="flex items-start gap-3">
					         			<p class="borderBlue bg-darkblue text-[10px] rounded-full h-4 w-4 text-center leading-4 text-white">2</p>
					         			<div>
							         		<p class="font-medium purplecolor">Dropoff Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
					       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7 border-t border-b border-t-purpleBorder border-b-borderlightGray border-0">
					         		<div class="flex items-start gap-3">
					         			<img src="images/Change-over-location.svg">
					         			<div>
							         		<p class="font-medium purplecolor">Change Over Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
		       			</div>
		     		</div>
		     		<div class="group outline-none accordion-section purpleBottom" tabindex="2">
		       			<div class="group bg-semilightapurple flex justify-between px-7 py-4 items-center transition extradarkgreyColor ease duration-500 cursor-pointer relative font-medium">
		         			<div class="transition ease duration-500 text-xl smallfont w-full">
		         				<div class="xl:flex justify-between">
		         					<div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3 xl:mb-0 mb-3">
			                            <div class="bg-darkpurple 2xl:min-w-[60px] min-w-[40px] 2xl:h-[60px] h-[40px] rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
			                            <div>
			                                <label class="inline-block text-base smallfont font-medium darkblueColor">1<sup>st</sup>. Mike Ross</label>
			                                <div class="flex items-center 2xl:gap-3 gap-2">
			                                    <img src="images/star-solid.svg" class="2xl:w-[px] w-[15px]" />
			                                    <span class="text-sm smallfont"><span class="text-base smallfont">3.5</span> (30)</span>
			                                </div>
			                            </div>
			                         </div>
			                         <div class="flex gap-10 items-center me-5 justify-between">
			                         	<div class="xl:text-end text-start">
			                         		<button class="darkblueColor py-2 text-sm smallfont font-medium on_trip_blue px-3 border-r20">On Trip</button>
			                         		<p class="text-base smallfont purplecolor mt-1">Truck With Trailer</p>
			                         	</div>
			                         </div>
		         				</div>
					         </div>
					        <div class="h-6 w-6 bg-[url('images/arrow-down.svg')] bg-no-repeat"></div>
		       			</div>
		       			<div>
		       				<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7 border-t border-b border-t-purpleBorder border-b-borderlightGray border-0">
					         		<div class="flex items-start gap-3">
					         			<img src="images/Change-over-location.svg">
					         			<div>
							         		<p class="font-medium purplecolor">Change Over Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
					       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7">
					         		<div class="flex items-start gap-3">
					         			<p class="borderBlue darkblueColor text-[10px] rounded-full h-4 w-4 text-center leading-4">1</p>
					         			<div>
							         		<p class="font-medium purplecolor">Pickup Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
					       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7">
					         		<div class="flex items-start gap-3">
					         			<p class="borderBlue bg-darkblue text-[10px] rounded-full h-4 w-4 text-center leading-4 text-white">2</p>
					         			<div>
							         		<p class="font-medium purplecolor">Dropoff Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
		       			</div>
		     		</div>
		     		<div class="group outline-none accordion-section" tabindex="3">
		       			<div class="group flex justify-between px-7 py-4 items-center transition extradarkgreyColor ease duration-500 cursor-pointer relative font-medium">
		         			<div class="transition ease duration-500 text-xl smallfont w-full">
		         				<div class="xl:flex justify-between">
		         					<div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3 xl:mb-0 mb-3">
			                            <div class="bg-darkpurple 2xl:min-w-[60px] min-w-[40px] 2xl:h-[60px] h-[40px] rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
			                            <div>
			                                <label class="inline-block text-base smallfont font-medium darkblueColor">2<sup>st</sup>. Mike Ross</label>
			                                <div class="flex items-center 2xl:gap-3 gap-2">
			                                    <img src="images/star-solid.svg" class="2xl:w-[px] w-[15px]" />
			                                    <span class="text-sm smallfont"><span class="text-base smallfont">3.5</span> (30)</span>
			                                </div>
			                            </div>
			                         </div>
			                         <div class="flex gap-10 items-center me-5 justify-between">
			                         	<div class="xl:text-end text-start">
			                         		<button class="darkblueColor py-2 text-sm smallfont font-medium ready_trip_blue px-3 border-r20">Ready</button>
			                         		<p class="text-base smallfont purplecolor mt-1">Truck With Trailer</p>
			                         	</div>
			                         	<div>
			                         		<button class="py-2 px-10 darkblueColor borderBlue bg-white border-r18 text-sm font-medium smallfont modalButton" data-target="#trip_change_driver">Change Driver</button>
			                         	</div>
			                         </div>
		         				</div>
					         </div>
					        <div class="h-6 w-6 bg-[url('images/arrow-down.svg')] bg-no-repeat"></div>
		       			</div>
		       			<div>
		       				<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7 border-b border-t-purpleBorder border-b-borderlightGray border-0">
					         		<div class="flex items-start gap-3">
					         			<img src="images/Change-over-location.svg">
					         			<div>
							         		<p class="font-medium purplecolor">Change Over Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
					       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7">
					         		<div class="flex items-start gap-3">
					         			<p class="borderBlue darkblueColor text-[10px] rounded-full h-4 w-4 text-center leading-4">1</p>
					         			<div>
							         		<p class="font-medium purplecolor">Pickup Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
					       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
					         	<div class="text-sm smallfont flex justify-between py-3 px-7">
					         		<div class="flex items-start gap-3">
					         			<p class="borderBlue bg-darkblue text-[10px] rounded-full h-4 w-4 text-center leading-4 text-white">2</p>
					         			<div>
							         		<p class="font-medium purplecolor">Dropoff Location</p>
							         		<p>Mithimnis 30, Loannina 112 57, Greece</p>
					         			</div>
					         		</div>
					         		<div class="flex gap-2 w-auto items-center">
					         			<img src="images/load_shipment_time.svg" >
					         			<p>June 06, 2023, 08:30</p>
					         		</div>
					         	</div>
					       	</div>
		       			</div>
		     		</div>
		     	</div>
			</div>
			<div class="p-1 lg:mt-10 mt-3">
				<div class="grid xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-5">
					<div class="purpleBorder border-r20 xl:p-4 p-3">
					 	<div class="xl:mb-3.5 mb-2 flex items-center">
					 		<img src="images/load_shipment_type.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
					 		<span class="extradarkgreyColor">Shipment Types</span>
					 	</div>
					 	<span class="block font-semibold">Long Haul Shipment</span>
					</div>
					<div class="purpleBorder border-r20 xl:p-4 p-3">
					 	<div class="xl:mb-3.5 mb-2 flex items-center">
					 		<img src="images/load_shipment_dis.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
					 		<span class="extradarkgreyColor">Total Distance</span>
					 	</div>
					 	<span class="block font-semibold">456 Km</span>
					</div>
					<div class="purpleBorder border-r20 xl:p-4 p-3">
					 	<div class="xl:mb-3.5 mb-2 flex items-center">
					 		<img src="images/load_shipment_time.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
					 		<span class="extradarkgreyColor">Journey Time</span>
					 	</div>
					 	<span class="block font-semibold">46 Hours</span>
					</div>
					<div class="purpleBorder border-r20 xl:p-4 p-3">
					 	<div class="xl:mb-3.5 mb-2 flex items-center">
					 		<img src="images/load_shipment_price.svg" class="p-2 bg-semilightapurple border-r10 inline-block me-2">
					 		<span class="extradarkgreyColor">Offered Price</span>
					 	</div>
					 	<span class="block font-semibold">€ 567</span>
					</div>
				</div>
				<div class="my-7">
					<img src="images/google map.png" class="w-full">
				</div>
				<div class="purpleBorder border-r20 p-4 my-7">
					<label class="block mb-1.5 text-sm smallfont font-semibold">Notes</label>
					<p class="mb-0 extradarkgreyColor">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				</div>
				<div class="grid xl:grid-cols-2 lg:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-5">
					<div>
						<label class="block text-sm smallfont font-bold xl:mb-4 mb-2 darkpurpleColor">Shipper Details</label>
						<div class="xl:p-4 p-3 purpleBorder border-r20 flex items-center gap-5">
				        	<img src="images/profile.png" class="w-16 h-16 rounded-2xl object-cover">
				        	<div>
				        		<label class="block text-lg smallfont font-medium mb-2">Robert Williams</label>
				        		<div class="flex flex-wrap justify-start gap-1">
									<img src="images/yellow_star_fill.svg" class="">
									<img src="images/yellow_star_fill.svg" class="">
									<img src="images/yellow_star_fill.svg" class="">
									<img src="images/yellow_star_unfill.svg" class="">
									<img src="images/yellow_star_unfill.svg" class="">
									<label class="text-xs">3.0 <spna class="darkpurpleColor">( 38 ) Ratings</spna></label>
								</div>
				        	</div>
				        </div>
					</div>
					<div>
						<label class="block text-sm smallfont font-bold xl:mb-4 mb-2 darkpurpleColor">Vehicle Details</label>
						<div class="xl:p-4 p-3 purpleBorder border-r20 flex items-center justify-between gap-5">
				        	<img src="images/truck.png" class="w-28 h-16 object-contain">
				        	<div>
				        		<label class="block font-medium mb-1">Truck With Tariler</label>
								<label class="text-xs">Curtainside</label>
				        	</div>
				        </div>
					</div>
				</div>
				<div class="2xl:mt-16 mt-10 text-center">
					<button class="borderRed redColor font-medium border-r20 2xl:p-4 p-3 2xl:w-1/3">Cancel Load</button>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('include/footer.php') ?>