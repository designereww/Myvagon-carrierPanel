<?php include('include/header.php') ?>
<section class="myProfile_main">
	<div class="flex lg:flex-nowrap flex-wrap chat_main_sec xl:gap-10 gap-5 mt-10">
		<div class="xl:w-1/5 lg:w-1/4 w-full border-r20 overflow-y-auto greyBG text-sm">
			<div class="2xl:m-7 m-3">
				<div class="text-wcenter 2xl:pb-8 pb-5 grayBorder">
					<div class="relative inline-block">
						<img src="images/profile.png" class="w-24 h-24 borderpurple border-r20 object-cover profile_img_change">
                		<input type="file" name="" id="select_profile_pic" class="hidden">
						<label for="select_profile_pic"  class="w-10 h-10 flex items-center justify-center bg-darkpurple border-r10 absolute right-[-10px] bottom-[-10px]">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
							  <path id="primary" d="M18,7H14l.5-2h3ZM11,7l-.72-1.45A1,1,0,0,0,9.38,5H4A1,1,0,0,0,3,6V18a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V8a1,1,0,0,0-1-1Zm1,4a2,2,0,1,0,2,2A2,2,0,0,0,12,11Z" transform="translate(-2 -4)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
							</svg>
						</label>
					</div>
					<label class="text-2xl largefont font-semibold mt-5 block">Bert Roger</label>
				</div>
				<div class="flex items-center font-semibold justify-center mt-8">
				  <label class="text-lg smallfont mr-5 darkpurpleColor">English</label>
				  <input type="checkbox" id="lang_switch" value="0" class="custom_togglecheckbox">
				  <label class="text-lg ml-5 text-black smallfont" for="lang_switch">Ελληνικά</label>
				</div>
				<div class="navtab_design mt-10">
					<ul class="nav-tabs flex flex-wrap lg:flex-col lg:justify-around">
	                    <li class="lg:w-full sm:w-1/3 w-full navtab_active">
	                        <a href="#my_profile" class="nav-link flex items-center 2xl:px-8 2xl:py-5 p-3">
	                        	<svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="17.25" height="19.25" viewBox="0 0 17.25 19.25">
						  			<g id="Group_70229" data-name="Group 70229" transform="translate(-256.875 -513.875)">
						    		<path id="primary" d="M17,8a5,5,0,1,1-5-5A5,5,0,0,1,17,8Zm1.44,7.6a1,1,0,0,0-1.34-.19,9,9,0,0,1-10.2,0,1,1,0,0,0-1.34.19A7,7,0,0,0,4,20a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1,7,7,0,0,0-1.56-4.4Z" transform="translate(253.5 511.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
						  			</g>
								</svg>
								<div class="text-base smallfont font-medium">My Profile</div>
							</a>
	                    </li>
	                    <li class="lg:w-full sm:w-1/3 w-full">
	                        <a href="#my_fleet_manager" class="nav-link flex items-center 2xl:px-8 2xl:py-5 p-3">
	                        	<svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="21.25" height="19.028" viewBox="0 0 21.25 19.028">
								  <g id="Group_70230" data-name="Group 70230" transform="translate(-254.875 -558.875)">
								    <path id="primary" d="M3,20.667V5.111A1.111,1.111,0,0,1,4.111,4H21.889A1.111,1.111,0,0,1,23,5.111V20.667a1.111,1.111,0,0,1-1.111,1.111H4.111A1.111,1.111,0,0,1,3,20.667ZM13,8.444a2.222,2.222,0,1,0,2.222,2.222A2.222,2.222,0,0,0,13,8.444Zm3.333,7.778A3.333,3.333,0,0,0,13,12.889h0a3.333,3.333,0,0,0-3.333,3.333v1.111h6.667Z" transform="translate(252.5 555.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								  </g>
								</svg>
								<div class="text-base smallfont font-medium">My Fleet Managers</div>
							</a>
	                    </li>
	                    <li class="lg:w-full sm:w-1/3 w-full">
	                        <a href="#notification_setting" class="nav-link flex items-center 2xl:px-8 2xl:py-5 p-3">
	                        	<svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
								  <g id="Group_70231" data-name="Group 70231" transform="translate(-258 -599)">
								    <g id="Group_70224" data-name="Group 70224" transform="translate(243 586)">
								      <g id="vuesax_linear_notification" data-name="vuesax/linear/notification" transform="translate(13 13)">
								        <g id="notification">
								          <path id="Vector" d="M8.381,0a6.255,6.255,0,0,0-6.25,6.25V9.26a4.978,4.978,0,0,1-.594,2.146L.34,13.4a2,2,0,0,0,1.125,3.052,21.793,21.793,0,0,0,13.823,0A2.086,2.086,0,0,0,16.412,13.4l-1.2-1.99a5.115,5.115,0,0,1-.583-2.146V6.25A6.268,6.268,0,0,0,8.381,0Z" transform="translate(4.14 3.031)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-width="1.25"/>
								          <path id="Vector-2" data-name="Vector" d="M3.854,1.313a6.306,6.306,0,0,0-1-.208A7.035,7.035,0,0,0,0,1.313a2.071,2.071,0,0,1,3.854,0Z" transform="translate(10.594 2.021)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								          <path id="Vector-3" data-name="Vector" d="M6.25,0A3.134,3.134,0,0,1,3.125,3.125,3.136,3.136,0,0,1,.917,2.208,3.136,3.136,0,0,1,0,0" transform="translate(9.396 19.854)" fill="none" stroke="#1f1f41" stroke-width="1.25"/>
								          <path id="Vector-4" data-name="Vector" d="M0,0H25V25H0Z" fill="none" opacity="0"/>
								        </g>
								      </g>
								    </g>
								  </g>
								</svg>
								<div class="text-base smallfont font-medium">Notification Settings</div>
							</a>
	                    </li>
	                    <li class="lg:w-full sm:w-1/3 w-full">
	                        <a href="#change_password" class="nav-link flex items-center 2xl:px-8 2xl:py-5 p-3">
	                        	<svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="15.25" height="19.25" viewBox="0 0 15.25 19.25">
								  <g id="Group_70232" data-name="Group 70232" transform="translate(-257.375 -638.375)">
								    <g id="Group_70225" data-name="Group 70225" transform="translate(253 636)">
								      <path id="secondary" d="M16,9V7a4,4,0,0,0-4-4h0A4,4,0,0,0,8,7V9" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								      <rect id="primary" width="14" height="12" rx="1" transform="translate(5 9)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								    </g>
								  </g>
								</svg>
								<div class="text-base smallfont font-medium">Change Password</div>
							</a>
	                    </li>
	                    <li class="lg:w-full sm:w-1/3 w-full">
	                        <a href="#about_myvagon" class="nav-link flex items-center 2xl:px-8 2xl:py-5 p-3">
	                        	<svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="19.25" height="19.25" viewBox="0 0 19.25 19.25">
								  <g id="Group_70233" data-name="Group 70233" transform="translate(-252.375 -688.375)">
								    <g id="Group_70226" data-name="Group 70226" transform="translate(250 686)">
								      <line id="primary-upstroke" x1="0.1" transform="translate(11.95 8)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								      <path id="primary" d="M3,12a9,9,0,0,1,9-9h0a9,9,0,0,1,9,9h0a9,9,0,0,1-9,9h0a9,9,0,0,1-9-9Zm9,1v3" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								    </g>
								  </g>
								</svg>
								<div class="text-base smallfont font-medium">About MYVAGON</div>
							</a>
	                    </li>
	                    <li class="lg:w-full sm:w-1/3 w-full">
	                        <a href="#contact_us_chat" class="nav-link flex items-center 2xl:px-8 2xl:py-5 p-3">
	                        	<svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="19.25" height="19.25" viewBox="0 0 19.25 19.25">
								  <g id="Group_70234" data-name="Group 70234" transform="translate(-252.375 -737.375)">
								    <g id="Group_70227" data-name="Group 70227" transform="translate(250 735)">
								      <path id="primary" d="M3,11c0-4.42,4-8,9-8s9,3.58,9,8-4,8-9,8a9.87,9.87,0,0,1-3-.48L4,21l1.19-4.77A7.5,7.5,0,0,1,3,11Zm9-4v3" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								      <line id="primary-upstroke" x1="0.1" transform="translate(11.95 14.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
								    </g>
								  </g>
								</svg>
								<div class="text-base smallfont font-medium">Contact Us</div>
							</a>
	                    </li>
	                </ul>
	                <button class="flex items-center justify-center p-3 bg-[#FFEFEF] border-r20 mt-10 lg:w-full sm:w-1/3 w-full modalButton" type="button" data-target="#acccount_delete_modal" data-toggle="modal">
                		<img src="images/delete_account_icon.svg" class="mr-2">
                		<span class="text-[#F93333] font-medium text-base smallfont">Delete My Account</span> 
	                </button>
				</div>
			</div>
		</div>
		<div class="xl:w-4/5 lg:w-3/4 w-full border-r20 smallfont greyBG text-sm tabView">
			<div class="tab-content h-full 2xl:m-7 m-3">
                <div class="tab-pane active" id="my_profile">
                	<div class="mb-5">
                		<div class="text-2xl largefont font-semibold grayBorder xl:pb-5 pb-3">My Profile</div>
                	</div>
                	<form action="" class="mb-7">
	                	<div class="bg-semilightapurple rounded-2xl">
	                		<div class="flex items-center justify-between lg:px-5 lg:py-3 p-2">
	                			<div class="text-xl smallfont font-medium change_labelName extradarkgreyColor" data-name="Edit Personal Information">Personal Information</div>
	                			<div class="editProfile_btn">
	                				<a class="flex items-center darkpurpleColor" href="#show_save_btn">
		                				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="mr-2">
										  <path id="Edit_icon" data-name="Edit icon" d="M14.2,0H5.813C2.171,0,0,2.17,0,5.81v8.37C0,17.83,2.171,20,5.813,20h8.374C17.829,20,20,17.83,20,14.19V5.81C20.01,2.17,17.839,0,14.2,0Zm.47,9.25-1.621,1.02.14,2.4c.13,1.34-.33,1.8-1.6,1.95l-5.073.6a1.375,1.375,0,0,1-.61-.04L7.884,13.2a.754.754,0,0,0,0-1.06.767.767,0,0,0-1.071,0L4.842,14.12a1.373,1.373,0,0,1-.04-.61l.59-5.07c.16-1.27.62-1.68,1.961-1.6l2.391.14,1.031-1.63a1.316,1.316,0,0,1,2.131-.08l1.851,1.85A1.356,1.356,0,0,1,14.667,9.25Z" fill="#9b51e0"/>
										</svg>
										<span class="text-base smallfont font-medium">Edit Details</span>
	                				</a>
	                				<button type="submit" class="bg-[#9B51E0] text-white border-r10 px-5 py-2 text-sm smallfont hidden">Save Changes</button>
	                			</div>
	                		</div>
	                	</div>
	                	<div class="grid xl:grid-cols-4 grid-cols-2 lg:gap-5 gap-3 smallfont mt-6">
	                		<div>
	                			<label class="text-sm smallfont font-medium">First Name</label>
	                			<input type="text" placeholder="Bert" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">Last Name</label>
	                			<input type="text" placeholder="Roger" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">Email ID</label>
	                			<input type="email" placeholder="jhonjeel@gmail.com.in" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">Phone Number</label>
	                			<input type="tel" placeholder="+30 12054 45131" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                	</div>
                	</form>
                	<form action="" class="mb-7">
	                	<div class="bg-semilightapurple rounded-2xl">
	                		<div class="flex items-center justify-between lg:px-5 lg:py-3 p-2">
	                			<div class="text-xl smallfont font-medium change_labelName extradarkgreyColor" data-name="Edit Company Details">Company Details</div>
	                			<div class="editProfile_btn">
	                				<a class="flex items-center darkpurpleColor" href="#show_save_btn">
		                				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="mr-2">
										  <path id="Edit_icon" data-name="Edit icon" d="M14.2,0H5.813C2.171,0,0,2.17,0,5.81v8.37C0,17.83,2.171,20,5.813,20h8.374C17.829,20,20,17.83,20,14.19V5.81C20.01,2.17,17.839,0,14.2,0Zm.47,9.25-1.621,1.02.14,2.4c.13,1.34-.33,1.8-1.6,1.95l-5.073.6a1.375,1.375,0,0,1-.61-.04L7.884,13.2a.754.754,0,0,0,0-1.06.767.767,0,0,0-1.071,0L4.842,14.12a1.373,1.373,0,0,1-.04-.61l.59-5.07c.16-1.27.62-1.68,1.961-1.6l2.391.14,1.031-1.63a1.316,1.316,0,0,1,2.131-.08l1.851,1.85A1.356,1.356,0,0,1,14.667,9.25Z" fill="#9b51e0"/>
										</svg>
										<span class="text-base smallfont font-medium">Edit Details</span>
	                				</a>
	                				<button type="submit" class="bg-[#9B51E0] text-white border-r10 px-5 py-2 text-sm smallfont hidden">Save Changes</button>
	                			</div>
	                		</div>
	                	</div>
	                	<div class="grid xl:grid-cols-3 grid-cols-2 lg:gap-5 gap-3 smallfont mt-6">
	                		<div class="">
	                			<label class="text-sm smallfont font-medium">Company Name</label>
	                			<input type="text" placeholder="ABC Company" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                		<div class="">
	                			<label class="text-sm smallfont font-medium">VAT Number</label>
	                			<input type="number" placeholder="1517182022" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                		<div class="">
	                			<label class="text-sm smallfont font-medium">Mobile Number</label>
	                			<input type="tel" placeholder="+30 12054 45131" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                	</div>
	                	<div class="w-full mt-5">
                			<label class="text-sm smallfont font-medium">Comapny Address</label>
                			<input type="tel" placeholder="2895, peloponnese, Western Greece and the lonian, Argolis Regional Unit" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                	</div>
	                	<div class="grid xl:grid-cols-4 grid-cols-2 lg:gap-5 gap-3 smallfont mt-6">
	                		<div>
	                			<label class="text-sm smallfont font-medium">City</label>
	                			<select class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2">
	                				<option>Ahm</option>
	                				<option>Bhavanagar</option>
	                				<option>Surat</option>
	                			</select>
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">State</label>
	                			<select class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2">
	                				<option>Gujarat</option>
	                				<option>MP</option>
	                				<option>UP</option>
	                			</select>
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium mb-2 block">Country</label>
	                			<input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full" id="country" />
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">Postal Code</label>
	                			<input type="number" placeholder="210000" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
	                		</div>
	                	</div>
                	</form>
                	<form action="" class="mb-7">
	                	<div class="bg-semilightapurple rounded-2xl">
	                		<div class="flex items-center justify-between lg:px-5 lg:py-3 p-2">
	                			<div class="text-xl smallfont font-medium change_labelName extradarkgreyColor">All Vehicles</div>
	                			<button data-target="#add_vehicle_drop" data-toggle="modal" class="flex items-center modalButton">
	                				<img src="images/purple_plus.svg" class="mr-2">
	                				<span class="text-base smallfont darkpurpleColor font-medium">Assign Vehicle</span>
	                			</button>
	                		</div>
	                	</div>
	                	<div class="grid grid-cols-1 xl:gap-5 gap-3 smallfont mt-6">
	                		<div>
	                			<label class="text-sm smallfont font-medium">Semi-trailer Truck</label>
	                			<div class="flex items-center flex-wrap gap-2 mt-2">
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Curtainside</label>
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Box/Van Trailer</label>
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Deep-Freeze Trailer</label>
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Livestock Trailer</label>
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Semi-Trailer , Curtainside</label>
	                			</div>
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">Truck With Trailer</label>
	                			<div class="flex items-center flex-wrap gap-2 mt-2">
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Curtainside</label>
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">B-Train Reefer Trailer</label>
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Insulated Trailer</label>
	                			</div>
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium mb-2 block">Van</label>
	                			<div class="flex items-center flex-wrap gap-2 mt-2">
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Small Vans</label>
	                				<label class="inline-block lg:p-4 p-2 bg-white rounded-xl">Efridgerated Vans</label>
	                			</div>
	                		</div>
	                	</div>
                	</form>
                	<form action="" class="mb-7">
	                	<div class="bg-semilightapurple rounded-2xl">
	                		<div class="flex items-center justify-between lg:px-5 lg:py-3 p-2">
	                			<div class="text-xl smallfont font-medium change_labelName extradarkgreyColor" data-name="Edit Payment Details">Payment Details</div>
	                			<div class="editProfile_btn">
	                				<a class="flex items-center darkpurpleColor" href="#show_save_btn">
		                				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="mr-2">
										  <path id="Edit_icon" data-name="Edit icon" d="M14.2,0H5.813C2.171,0,0,2.17,0,5.81v8.37C0,17.83,2.171,20,5.813,20h8.374C17.829,20,20,17.83,20,14.19V5.81C20.01,2.17,17.839,0,14.2,0Zm.47,9.25-1.621,1.02.14,2.4c.13,1.34-.33,1.8-1.6,1.95l-5.073.6a1.375,1.375,0,0,1-.61-.04L7.884,13.2a.754.754,0,0,0,0-1.06.767.767,0,0,0-1.071,0L4.842,14.12a1.373,1.373,0,0,1-.04-.61l.59-5.07c.16-1.27.62-1.68,1.961-1.6l2.391.14,1.031-1.63a1.316,1.316,0,0,1,2.131-.08l1.851,1.85A1.356,1.356,0,0,1,14.667,9.25Z" fill="#9b51e0"/>
										</svg>
										<span class="text-base smallfont font-medium">Edit Details</span>
	                				</a>
	                				<button type="submit" class="bg-[#9B51E0] text-white border-r10 px-5 py-2 text-sm smallfont hidden">Save Changes</button>
	                			</div>
	                		</div>
	                	</div>
	                	<div class="w-full mt-6">
							<label class="text-sm smallfont font-medium mb-3 block">Payment Type</label>
							<div>
	                			<input type="radio" id="cashRadio" name="payment_group" class="hidden radioCustom_btn" />
	                			<label for="cashRadio" class="text-sm smallfont extradarkgreyColor font-medium mr-5 my-1">Cash</label>
	                			<input type="radio" id="bankRadio" name="payment_group" class="hidden radioCustom_btn" />
	                			<label for="bankRadio" class="text-sm smallfont extradarkgreyColor font-medium mr-5 my-1">Bank Transfer</label>
	                			<input type="radio" id="bothRadio" name="payment_group" class="hidden radioCustom_btn" />
	                			<label for="bothRadio" class="text-sm smallfont extradarkgreyColor font-medium mr-5 my-1">Both</label>
	                		</div>
	                	</div>
	                	<div class="grid xl:grid-cols-4 grid-cols-2 lg:gap-5 gap-3 smallfont mt-6">
	                		<div>
	                			<label class="text-sm smallfont font-medium">IBAN</label>
	                			<input type="text" placeholder="GB82 West 4512 2155 8451 23" class="border bg-white extradarkgreyColor block rounded-2xl w-full p-3 mt-2" />
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">Bank Name</label>
								<input type="text" placeholder="Bank Of Greece" class="border bg-white extradarkgreyColor block rounded-2xl w-full p-3 mt-2" />
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium mb-2 block">Account Number</label>
	                			<input type="number" placeholder="414149498" class="border bg-white extradarkgreyColor block rounded-2xl w-full p-3 mt-2" />
	                		</div>
	                		<div>
	                			<label class="text-sm smallfont font-medium">Country</label>
	                			<input type="text" placeholder="Greece" class="border bg-white extradarkgreyColor block rounded-2xl w-full p-3 mt-2" />
	                		</div>
	                	</div>
	                </form>
                </div>
                <div class="tab-pane" id="my_fleet_manager">
                	<div class="fleet_manager_sec">
                		<div class="fleet_profile_sec">
                			<div class="mb-5">
		                		<div class="text-2xl largefont font-semibold grayBorder xl:pb-5 pb-3">My Fleet Managers</div>
		                	</div>
		                	<div class="smallfont">
		                		<input type="text" class="w-full 2xl:p-4 p-3 search_icon placeholder:text-[#1F1F41] border-r20 largefont mb-5 bg-white" placeholder="Search Here by Name">
		                		<div class="overflow-auto h-[550px]">
		                			<table class="table-auto w-full tablePadding">
									  	<thead>
									    	<tr class="bg-semilightapurple border-r20 text-left">
										      	<th class="prt-img"></th>
										      	<th class="prt-name">Name</th>
										      	<th class="prt-email">Email ID</th>
										      	<th class="prt-phne">Phone Number</th>
										      	<th class=""></th>
									    	</tr>
									  	</thead>
									  	<tbody class="extradarkgreyColor">
									  		<tr class="grayBorder">
									  			<td>
									  				<img src="images/user-profile.png" class="img-fluid border-r20 about_fleet_mana">
									  			</td>
									  			<td>Mike Ross</td>
									  			<td>fleetmanager@mail.com</td>
									  			<td>+30 12054 45131</td>
									  			<td>
									  				<div class="flex items-center justify-end 2xl:mr-5">
									  					<a href="fleet-manager-permissions.php" class="text-xs text-white flex items-center px-3 py-2 gap-3 bg-darkpurple border-r20 2xl:mr-10 mr-3">Permissions <img src="images/Permission-key.svg" class="max-w-none"/></a>
									  					<button data-target="#delete_modal" data-toggle="modal" class="flex items-center justify-center w-10 h-10 bg-[#FFEFEF] border-r10 modalButton">
									  						<img src="images/bin.svg" class="" />
									  					</button>
									  				</div>
									  			</td>
									  		</tr>
									  		<tr class="grayBorder">
									  			<td>
									  				<img src="images/user-profile.png" class="img-fluid border-r20 about_fleet_mana">
									  			</td>
									  			<td>Mike Ross</td>
									  			<td>fleetmanager@mail.com</td>
									  			<td>+30 12054 45131</td>
									  			<td>
									  				<div class="flex items-center justify-end 2xl:mr-5">
									  					<a href="fleet-manager-permissions.php" class="text-xs text-white flex items-center px-3 py-2 gap-3 bg-darkpurple border-r20 2xl:mr-10 mr-3">Permissions <img src="images/Permission-key.svg" class="max-w-none"/></a>
									  					<button data-target="#delete_modal" data-toggle="modal" class="flex items-center justify-center w-10 h-10 bg-[#FFEFEF] border-r10 modalButton">
									  						<img src="images/bin.svg" class="" />
									  					</button>
									  				</div>
									  			</td>
									  		</tr>
									  		<tr class="grayBorder">
									  			<td>
									  				<img src="images/user-profile.png" class="img-fluid border-r20 about_fleet_mana">
									  			</td>
									  			<td>Mike Ross</td>
									  			<td>fleetmanager@mail.com</td>
									  			<td>+30 12054 45131</td>
									  			<td>
									  				<div class="flex items-center justify-end 2xl:mr-5">
									  					<a href="fleet-manager-permissions.php" class="text-xs text-white flex items-center px-3 py-2 gap-3 bg-darkpurple border-r20 2xl:mr-10 mr-3">Permissions <img src="images/Permission-key.svg" class="max-w-none"/></a>
									  					<button data-target="#delete_modal" data-toggle="modal" class="flex items-center justify-center w-10 h-10 bg-[#FFEFEF] border-r10 modalButton">
									  						<img src="images/bin.svg" class="" />
									  					</button>
									  				</div>
									  			</td>
									  		</tr>
									  		<tr class="grayBorder">
									  			<td>
									  				<img src="images/user-profile.png" class="img-fluid border-r20 about_fleet_mana">
									  			</td>
									  			<td>Mike Ross</td>
									  			<td>fleetmanager@mail.com</td>
									  			<td>+30 12054 45131</td>
									  			<td>
									  				<div class="flex items-center justify-end 2xl:mr-5">
									  					<a href="fleet-manager-permissions.php" class="text-xs text-white flex items-center px-3 py-2 gap-3 bg-darkpurple border-r20 2xl:mr-10 mr-3">Permissions <img src="images/Permission-key.svg" class="max-w-none"/></a>
									  					<button data-target="#delete_modal" data-toggle="modal" class="flex items-center justify-center w-10 h-10 bg-[#FFEFEF] border-r10 modalButton">
									  						<img src="images/bin.svg" class="" />
									  					</button>
									  				</div>
									  			</td>
									  		</tr>
									  		<tr class="grayBorder">
									  			<td>
									  				<img src="images/user-profile.png" class="img-fluid border-r20 about_fleet_mana">
									  			</td>
									  			<td>Mike Ross</td>
									  			<td>fleetmanager@mail.com</td>
									  			<td>+30 12054 45131</td>
									  			<td>
									  				<div class="flex items-center justify-end 2xl:mr-5">
									  					<a href="fleet-manager-permissions.php" class="text-xs text-white flex items-center px-3 py-2 gap-3 bg-darkpurple border-r20 2xl:mr-10 mr-3">Permissions <img src="images/Permission-key.svg" class="max-w-none"/></a>
									  					<button data-target="#delete_modal" data-toggle="modal" class="flex items-center justify-center w-10 h-10 bg-[#FFEFEF] border-r10 modalButton">
									  						<img src="images/bin.svg" class="" />
									  					</button>
									  				</div>
									  			</td>
									  		</tr>
									  	</tbody>
									</table>
								</div>
								<div class="text-wcenter mt-10">
										<button class="darkblur_btn flex items-center justify-center text-white p-4 border-r20 add_fleet_manager"><img src="images/white_plus.svg" class="mr-2">Add New Fleet Manager</button>
									</div>
		                	</div>
                		</div>
                		<div class="fleet_add_profile_sec hidden">
							<div class="mb-5">
		                		<div class="text-2xl largefont font-semibold grayBorder xl:pb-5 pb-3">Add Fleet Manager
		                		</div>
		                		<div class="mt-5">
		                			<div class="bg-semilightapurple rounded-2xl">
					            		<div class="text-xl smallfont font-medium extradarkgreyColor lg:px-5 lg:py-3 p-2">Fleet Manager</div>
					            	</div>
					            	<form class="">
					            		<div class="grid xl:grid-cols-4 grid-cols-2 lg:gap-5 gap-3 smallfont mt-6">
					                		<div>
					                			<label class="text-sm smallfont font-medium">First Name</label>
					                			<input type="text" placeholder="Bert" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
					                		</div>
					                		<div>
					                			<label class="text-sm smallfont font-medium">Last Name</label>
					                			<input type="text" placeholder="Roger" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
					                		</div>
					                		<div>
					                			<label class="text-sm smallfont font-medium">Email ID</label>
					                			<input type="email" placeholder="jhonjeel@gmail.com.in" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
					                		</div>
					                		<div>
					                			<label class="text-sm smallfont font-medium">Phone Number</label>
					                			<input type="tel" placeholder="+30 12054 45131" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
					                		</div>
					                	</div>
					            	</form>
		                		</div>
		                		<div class="mt-10">
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
					            		<a href="my-profile.php" class="block darkblur_btn text-center 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">Add New Fleet Manager</a>
					            	</div>
								</div>
		                	</div>         			
                		</div>
                	</div>
                </div>
                <div class="tab-pane" id="notification_setting">
                	<div class="text-2xl largefont font-semibold">Notification Settings</div>
					<div class="mt-10">
                		<div class="bg-semilightapurple rounded-2xl">
		            		<div class="text-xl smallfont font-medium extradarkgreyColor lg:px-5 lg:py-3 p-2">Push Notifications</div>
		            	</div>
		            	<div class="bg-white border-r20 borderlightGray mt-6 2xl:px-10 2xl:py-6 p-4">
			            	<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
	            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>All</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="psuh_all" class="custom_togglecheckbox">
		            					<label for="psuh_all" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>New Loads Available</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="push_newLoad" class="custom_togglecheckbox">
		            					<label for="push_newLoad" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Booking & Bidding</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="push_booking" class="custom_togglecheckbox">
		            					<label for="push_booking" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Shipment Progress</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="push_shipment" class="custom_togglecheckbox">
		            					<label for="push_shipment" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Cancellation</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="push_can" class="custom_togglecheckbox">
		            					<label for="push_can" class="about_per_check relative"></label>
		            				</div>
		            			</div>
		            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
		            				<label>Messages</label>
		            				<div class="inline-flex gap-3 items-center">
		            					<input type="checkbox" value="0" id="psuh_msg" class="custom_togglecheckbox">
		            					<label for="psuh_msg" class="about_per_check relative"></label>
		            				</div>
		            			</div>
	            			</div>
            			</div>
                	</div>
                	<div class="2xl:mt-20 mt-10">
                		<div class="bg-semilightapurple rounded-2xl">
		            		<div class="text-xl smallfont font-medium extradarkgreyColor lg:px-5 lg:py-3 p-2">Email Notifications</div>
		            	</div>
		            	<div class="bg-white border-r20 borderlightGray mt-6 2xl:px-10 2xl:py-6 p-4">
		            		<div class="grid md:grid-cols-2 gird-cols-1 xl:gap-x-10 gap-x-5">
            				<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>All</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="email_all" class="custom_togglecheckbox">
	            					<label for="email_all" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>New Loads Available</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="email_newLoad" class="custom_togglecheckbox">
	            					<label for="email_newLoad" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Booking & Bidding</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="email_booking" class="custom_togglecheckbox">
	            					<label for="email_booking" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Shipment Progress</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="email_shipment" class="custom_togglecheckbox">
	            					<label for="email_shipment" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Cancellation</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="email_can" class="custom_togglecheckbox">
	            					<label for="email_can" class="about_per_check relative"></label>
	            				</div>
	            			</div>
	            			<div class="flex items-center justify-between aboutLeftPurple my-2 gap-x-2">
	            				<label>Messages</label>
	            				<div class="inline-flex gap-3 items-center">
	            					<input type="checkbox" value="0" id="email_msg" class="custom_togglecheckbox">
	            					<label for="email_msg" class="about_per_check relative"></label>
	            				</div>
	            			</div>
            				</div>
            			</div>
                	</div>
                	<div class="2xl:mt-20 mt-10 text-wcenter">
            			<a href="my-profile.php" class="block darkblur_btn text-center 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">Update Settings</a>
            		</div>
                </div>
                <div class="tab-pane" id="change_password">
                	<div class="text-2xl largefont font-semibold grayBorder xl:pb-5 pb-3">Change Password</div>
                	<form action="" class="2xl:w-1/4 xl:w-1/3 sm:w-1/2 full">
                		<div class="mt-10">
                			<label class="text-sm smallfont font-medium">Current Password</label>
                			<input type="password" placeholder="enter your current password here" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
                		</div>
                		<div class="mt-5">
                			<label class="text-sm smallfont font-medium">New Password</label>
                			<input type="text" placeholder="enter your new password here" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
                		</div>
                		<div class="mt-5">
                			<label class="text-sm smallfont font-medium">Re-Enter New Password</label>
                			<input type="email" placeholder="please re-enter your new password" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2" />
                		</div>
                		<div class="mt-10">
            				<button class="block darkblur_btn text-center 2xl:p-4 lg:p-3 p-2 text-base smallfont border-r20">Change Password</button>
            			</div>
                	</form>
                </div>
                <div class="tab-pane" id="about_myvagon">
                	<div class="text-2xl largefont font-semibold mb-8">About MYVAGON</div>
				 	<div class="container smallfont mx-auto">
				   		<div class="2xl:m-8 m-4 rounded overflow-hidden">
				     		<div class="group outline-none accordion-section mb-6" tabindex="1">
				       			<div class="group bg-semilightapurple flex justify-between px-7 py-4 items-center transition extradarkgreyColor ease duration-500 cursor-pointer relative font-medium rounded-2xl">
				         			<div class="transition ease duration-500 text-xl smallfont">
							           Privacy Policy
							         </div>
							        <div class="h-6 w-6 bg-[url('images/arrow-down.svg')] bg-no-repeat"></div>
				       			</div>
						       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
						         	<p class="px-7 py-5 text-justify">
						           	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget pharetra sem. Curabitur faucibus ipsum eu commodo porttitor. Proin sit amet neque sed ipsum imperdiet scelerisque. Pellentesque pretium dui nec erat pulvinar finibus. Suspendisse luctus sagittis facilisis. Curabitur a diam id leo euismod semper at vitae velit. Ut sagittis dui in tellus molestie, in rutrum est finibus. Aenean dictum mattis est, nec porta nisl elementum eget. Aenean in neque nec lorem congue tincidunt in eget augue. Nam tristique felis non scelerisque ultricies. Sed at augue quis metus tristique tincidunt.Mauris vel dolor aliquet, sodales mauris et, posuere augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam faucibus orci non sapien ultrices laoreet. Ut in tor um congue at tincidunt leo. Fusce luctus dignissim consequat. Donec mollis scelerisque arcu, non ultricies nisi. Aliquam ac sem ac lectus elementum aliquet et eu nisi. Etiam tincidunt imperdiet mi luctus laoreet. Sed a maximus leo, ut bibendum est. Donec congue ligula in elit pretium, non condimentum quam sodales. Pellentesque rhoncus aliquet libero cursus euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum tempor tristique lectus a egestas. Phasellus dolor lacus, tempus vitae ipsum sed, pharetra rhoncus sem. Integer augue dolor, accumsan nec vulputate vitae, suscipit non elit. Integer sagittis erat lobortis lectus rutrum rhoncus. Nunc eget ante mauris. Nunc sagittis neque nec lorem imperdiet porttitor. Pellentesque sit amet tortor laoreet libero auctor mattis. Cras placerat risus ac lorem rhoncus, a lobortis dolor egestas. Integer tincidunt, purus et faucibus molestie, ante lectus auctor diam, id finibus nulla lacus euismod risus. Aenean commodo volutpat ante vitae pulvinar. Vestibulum eget mi ut felis lobortis viverra.
						         	</p>
						       	</div>
				     		</div>
				     		<div class="group outline-none accordion-section mb-6" tabindex="2">
				       			<div class="group bg-semilightapurple flex justify-between px-7 py-4 items-center transition extradarkgreyColor ease duration-500 cursor-pointer relative font-medium rounded-2xl">
				         			<div class="transition ease duration-500 text-xl smallfont">
							           Terms & Conditions
							         </div>
							        <div class="h-6 w-6 bg-[url('images/arrow-down.svg')] bg-no-repeat"></div>
				       			</div>
						       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
						         	<p class="px-7 py-5 text-justify">
						           	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget pharetra sem. Curabitur faucibus ipsum eu commodo porttitor. Proin sit amet neque sed ipsum imperdiet scelerisque. Pellentesque pretium dui nec erat pulvinar finibus. Suspendisse luctus sagittis facilisis. Curabitur a diam id leo euismod semper at vitae velit. Ut sagittis dui in tellus molestie, in rutrum est finibus. Aenean dictum mattis est, nec porta nisl elementum eget. Aenean in neque nec lorem congue tincidunt in eget augue. Nam tristique felis non scelerisque ultricies. Sed at augue quis metus tristique tincidunt.Mauris vel dolor aliquet, sodales mauris et, posuere augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam faucibus orci non sapien ultrices laoreet. Ut in tor um congue at tincidunt leo. Fusce luctus dignissim consequat. Donec mollis scelerisque arcu, non ultricies nisi. Aliquam ac sem ac lectus elementum aliquet et eu nisi. Etiam tincidunt imperdiet mi luctus laoreet. Sed a maximus leo, ut bibendum est. Donec congue ligula in elit pretium, non condimentum quam sodales. Pellentesque rhoncus aliquet libero cursus euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum tempor tristique lectus a egestas. Phasellus dolor lacus, tempus vitae ipsum sed, pharetra rhoncus sem. Integer augue dolor, accumsan nec vulputate vitae, suscipit non elit. Integer sagittis erat lobortis lectus rutrum rhoncus. Nunc eget ante mauris. Nunc sagittis neque nec lorem imperdiet porttitor. Pellentesque sit amet tortor laoreet libero auctor mattis. Cras placerat risus ac lorem rhoncus, a lobortis dolor egestas. Integer tincidunt, purus et faucibus molestie, ante lectus auctor diam, id finibus nulla lacus euismod risus. Aenean commodo volutpat ante vitae pulvinar. Vestibulum eget mi ut felis lobortis viverra.
						         	</p>
						       	</div>
				     		</div>
				     		<div class="group outline-none accordion-section mb-6" tabindex="3">
				       			<div class="group bg-semilightapurple flex justify-between px-7 py-4 items-center transition extradarkgreyColor ease duration-500 cursor-pointer relative font-medium rounded-2xl">
				         			<div class="transition ease duration-500 text-xl smallfont">
							           License Agreement
							         </div>
							        <div class="h-6 w-6 bg-[url('images/arrow-down.svg')] bg-no-repeat"></div>
				       			</div>
						       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
						         	<p class="px-7 py-5 text-justify">
						           	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget pharetra sem. Curabitur faucibus ipsum eu commodo porttitor. Proin sit amet neque sed ipsum imperdiet scelerisque. Pellentesque pretium dui nec erat pulvinar finibus. Suspendisse luctus sagittis facilisis. Curabitur a diam id leo euismod semper at vitae velit. Ut sagittis dui in tellus molestie, in rutrum est finibus. Aenean dictum mattis est, nec porta nisl elementum eget. Aenean in neque nec lorem congue tincidunt in eget augue. Nam tristique felis non scelerisque ultricies. Sed at augue quis metus tristique tincidunt.Mauris vel dolor aliquet, sodales mauris et, posuere augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam faucibus orci non sapien ultrices laoreet. Ut in tor um congue at tincidunt leo. Fusce luctus dignissim consequat. Donec mollis scelerisque arcu, non ultricies nisi. Aliquam ac sem ac lectus elementum aliquet et eu nisi. Etiam tincidunt imperdiet mi luctus laoreet. Sed a maximus leo, ut bibendum est. Donec congue ligula in elit pretium, non condimentum quam sodales. Pellentesque rhoncus aliquet libero cursus euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum tempor tristique lectus a egestas. Phasellus dolor lacus, tempus vitae ipsum sed, pharetra rhoncus sem. Integer augue dolor, accumsan nec vulputate vitae, suscipit non elit. Integer sagittis erat lobortis lectus rutrum rhoncus. Nunc eget ante mauris. Nunc sagittis neque nec lorem imperdiet porttitor. Pellentesque sit amet tortor laoreet libero auctor mattis. Cras placerat risus ac lorem rhoncus, a lobortis dolor egestas. Integer tincidunt, purus et faucibus molestie, ante lectus auctor diam, id finibus nulla lacus euismod risus. Aenean commodo volutpat ante vitae pulvinar. Vestibulum eget mi ut felis lobortis viverra.
						         	</p>
						       	</div>
				     		</div>
				     		<div class="group outline-none accordion-section mb-6" tabindex="4">
				       			<div class="group bg-semilightapurple flex justify-between px-7 py-4 items-center transition extradarkgreyColor ease duration-500 cursor-pointer relative font-medium rounded-2xl">
				         			<div class="transition ease duration-500 text-xl smallfont">
							           Candidate privacy policy
							         </div>
							        <div class="h-6 w-6 bg-[url('images/arrow-down.svg')] bg-no-repeat"></div>
				       			</div>
						       	<div class="group-focus:max-h-screen max-h-0 overflow-hidden ease duration-500">
						         	<p class="px-7 py-5 text-justify">
						           	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget pharetra sem. Curabitur faucibus ipsum eu commodo porttitor. Proin sit amet neque sed ipsum imperdiet scelerisque. Pellentesque pretium dui nec erat pulvinar finibus. Suspendisse luctus sagittis facilisis. Curabitur a diam id leo euismod semper at vitae velit. Ut sagittis dui in tellus molestie, in rutrum est finibus. Aenean dictum mattis est, nec porta nisl elementum eget. Aenean in neque nec lorem congue tincidunt in eget augue. Nam tristique felis non scelerisque ultricies. Sed at augue quis metus tristique tincidunt.Mauris vel dolor aliquet, sodales mauris et, posuere augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam faucibus orci non sapien ultrices laoreet. Ut in tor um congue at tincidunt leo. Fusce luctus dignissim consequat. Donec mollis scelerisque arcu, non ultricies nisi. Aliquam ac sem ac lectus elementum aliquet et eu nisi. Etiam tincidunt imperdiet mi luctus laoreet. Sed a maximus leo, ut bibendum est. Donec congue ligula in elit pretium, non condimentum quam sodales. Pellentesque rhoncus aliquet libero cursus euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum tempor tristique lectus a egestas. Phasellus dolor lacus, tempus vitae ipsum sed, pharetra rhoncus sem. Integer augue dolor, accumsan nec vulputate vitae, suscipit non elit. Integer sagittis erat lobortis lectus rutrum rhoncus. Nunc eget ante mauris. Nunc sagittis neque nec lorem imperdiet porttitor. Pellentesque sit amet tortor laoreet libero auctor mattis. Cras placerat risus ac lorem rhoncus, a lobortis dolor egestas. Integer tincidunt, purus et faucibus molestie, ante lectus auctor diam, id finibus nulla lacus euismod risus. Aenean commodo volutpat ante vitae pulvinar. Vestibulum eget mi ut felis lobortis viverra.
						         	</p>
						       	</div>
				     		</div>
			   			</div>
				 	</div>
                </div>
                <div class="tab-pane" id="contact_us_chat">
                	<div class="flex flex-col justify-between">
                		<div class="flex items-center grayBorder pb-6">
							<img src="images/chat_profile1.png" class="xl:w-14 w-10 xl:h-14 h-10 border-r20 me-4">
						<div class="text-xl largefont mb-1 font-medium">System Administrative</div>
						</div>
						<div class="overflow-y-auto chat_mess_sec py-5">
							<div class="px-2">
								<div class="flex flex-col items-start">
									<div class="bg-semilightapurple xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px]">Lorem ipsum dolor sit amet, consectetur</div>
									<div class="bg-semilightapurple xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px] rounded-es-none">Lorem ipsum dolor sit amet, consectetur</div>
									<label class="darkgreyColor text-xs block">June 17th, 2023, 14:40</label>
								</div>
								<div class="flex flex-col items-end mt-5">
									<div class="bg-grey xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px]">Lorem ipsum dolor sit amet, consectetur</div>
									<div class="bg-grey xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px] rounded-ee-none">Lorem ipsum dolor sit amet, consectetur</div>
									<label class="darkgreyColor text-xs text-right">June 17th, 2023, 14:40</label>
								</div>
								<div class="flex flex-col items-start">
									<div class="bg-semilightapurple xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px]">Lorem ipsum dolor sit amet, consectetur</div>
									<div class="bg-semilightapurple xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px] rounded-es-none">Lorem ipsum dolor sit amet, consectetur</div>
									<label class="darkgreyColor text-xs block">June 17th, 2023, 14:40</label>
								</div>
								<div class="flex flex-col items-end mt-5">
									<div class="bg-grey xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px]">Lorem ipsum dolor sit amet, consectetur</div>
									<div class="bg-grey xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px] rounded-ee-none">Lorem ipsum dolor sit amet, consectetur</div>
									<label class="darkgreyColor text-xs text-right">June 17th, 2023, 14:40</label>
								</div>
								<div class="flex flex-col items-start">
									<div class="bg-semilightapurple xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px]">Lorem ipsum dolor sit amet, consectetur</div>
									<div class="bg-semilightapurple xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px] rounded-es-none">Lorem ipsum dolor sit amet, consectetur</div>
									<label class="darkgreyColor text-xs block">June 17th, 2023, 14:40</label>
								</div>
								<div class="flex flex-col items-end mt-5">
									<div class="bg-grey xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px]">Lorem ipsum dolor sit amet, consectetur</div>
									<div class="bg-grey xl:p-4 p-2 border-r20 mb-2 min-w-auto max-w-[520px] rounded-ee-none">Lorem ipsum dolor sit amet, consectetur</div>
									<label class="darkgreyColor text-xs text-right">June 17th, 2023, 14:40</label>
								</div>
							</div>
						</div>
						<div class="flex gap-5 mt-5">
							<div class="w-5/6">
								<input type="text" name="" class="px-7 placeholder:blurColor60 h-full w-full border-r20 border" placeholder="Write your Message">
							</div>
							<a class="w-1/6 bg-darkpurple text-white flex items-center justify-center p-4 border-r20" href="javascript:void(0)">
								<span class="me-1">Send</span>
								<svg xmlns="http://www.w3.org/2000/svg" id="send" width="24" height="24" viewBox="0 0 24 24">
								  <path id="Vector" d="M6.46,1.229l8.56,4.28c3.84,1.92,3.84,5.06,0,6.98l-8.56,4.28c-5.76,2.88-8.11.52-5.23-5.23l.87-1.73a2.046,2.046,0,0,0,0-1.61l-.87-1.74C-1.65.709.71-1.651,6.46,1.229Z" transform="translate(3.05 3.001)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								  <path id="Vector-2" data-name="Vector" d="M0,0H5.4" transform="translate(5.44 12)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								  <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none" opacity="0"/>
								</svg>
							</a>
						</div>
                	</div>
                </div>
            </div>
		</div>
	</div>
</section>

<!-- permission delete modal  -->
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

<!-- account delete modal  -->
<div class="modal" id="acccount_delete_modal">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5 redColor font-semibold">Delete Account?</div>
            </div>
            <div class="modal-body py-2 text-wcenter">
                <div class="text-center font-medium">
                	Are you sure you want to delete your account? Doing so may affect the data you have within the platform
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
            	<div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon font-medium">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>
