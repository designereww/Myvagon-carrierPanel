<?php include('include/header.php') ?>
<section class="partners_main_sec smallfont">
	<div class="py-8 navtab_design flex justify-between align-middle">
		<ul class="nav nav-tabs gap-4 items-center flex text-base smallfont font-medium">
            <li class="nav-item text-center navtab_active">
              <a class="nav-link w-full lg:py-4 py-3 xl:px-10 px-5 bg-white border-r20 borderpurple darkpurpleColor" href="#partner">Your Partners <span>(24)</span></a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link w-full lg:py-4 py-3 xl:px-10 px-5 bg-white border-r20 borderpurple darkpurpleColor" href="#requests">Partner Requests <span>(12)</span></a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link w-full lg:py-4 py-3 xl:px-10 px-5 bg-white border-r20 borderpurple darkpurpleColor" href="#invitedpartner">Invited Partners <span>(2)</span></a>
            </li>	
        </ul>
        <ul class="nav nav-tabs gap-4 items-center flex text-base smallfont font-medium">
        	<li class="nav-item text-center">
	        	<a href="#addpartner" class="xl:px-24 lg:px-16 px-10 lg:py-4 py-3 text-base smallfont darkpurpleColor borderpurple border-r20 flex items-center justify-center">+ Add New Partner</a>
	        </li>
	    </ul>
	</div>
	<div class="tabView">
		<div class="tab-content table-design">
			<div class="tab-pane active overflow-x-auto" id="partner">	
				<table class="w-full text-left font-regular">
					<thead class="tablehead-bg font-medium text-lg smallfont darkblueColor">
						<tr>
							<th class="prt-img"></th>
							<th class="prt-type">Type</th>
							<th class="prt-name">Name</th>
							<th class="prt-email">Email ID</th>
							<th class="prt-phne">Phone Number</th>
							<th class="prt-phne">VAT Number</th>
							<th class="prt-loctn">Location</th>
							<th>Shipments</th>
							<th></th>
						</tr>
					</thead>
					<tbody class="text-base smallfont tabletdclr">
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="font-bold">30</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Freelancer</td>
							<td class="prt-name">Mike Ross</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="font-bold">30</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Freelancer</td>
							<td class="prt-name">Mike Ross</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="font-bold">30</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="font-bold">30</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="font-bold">30</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane overflow-x-auto" id="requests">
				<table class="w-full text-left font-regular">
					<thead class="tablehead-bg font-medium text-lg smallfont darkblueColor">
						<tr>
							<th class="prt-img"></th>
							<th class="prt-type">Type</th>
							<th class="prt-name">Name</th>
							<th class="prt-email">Email ID</th>
							<th>Shipments</th>
							<th></th>
						</tr>
					</thead>
					<tbody class="text-base smallfont tabletdclr">
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="font-bold">30</td>
							<td>
								<div class="flex gap-5 justify-end">
									<a href="#" class="bg-red text-white border-r20 partner-tablebtn">Reject</a>
									<a href="#" class="bg-green text-white border-r20 partner-tablebtn">Accept</a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Freelancer</td>
							<td class="prt-name">Mike Ross</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="font-bold">30</td>
							<td>
								<div class="flex gap-5 justify-end">
									<a href="#" class="bg-red text-white border-r20 partner-tablebtn">Reject</a>
									<a href="#" class="bg-green text-white border-r20 partner-tablebtn">Accept</a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Freelancer</td>
							<td class="prt-name">Mike Ross</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="font-bold">30</td>
							<td>
								<div class="flex gap-5 justify-end">
									<a href="#" class="bg-red text-white border-r20 partner-tablebtn">Reject</a>
									<a href="#" class="bg-green text-white border-r20 partner-tablebtn">Accept</a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="font-bold">30</td>
							<td>
								<div class="flex gap-5 justify-end">
									<a href="#" class="bg-red text-white border-r20 partner-tablebtn">Reject</a>
									<a href="#" class="bg-green text-white border-r20 partner-tablebtn">Accept</a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="font-bold">30</td>
							<td>
								<div class="flex gap-5 justify-end">
									<a href="#" class="bg-red text-white border-r20 partner-tablebtn">Reject</a>
									<a href="#" class="bg-green text-white border-r20 partner-tablebtn">Accept</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane overflow-x-auto" id="invitedpartner">	
				<table class="w-full text-left font-regular">
					<thead class="tablehead-bg font-medium text-lg smallfont darkblueColor">
						<tr>
							<th class="prt-img"></th>
							<th class="prt-type">Type</th>
							<th class="prt-name">Name</th>
							<th class="prt-email">Email ID</th>
							<th class="prt-phne">Phone Number</th>
							<th class="prt-phne">VAT Number</th>
							<th class="prt-loctn">Location</th>
							<th class="prt-invitsent"></th>
							<th></th>
						</tr>
					</thead>
					<tbody class="text-base smallfont tabletdclr">
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="prt-invitsent">
								<a href="#" class="purplecolor px-5 py-1 border-r20 bg-semilightapurple">Invite Sent</a>
							</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Freelancer</td>
							<td class="prt-name">Mike Ross</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="prt-invitsent">
								<a href="#" class="purplecolor px-5 py-1 border-r20 bg-semilightapurple">Invite Sent</a>
							</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Freelancer</td>
							<td class="prt-name">Mike Ross</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="prt-invitsent">
								<a href="#" class="purplecolor px-5 py-1 border-r20 bg-semilightapurple">Invite Sent</a>
							</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="prt-invitsent">
								<a href="#" class="purplecolor px-5 py-1 border-r20 bg-semilightapurple">Invite Sent</a>
							</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
						<tr>
							<td class="prt-img">
								<img src="images/chat_profile1.png">
							</td>
							<td class="prt-type">Shipper</td>
							<td class="prt-name">EllenDegeneras Ltd</td>
							<td class="prt-email">driverdummy@mail.com</td>
							<td class="prt-phne">+30 12054 45131</td>
							<td class="prt-phne">1516549465</td>
							<td class="prt-loctn">Athens, 30601</td>
							<td class="prt-invitsent">
								<a href="#" class="purplecolor px-5 py-1 border-r20 bg-semilightapurple">Invite Sent</a>
							</td>
							<td>
								<button data-target="#delete_modal" data-toggle="modal" class="dlte-icon flex items-center justify-center modalButton">
									<img src="images/delete.svg">
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="addpartner">	
				<div class="border-r20 purpleBorder mb-14">
					<p class="purplecolor border-b purpleBorder border-0 py-4 px-8 font-medium text-lg smallfont">Add New Partner</p>
					<div class="p-10">
						<form action="" class="">
		                	<div class="w-full">
								<label class="text-sm smallfont font-medium mb-4 block">Partner Role</label>
								<div class="darkblueColor mb-6 add_partner_option">
		                			<input type="radio" id="cashRadio" name="payment_group" class="hidden radioCustom_btn" checked>
		                			<label for="cashRadio" class="font-medium mr-5 my-1">Shipper</label>
		                			<input type="radio" id="bankRadio" name="payment_group" class="hidden radioCustom_btn">
		                			<label for="bankRadio" class="font-medium mr-5 my-1">Freelancer</label>
		                		</div>
		                		<div class="grid grid-cols-11 relative">
		                			<div class="flex-1 sm:col-span-5 col-span-12 row-start-2">
		                				<label class="text-sm smallfont font-medium mb-3 block">Phone Number</label>
				                        <div class="phone_dropdown text-base smallfont">
				                        	<div class="flex gap-3">
					                        	<img src="images/mobile.svg">
					                        	<select class="pl-1 phoneDrop bg-none cursor-pointer text-center border-r">
                                    	<option>+01</option>
                                    	<option>+02</option>
                                    	<option>+03</option>
                                    	<option>+04</option>
																		</select>
				                        	</div>
				                        	<input type="text" name="" placeholder="Phone Number" class="form-control grey-box">
				                        </div>
				                    </div>
				                    <span class="text-white rounded-md or-sec sm:row-start-2 row-start-3 sm:my-0 my-4 bg-darkpurple text-center">OR</span>
			                    	<div class="flex-1 sm:col-span-6 col-span-12 sm:col-start-7 col=-start-1 sm:row-start-2 row-start-4">
		                				<label class="text-sm smallfont font-medium mb-3 block">Phone Number</label>
				                        <div class="phone_dropdown text-base smallfont">
				                        	<div class="flex gap-3">
					                        	<img src="images/mobile.svg">
					                        	<select class="pl-1 phoneDrop bg-none cursor-pointer text-center border-r">
                                    	<option>+30</option>
                                    	<option>+91</option>
                                    	<option>+03</option>
                                    	<option>+04</option>
																		</select>
				                        	</div>
				                        	<input type="text" name="" placeholder="Phone Number" class="form-control grey-box">
				                        </div>
				                    </div>
		                		</div>
		                		<div class="mt-10">
					                <button data-target="#successinvitesent_modal" data-toggle="modal" class="darkblur_btn flex items-center justify-center text-white p-4 border-r20 m-auto inviteprnrbtn modalButton">Invite Partner</button>
					            </div>
		                	</div>
	                	</form>
					</div>
				</div>
				<div class="bg-semilightapurple extradarkgreyColor font-medium py-4 px-6 border-r10 mb-6 text-lg largefont">
					Partner Suggestions
				</div>
				<div class="overflow-x-auto">
					<table class="w-full text-left font-regular">
						<thead class="tablehead-bg font-medium text-lg smallfont darkblueColor">
							<tr>
								<th class="prt-img"></th>
								<th class="prt-type">Type</th>
								<th class="prt-name">Name</th>
								<th class="prt-email">Email ID</th>
								<th class="prt-phne">Phone Number</th>
								<th class="prt-phne">VAT Number</th>
								<th class="prt-loctn">Location</th>
								<th>Shipments</th>
								<th></th>
							</tr>
						</thead>
						<tbody class="text-base smallfont tabletdclr">
							<tr>
								<td class="prt-img">
									<img src="images/chat_profile1.png">
								</td>
								<td class="prt-type">Shipper</td> 
								<td class="prt-name">EllenDegeneras Ltd</td>
								<td class="prt-email">driverdummy@mail.com</td>
								<td class="prt-phne">+30 12054 45131</td>
								<td class="prt-phne">1516549465</td>
								<td class="prt-loctn">Athens, 30601</td>
								<td class="font-bold">30</td>
								<td>
									<a href="#" class="text-white px-5 py-1 border-r20 bg-darkpurple">Invite</a>
								</td>
							</tr>
							<tr>
								<td class="prt-img">
									<img src="images/chat_profile1.png">
								</td>
								<td class="prt-type">Shipper</td>
								<td class="prt-name">EllenDegeneras Ltd</td>
								<td class="prt-email">driverdummy@mail.com</td>
								<td class="prt-phne">+30 12054 45131</td>
								<td class="prt-phne">1516549465</td>
								<td class="prt-loctn">Athens, 30601</td>
								<td class="font-bold">30</td>
								<td>
									<a href="#" class="text-white px-5 py-1 border-r20 bg-darkpurple">Invite</a>
								</td>
							</tr>
							<tr>
								<td class="prt-img">
									<img src="images/chat_profile1.png">
								</td>
								<td class="prt-type">Shipper</td>
								<td class="prt-name">EllenDegeneras Ltd</td>
								<td class="prt-email">driverdummy@mail.com</td>
								<td class="prt-phne">+30 12054 45131</td>
								<td class="prt-phne">1516549465</td>
								<td class="prt-loctn">Athens, 30601</td>
								<td class="font-bold">30</td>
								<td>
									<a href="#" class="text-white px-5 py-1 border-r20 bg-darkpurple">Invite</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<nav class="pagination flex flex-row flex-nowrap justify-center items-center my-7" aria-label="Pagination">
		    <a class="flex w-10 h-10 sm:mr-2 mr-1 justify-center items-center bg-semilightapurple border-r10" href="#" title="Previous Page">
		        <span class="sr-only">Previous Page</span>
		        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				  <g id="vuesax_linear_arrow-down" data-name="vuesax/linear/arrow-down" transform="translate(24) rotate(90)">
				    <g id="arrow-down">
				      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
				      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"></path>
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
				      <path id="Vector" d="M15.84,0,9.32,6.52a1.986,1.986,0,0,1-2.8,0L0,0" transform="translate(4.08 8.95)" fill="none" stroke="#1f1f41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
				      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"></path>
				    </g>
				  </g>
				</svg>
		    </a>
		</nav>
	</div>
</section>


<!--- partner delete popup start --->
<div class="modal" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-7 pt-5 redColor font-semibold">Remove Partner</div>
            </div>
            <div class="modal-body py-2 text-wcenter text-base smallfont">
                <div class="text-center lg:w-2/3 w-full font-medium">
                	Are you sure you want to remove this Partner?
                </div>
            </div>
            <div class="modal-footer lg:mt-10 mt-5">
            	<div class="flex items-center lg:gap-5 gap-3 text-base smallfont">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon">Cancel</button>
                    <button data-target="#successfullyremove_modal" data-toggle="modal" class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- partner delete popup end --->

<!--- partner successfully remove popup start --->
<div class="modal" id="successfullyremove_modal">
    <div class="modal-dialog modal-dialog-centered">	
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-2 text-wcenter text-base smallfont">
                <div class="text-center">
                	<img src="images/check-mark.png" class="m-auto mb-5">
                </div>
                <div class="text-center lg:w-2/3 w-full font-medium">
                	Partner Removed Successfully
                </div>
            </div>
            <div class="modal-footer lg:mt-10 mt-5">
            	<div class="flex items-center lg:gap-5 gap-3 text-base smallfont">
                    <button class="w-full borderBlue text-center p-2 2xl:py-3 border-r20 close_icon bg-darkblue text-white">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- partner successfully remove popup end --->

<!--- partner invite sent successfully popup start --->
<div class="modal" id="successinvitesent_modal">
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
                	Partner Invite Has Been Sent Successfully
                </div>
            </div>
            <div class="modal-footer lg:mt-10 mt-5">
            	<div class="flex items-center lg:gap-5 gap-3 text-base smallfont">
                    <button class="w-full borderBlue text-center p-2 2xl:py-3 border-r20 close_icon bg-darkblue text-white">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- partner invite sent successfully popup end --->

<?php include('include/footer.php') ?>