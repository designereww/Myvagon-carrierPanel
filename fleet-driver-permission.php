<?php include('include/header.php') ?>
<section class="smallfont">
	<div class="flex lg:flex-nowrap flex-wrap gap-5">
		<div class="lg:w-2/6 w-full greyBG text-sm">
			<div class="2xl:m-7 m-3">
		        <div class="driver_deetails">
                	<a class="nav-link relative border-r20 2xl:p-5 pt-8 2xl:pb-8 p-3 mb-5 block bg-white borderpurple">
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
		        </div>
			</div>
		</div>
		<div class="lg:w-4/6 w-full border-r20 text-base smallfont 2xl:mt-10 mt-2 mx-3">
			<div class="border-r20 borderlightGray mt-4">
        		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
        			<label class="text-lg smallfont darkpurpleColor font-medium">Loads</label>
        		</div>
        		<div class="2xl:px-10 2xl:py-6 p-4">
        			<div class="mb-8">
        				<div class="block font-bold mb-3">Public</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Public Loads, Not Their Price</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="view_public_load_not" class="custom_togglecheckbox">
	        					<label for="view_public_load_not" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Public Loads & Their Price</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="view_public_load_yes" class="custom_togglecheckbox">
	        					<label for="view_public_load_yes" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Bid On Public Loads</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="bid_on_public" class="custom_togglecheckbox">
	        					<label for="bid_on_public" class="about_per_check relative"></label>
	        				</div>
	        			</div>
        			</div>
        			<div class="mb-8">
        				<div class="block font-bold mb-3">Post</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Driver’s Own Posted Availabilities (Driver Cannot Post, Only Carrier Admin)</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="view_driver_own" class="custom_togglecheckbox">
	        					<label for="view_driver_own" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View, Post & Edit Driver’s Own Availability</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="" class="custom_togglecheckbox">
	        					<label for="" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Delete Driver’s Own Posted Availability</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="" class="custom_togglecheckbox">
	        					<label for="" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Bids On Driver’s Own Posted Availability</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="" class="custom_togglecheckbox">
	        					<label for="" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Accept Bids On Driver’s Own Posted Availability</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="" class="custom_togglecheckbox">
	        					<label for="" class="about_per_check relative"></label>
	        				</div>
	        			</div>
        			</div>
        			<div class="">
        				<div class="block font-bold mb-3">Private</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Private Load Requests Sent To Carrier Company, Not Their Price</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="" class="custom_togglecheckbox">
	        					<label for="" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Private Load Requests Sent To Carrier Company, & Their Price</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="" class="custom_togglecheckbox">
	        					<label for="" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Signal Interest On Private Load Requests</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="" class="custom_togglecheckbox">
	        					<label for="" class="about_per_check relative"></label>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="border-r20 borderlightGray mt-4">
        		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
        			<label class="text-lg smallfont darkpurpleColor font-medium">Schedule</label>
        		</div>
        		<div class="2xl:px-10 2xl:py-6 p-4">
        			<div class="">
        				<div class="block font-bold mb-3"></div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Withdraw Interest/Bid On Pending Load (Where Driver Allocated)</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="withdraw_bid" class="custom_togglecheckbox">
	        					<label for="withdraw_bid" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Accept/Reject Updated Load From Shipper</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="acc_up_shipp" class="custom_togglecheckbox">
	        					<label for="acc_up_shipp" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Cancel Load For A Scheduled or Ready Load</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="cancel_sc_load" class="custom_togglecheckbox">
	        					<label for="cancel_sc_load" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Cancel Load For A On Trip Load</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="cancel_tri_load" class="custom_togglecheckbox">
	        					<label for="cancel_tri_load" class="about_per_check relative"></label>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="border-r20 borderlightGray mt-4">
        		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
        			<label class="text-lg smallfont darkpurpleColor font-medium">Map</label>
        		</div>
        		<div class="2xl:px-10 2xl:py-6 p-4">
        			<div class="">
        				<div class="block font-bold mb-3"></div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Map</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="view_map" class="custom_togglecheckbox">
	        					<label for="view_map" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View & Interact With Map</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="view_with_map" class="custom_togglecheckbox">
	        					<label for="view_with_map" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>View Plateform Chat ("piazza")</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="view_plate_chat" class="custom_togglecheckbox">
	        					<label for="view_plate_chat" class="about_per_check relative"></label>
	        				</div>
	        			</div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Send Messages On Plateform Chat ("piazza")</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="send_chat" class="custom_togglecheckbox">
	        					<label for="send_chat" class="about_per_check relative"></label>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="border-r20 borderlightGray mt-4">
        		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
        			<label class="text-lg smallfont darkpurpleColor font-medium">Chat</label>
        		</div>
        		<div class="2xl:px-10 2xl:py-6 p-4">
        			<div>
        				<div class="block font-bold mb-3"></div>
	        			<div class="flex items-center justify-between my-2 gap-x-2">
	        				<label>Chat With Shippers</label>
	        				<div class="inline-flex gap-3 items-center">
	        					<input type="checkbox" value="0" id="chat_wth_shipp" class="custom_togglecheckbox">
	        					<label for="chat_wth_shipp" class="about_per_check relative"></label>
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="text-wcenter mt-10">
        		<button class="darkblur_btn 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20" type="button">Save Changes</button>
        	</div>
		</div>
	</div>
</section>
<?php include('include/footer.php') ?>