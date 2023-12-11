<?php include('include/header.php') ?>
<section class="fleetmanager_permission smallfont">
	<div class="flex lg:flex-nowrap flex-wrap chat_main_sec xl:gap-10 gap-5 mt-10">
		<div class="xl:w-1/5 lg:w-1/4 w-full">
			<div class="purpleBox-shadow py-5 border-r20">
				<div class="2xl:m-7 m-3">
					<div class="text-wcenter 2xl:pb-8 pb-5 grayBorder">
						<div class="inline-block">
							<img src="images/profile.png" class="w-24 h-24 borderpurple border-r20 object-cover">
						</div>
						<label class="text-2xl largefont font-semibold xl:mt-5 mt-2 block">Mike Ross</label>
					</div>
					<div class="mt-10">
						<div>
							<label class="font-bold block mb-1">Email ID</label>
							<label class="block text-[#65657C]">fleetmanager@mail.com</label>
						</div>
						<div class="mt-5">
							<label class="font-bold block mb-1">Phone Number</label>
							<label class="block text-[#65657C]">+30 12054 45131</label>
						</div>
					</div>
					<div class="text-wcenter">
						<button data-target="#delete_modal" data-toggle="modal" class="flex items-center justify-center gap-5 bg-[#FFEFEF] border-r20 px-10 py-4 modalButton 2xl:mt-20 xl:mt-10 mt-5">
						<img src="images/bin.svg" class="" />
						<span class="redColor font-medium">Remove</span>
					</button>
					</div>
				</div>
			</div>
		</div>
		<div class="xl:w-4/5 lg:w-3/4 w-full border-r20 greyBG text-base smallfont">
			<div class="2xl:m-7 m-3">
				<div class="bg-semilightapurple rounded-2xl">
            		<div class="text-xl smallfont font-medium extradarkgreyColor lg:px-5 lg:py-3 p-2">Permission</div>
            	</div>
            	<div class="bg-white border-r20 borderlightGray mt-4">
            		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
            			<label class="text-lg smallfont darkpurpleColor font-medium">Admin Rights</label>
            		</div>
            		<div class="2xl:px-10 2xl:py-6 p-4">
            			<div class="flex items-center justify-between">
            				<label>Access To All Features</label>
            				<div class="inline-flex gap-3 items-center">
            					<input type="checkbox" value="0" id="all_feature" class="custom_togglecheckbox">
            					<label for="all_feature" class="about_per_check relative cursor-auto"></label>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="bg-white border-r20 borderlightGray mt-4">
            		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
            			<label class="text-lg smallfont darkpurpleColor font-medium">Loads</label>
            		</div>
            		<div class="2xl:px-10 2xl:py-6 p-4">
            			<div class="mb-6">
            				<div class="block font-bold mb-2">Public</div>
	            			<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
	            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>View Public Loads Section</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="view_public_load" class="custom_togglecheckbox">
		            					<label for="view_public_load" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Bid On Public Loads</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="bid_on_public" class="custom_togglecheckbox">
		            					<label for="bid_on_public" class="about_per_check relative"></label>
		            				</div>
		            			</div>
	            			</div>
            			</div>
            			<div class="mb-6">
            				<div class="block font-bold mb-2">Post</div>
	            			<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
	            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>View Post Availability Section</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="post_ava" class="custom_togglecheckbox">
		            					<label for="post_ava" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Post Driver Availability</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="drive_ava" class="custom_togglecheckbox">
		            					<label for="drive_ava" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Delete Driver Availability</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="de_drive_av" class="custom_togglecheckbox">
		            					<label for="de_drive_av" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Accept/Reject Load On A Posted Driver Availability</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="aa_drive_ava" class="custom_togglecheckbox">
		            					<label for="aa_drive_ava" class="about_per_check relative"></label>
		            				</div>
		            			</div>
	            			</div>
            			</div>
            			<div class="mb-6">
            				<div class="block font-bold mb-2">Private</div>
	            			<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
	            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>View Private Loads Section</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="view_private_load" class="custom_togglecheckbox">
		            					<label for="view_private_load" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Signal Interest Or Decline Interest On a Partner Load</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="signal_par_load" class="custom_togglecheckbox">
		            					<label for="signal_par_load" class="about_per_check relative"></label>
		            				</div>
		            			</div>
	            			</div>
            			</div>
            		</div>
            	</div>
            	<div class="bg-white border-r20 borderlightGray mt-4">
            		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
            			<label class="text-lg smallfont darkpurpleColor font-medium">Schedule</label>
            		</div>
            		<div class="2xl:px-10 2xl:py-6 p-4">
            			<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Quotes Of Loads</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_qo_load" class="custom_togglecheckbox">
	            					<label for="view_qo_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Pending Loads</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_pan_load" class="custom_togglecheckbox">
	            					<label for="view_pan_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Scheduled Loads</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_sch_load" class="custom_togglecheckbox">
	            					<label for="view_sch_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Ready Loads</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_re_load" class="custom_togglecheckbox">
	            					<label for="view_re_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View On Trip Loads</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_on_trip_load" class="custom_togglecheckbox">
	            					<label for="view_on_trip_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Fulfilled Loads</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_ful_load" class="custom_togglecheckbox">
	            					<label for="view_ful_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Unfulfilled Loads</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_un_load" class="custom_togglecheckbox">
	            					<label for="view_un_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Allocate Driver(S) For A Load In The Schedule</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="all_dri_sch" class="custom_togglecheckbox">
	            					<label for="all_dri_sch" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Add Driver For An On Trip Load</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="add_dri_load" class="custom_togglecheckbox">
	            					<label for="add_dri_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Edit Driver(S) On A Ready Trip</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="edit_dri_load" class="custom_togglecheckbox">
	            					<label for="edit_dri_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Allocate Driver To Pending Load</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="al_dr_load" class="custom_togglecheckbox">
	            					<label for="al_dr_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Allocate Driver To Scheduled Load</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="all_dri_sc_load" class="custom_togglecheckbox">
	            					<label for="all_dri_sc_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Accept/Reject Updated Load From Shipper</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="acc_up_load" class="custom_togglecheckbox">
	            					<label for="acc_up_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Withdraw Interest On Pending Load</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="with_in_load" class="custom_togglecheckbox">
	            					<label for="with_in_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Withdraw Bid On Pending Load</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="with_bid_load" class="custom_togglecheckbox">
	            					<label for="with_bid_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Cancel Load For A Scheduled Or Ready Load</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="cancel_sc_load" class="custom_togglecheckbox">
	            					<label for="cancel_sc_load" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Cancel Load For An On Trip Load</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="can_load_trip" class="custom_togglecheckbox">
	            					<label for="can_load_trip" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            		</div>
            		</div>
            	</div>
            	<div class="bg-white border-r20 borderlightGray mt-4">
            		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
            			<label class="text-lg smallfont darkpurpleColor font-medium">Fleet</label>
            		</div>
            		<div class="2xl:px-10 2xl:py-6 p-4">
            			<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Add Driver</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="add_driver" class="custom_togglecheckbox">
	            					<label for="add_driver" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Edit Driver</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="edit_driver" class="custom_togglecheckbox">
	            					<label for="edit_driver" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Delete Driver</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="delete_driver" class="custom_togglecheckbox">
	            					<label for="delete_driver" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Assign Vehicle To Driver</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="assign_veh_dri" class="custom_togglecheckbox">
	            					<label for="assign_veh_dri" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Modify Driver Status</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="modify_driv_st" class="custom_togglecheckbox">
	            					<label for="modify_driv_st" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Driver Statistics</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_driv_sta" class="custom_togglecheckbox">
	            					<label for="view_driv_sta" class="about_per_check relative"></label>
	            				</div>
	            			</div>
            			</div>
            		</div>
            	</div>
            	<div class="bg-white border-r20 borderlightGray mt-4">
            		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
            			<label class="text-lg smallfont darkpurpleColor font-medium">Partner</label>
            		</div>
            		<div class="2xl:px-10 2xl:py-6 p-4">
            			<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>View Current Partners</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="view_cu_pa" class="custom_togglecheckbox">
	            					<label for="view_cu_pa" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Add New Partners</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="add_new_pa" class="custom_togglecheckbox">
	            					<label for="add_new_pa" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Delete Existing Partners</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="dele_ex_pa" class="custom_togglecheckbox">
	            					<label for="dele_ex_pa" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Accept/Reject Partner Requests</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="accre_pa_re" class="custom_togglecheckbox">
	            					<label for="accre_pa_re" class="about_per_check relative"></label>
	            				</div>
	            			</div>
            			</div>
            		</div>
            	</div>
            	<div class="bg-white border-r20 borderlightGray mt-4">
            		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
            			<label class="text-lg smallfont darkpurpleColor font-medium">Manage User</label>
            		</div>
            		<div class="2xl:px-10 2xl:py-6 p-4">
            			<div class="flex items-center justify-between">
            				<label>Manage User Permissions</label>
            				<div class="inline-flex gap-3 items-center">
            					<input type="checkbox" value="0" id="manage_us_per" class="custom_togglecheckbox">
            					<label for="manage_us_per" class="about_per_check relative cursor-auto"></label>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="bg-white border-r20 borderlightGray mt-4">
            		<div class="2xl:px-10 2xl:py-6 p-4 purpleBottom">
            			<label class="text-lg smallfont darkpurpleColor font-medium">Billing & Subscription</label>
            		</div>
            		<div class="2xl:px-10 2xl:py-6 p-4">
            			<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Modify Plan</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="modi_plan" class="custom_togglecheckbox">
	            					<label for="modi_plan" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Modify Payment Details</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="mo_pa_de" class="custom_togglecheckbox">
	            					<label for="mo_pa_de" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Submit A Feature/Add-On Request</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="sub_fea" class="custom_togglecheckbox">
	            					<label for="sub_fea" class="about_per_check relative"></label>
	            				</div>
	            			</div>
            			</div>
            		</div>
            	</div>
            	<div class="mt-10 text-wcenter">
            		<a href="my-profile.php" class="block darkblur_btn text-center 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">Save Changes</a>
            	</div>
			</div>
		</div>
	</div>
</section>
<div class="modal" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5 redColor font-semibold">Remove Fleet Manager ?</div>
            </div>
            <div class="modal-body py-2 text-wcenter">
                <div class="text-center lg:w-2/3 w-full font-medium">
                	Are you sure you want to delete this Fleet Manager ?
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