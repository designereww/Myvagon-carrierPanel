<?php include('include/header.php') ?>
<section class="driverAdd_option smallfont">
	<div class="flex lg:flex-nowrap flex-wrap xl:gap-10 gap-5">
		<div class="lg:w-2/6 w-full lg:h-[calc(100vh-120px)] greyBG text-sm">
			<div class="2xl:m-7 m-3">
				<label class="block rounded-2xl bg-semilightapurple py-4 px-8 extradarkgreyColor font-medium text-lg smallfont 2xl:mb-10 mb-5">Add Driver Options</label>
				<div class="driveAdd_radio mb-3">
					<input type="radio" id="bulk_add_driver" name="bulk_add_driver" class="hidden radioCustom_btn" checked />
	                <label for="bulk_add_driver" class="text-xl smallfont font-medium mr-5 my-1">Bulk Add Driver</label>
				</div>
				<div class="driveAdd_radio">
					<input type="radio" id="add_Driver_manu" name="bulk_add_driver" class="hidden radioCustom_btn" />
	                <label for="add_Driver_manu" class="text-xl smallfont font-medium mr-5 my-1">Add Driver Manually</label>
				</div>
			</div>
		</div>
		<div class="lg:w-4/6 w-full border-r20 text-base smallfont borderlightpurple border-r20 purpleBox-shadow 2xl:mt-10 mt-3">
			<div class="driveAdd_con block">
				<div class="2xl:py-4 2xl:px-8 p-4 border-b border-b-[#E0CDF3]">
					<div class="flex items-center justify-between">
						<label class="darkpurpleColor text-lg smallfont font-medium">Bulk Add Driver</label>
						<div class="flex items-center gap-5">
							<img src="images/downloadIcon.svg">
							<label class="text-sm smallfont font-medium">Download our Excel/CSV Template here</label>
						</div>
					</div>
				</div>
				<div class="2xl:m-7 m-3 my-5">
					<div class="flex flex-col justify-between lg:h-[calc(100vh-280px)]">
						<div class="lg:mb-0 mb-20">
							<input type="file" class="hidden" id="uploadTemp" >
							<label for="uploadTemp">
								<div class="w-full block borderpurple border-r20 text-center text-sm font-medium bg-semilightapurple relative after:content-[''] after:absolute after:border-dashed p-5 after:top-0 after:left-0 after:right-0 after:bottom-0 after:w-[99%] after:h-[88%] after:m-auto after:border-[#9B51E0] after:z-10 after:border after:rounded-2xl">
									Upload Template here
								</div>
							</label>
						</div>
						<div class="flex items-center lg:gap-5 gap-3 text-sm smallfont">
		                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 font-medium">Cancel</button>
		                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Bulk Add</button>
		                </div>
					</div>
				</div>
			</div>
			<div class="driveAdd_con">
				<div class="2xl:px-8 py-4 p-4 border-b border-b-[#E0CDF3]">
	    			<label class="text-lg smallfont darkpurpleColor font-medium">Add Driver Manually</label>
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
	                	<button class="border bg-white extradarkgreyColor block text-start rounded-2xl p-3 w-full mt-6 modalButton bg-[url('images/arrow-down.svg')] bg-no-repeat 2xl:bg-[center_right_1.5rem] bg-[center_right_1rem] pr-12" data-target="#add_vehicle_drop" data-toggle="modal">
	                		Vehicle Type
	                	</button>
	                	<div class="flex items-center lg:gap-5 gap-3 text-sm smallfont 2xl:mt-44 lg:mt-24 mt-10">
		                    <button href="fleet-driver.php" class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 font-medium modalButton" data-target="#add_driver_delete_modal" data-toggle="modal">Cancel</button>
		                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue" type="submit">Add Driver</button>
		                </div>
	    			</form>
	    		</div>
			</div>
		</div>
	</div>
</section>



<!-- add driver manually -> remove delete modal  -->
<div class="modal" id="add_driver_delete_modal">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5 redColor font-semibold">Are you Sure?</div>
            </div>
            <div class="modal-body py-2 text-wcenter">
                <div class="text-center font-medium">
                	Exiting this page now will not save the changes you made. Would you like to pursue?
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
            	<div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon font-medium">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>