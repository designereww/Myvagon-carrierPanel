<?php include('include/header.php') ?>
<section class="smallfont">
	<div class="flex lg:flex-nowrap flex-wrap xl:gap-10 gap-5">
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
		<div class="lg:w-4/6 w-full border-r20 text-base smallfont borderlightpurple border-r20 purpleBox-shadow 2xl:mt-10 mt-2">
    		<div class="2xl:px-8 py-4 p-4 border-b border-b-[#E0CDF3]">
    			<label class="text-lg smallfont darkpurpleColor font-medium">Edit Driver Configuration</label>
    		</div>
    		<div class="2xl:m-10 m-5">
    			<form action="fleet-driver.php">
    				<div class="text-wcenter 2xl:pb-10 pb-5">
						<div class="relative inline-block">
							<img src="images/profile.png" class="w-24 h-24 rounded-full border-r20 object-cover profile_img_change">
	                		<input type="file" name="" id="select_profile_pic" class="hidden">
							<label for="select_profile_pic"  class="w-8 h-8 flex items-center justify-center bg-darkpurple border-r10 absolute right-[0] bottom-[0] cursor-pointer">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
								  <path id="primary" d="M18,7H14l.5-2h3ZM11,7l-.72-1.45A1,1,0,0,0,9.38,5H4A1,1,0,0,0,3,6V18a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V8a1,1,0,0,0-1-1Zm1,4a2,2,0,1,0,2,2A2,2,0,0,0,12,11Z" transform="translate(-2 -4)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
								</svg>
							</label>
						</div>
						<label class="font-medium mt-5 block">Upload Profile Picture</label>
					</div>
					<div class="grid md:grid-cols-2 grid-cols-1 lg:gap-5 gap-3 smallfont mt-6">
                		<div>
                			<input type="text" placeholder="First Name" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
                		</div>
                		<div>
                			<input type="text" placeholder="Last Name" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
                		</div>
                		<div>
                			<input type="email" placeholder="email" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
                		</div>
                		<div>
                			<input type="number" placeholder="+30 12054 45131" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
                		</div>
                	</div>
                	<button class="border bg-white extradarkgreyColor block text-start rounded-2xl p-3 w-full mt-6 modalButton pr-12 bg-[url('images/arrow-down.svg')] bg-no-repeat 2xl:bg-[center_right_1.5rem] bg-[center_right_1rem]" data-target="#assign_vehicle_modal" data-toggle="modal">
                		Semi Trailer, Curtainside
                	</button>
                	<div class="flex items-center lg:gap-5 gap-3 text-sm smallfont 2xl:mt-44 lg:mt-24 mt-10">
	                    <a href="fleet-driver.php" class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 font-medium">Cancel</a>
	                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue" type="submit">Update Info</button>
	                </div>
    			</form>
    		</div>
		</div>
	</div>
</section>
<?php include('include/footer.php') ?>