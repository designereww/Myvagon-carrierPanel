		</div>
    </section>
<!-- The modal, wrapped in an overlay -->
<div class="modal" id="nofication_modal">
    <div class="modal-dialog modal-dialog-lefted-top">
        <div class="modal-content p-7">
            <div class="modal-header b_bottom pb-5 flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" id="vuesax_linear_notification" data-name="vuesax/linear/notification" width="31.818" height="31.818" viewBox="0 0 31.818 31.818" class="mr-2">
                      <g id="notification">
                        <path id="Vector" d="M10.667,0A7.961,7.961,0,0,0,2.712,7.955v3.831a6.335,6.335,0,0,1-.756,2.731L.432,17.049a2.544,2.544,0,0,0,1.432,3.884,27.736,27.736,0,0,0,17.593,0,2.655,2.655,0,0,0,1.432-3.884l-1.525-2.532a6.51,6.51,0,0,1-.742-2.731V7.955A7.978,7.978,0,0,0,10.667,0Z" transform="translate(5.269 3.858)" fill="none" stroke="#9b51e0" stroke-linecap="round" stroke-width="1.5"/>
                        <path id="Vector-2" data-name="Vector" d="M4.905,1.67a8.026,8.026,0,0,0-1.273-.265A8.954,8.954,0,0,0,0,1.67a2.636,2.636,0,0,1,4.905,0Z" transform="translate(13.483 2.572)" fill="none" stroke="#9b51e0" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        <path id="Vector-3" data-name="Vector" d="M7.955,0A3.989,3.989,0,0,1,3.977,3.977,3.991,3.991,0,0,1,1.167,2.811,3.991,3.991,0,0,1,0,0" transform="translate(11.958 25.269)" fill="none" stroke="#9b51e0" stroke-width="1.5"/>
                        <path id="Vector-4" data-name="Vector" d="M0,0H31.818V31.818H0Z" fill="none" opacity="0"/>
                      </g>
                    </svg>
                    <div class="font-semibold font22 largefont text-center darkpurpleColor">Notifications</div>
                </div>
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px]"></button>
            </div>
            <div class="modal-body py-2 mt-4">
                <div class="notifi_count">
                    <a href="javascript:void(0)" class="flex gap-3 notifi_count_bg px-4 py-3 justify-between rounded-xl mb-2">
                        <div class="font-medium">
                            <div class="text-base smallfont">New Message</div>
                            <div class="text-xs smallfont blurColor60">Can you please upload the POD</div>
                        </div>
                        <div class="text-xs">
                            <div class="lightgreyColor">March 17, 2021 8:00am</div>
                            <div class="w-4 h-4 rounded-full bg-darkpurple text-white flex items-center justify-center float-right mt-2">1</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="flex gap-3 mx-4 py-3 justify-between purpleBBorder mb-2">
                        <div class="font-medium">
                            <div class="text-base smallfont">Xpress Ltd</div>
                            <div class="text-xs smallfont blurColor60">New Bid on #12342</div>
                        </div>
                        <div class="text-xs">
                            <div class="lightgreyColor">March 17, 2021 8:00am</div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="flex gap-3 mx-4 py-3 justify-between purpleBBorder mb-2">
                        <div class="font-medium">
                            <div class="text-base smallfont">Xpress Ltd</div>
                            <div class="text-xs smallfont blurColor60">New Bid on #12342</div>
                        </div>
                        <div class="text-xs">
                            <div class="lightgreyColor">March 17, 2021 8:00am</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- my profile add vehicle modal -->
<div class="modal" id="add_vehicle_drop">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5">Assign Vehicle</div>
            </div>
            <div class="modal-body py-2 mt-4">
                <div class="smallfont tailSelect-design">
                    <select class="selectVehicleType">
                         <optgroup label="Select Vehicle Type">
                            <option></option>
                            <option>Semi-Trailer</option>
                            <option>Truck With Trailer</option>
                            <option>Truck</option>
                            <option>Van</option>
                         </optgroup>
                    </select>
                    <select class="selectCargoType" disabled>
                        <optgroup label="Select Cargo Type">
                            <option></option>
                            <option>Dry cargo</option>
                            <option>Refrigerated Cargo</option>
                            <option>Other Cargo</option>
                        </optgroup>
                    </select>
                    <select class="spacify_cargoType" disabled>
                        <optgroup label="Specify Cargo Type">
                            <option></option>
                            <option>B-Train Reefer Trailer</option>
                            <option>Standard Refrigerated (reefer) Trailer</option>
                            <option>Dual-Temperature Trailer</option>
                            <option>Deep-Freeze Trailer</option>
                            <option>Multi-Temperature Trailer</option>
                            <option>Controlled Atmosphere (CA) Trailer</option>
                            <option>Curtain-Sided Reefer Trailer</option>
                            <option>Double-Deck Reefer Trailer</option>
                            <option>Tail Lift Refrigerated Trailer</option>
                        </optgroup>
                    </select>
                    <button id="assignModalClose" class="lg:mt-12 mt-5 border-r20 bg-darkblue p-4 w-full text-white modalButton" data-toggle="modal" data-target="#assignModal">Assign to Driver</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- After assign button select driver modal -->
<div class="modal" id="assignModal">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont darkpurpleColor 2xl:pt-7 pt-5 font-medium">Select Driver</div>
            </div>
            <div class="modal-body py-2">
                <div class="h-[450px] overflow-y-auto">
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="text-sm smallfont darkpurpleColor">No Vehicle Assigned</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="text-sm smallfont darkpurpleColor">No Vehicle Assigned</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="text-sm smallfont darkpurpleColor">No Vehicle Assigned</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="text-sm smallfont darkpurpleColor">No Vehicle Assigned</span>
                         </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 modalButton" data-target="#add_vehicle_drop">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Assign</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fleet driver -> assigned vehicle modal -->
<div class="modal" id="assign_vehicle_modal">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5 font-semibold">Assigned Vehicle</div>
            </div>
            <div class="modal-body py-2">
                <div class="bg-[#9B51E01A] border-r20">
                    <div class="border-b-[0.5px] border-b-[#1f1f4133] p-5 pb-4 font-medium text-sm smallfont">Assigned Vehicle Type</div>
                    <div class="2xl:py-9 py-5 text-center font-bold text-lg smallfont">Semi Trailer, Curtainside</div>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 font-medium modalButton" data-target="#unassign_vehicle_modal" data-toggle="modal">Unassign Vehicle</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton" data-target="#edit_assign_vehicle" data-toggle="modal">Edit Assigned Vehicle</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fleet driver -> Unassign Vehicle -->
<div class="modal" id="unassign_vehicle_modal">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5 redColor font-semibold">Unassign Vehicle</div>
            </div>
            <div class="modal-body py-2">
                <div class="modal-body py-2 text-wcenter">
                    <div class="text-center lg:w-2/3 w-full">
                        Are you sure you want to Unassign the Vehicle for this Driver?
                    </div>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon font-medium">No</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fleet edit assign vehicle modal -->
<div class="modal" id="edit_assign_vehicle">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-lg largefont 2xl:pt-7 pt-5 font-semibold">Edit Assigned Vehicle</div>
            </div>
            <div class="modal-body py-2 mt-4">
                <div class="smallfont tailSelect-design">
                    <select class="selectVehicleType">
                         <optgroup label="Select Vehicle Type">
                            <option></option>
                            <option>Semi-Trailer</option>
                            <option>Truck With Trailer</option>
                            <option>Truck</option>
                            <option>Van</option>
                         </optgroup>
                    </select>
                    <select class="selectCargoType" disabled>
                        <optgroup label="Select Cargo Type">
                            <option></option>
                            <option>Dry cargo</option>
                            <option>Refrigerated Cargo</option>
                            <option>Other Cargo</option>
                        </optgroup>
                    </select>
                    <select class="spacify_cargoType" disabled>
                        <optgroup label="Specify Cargo Type">
                            <option></option>
                            <option>B-Train Reefer Trailer</option>
                            <option>Standard Refrigerated (reefer) Trailer</option>
                            <option>Dual-Temperature Trailer</option>
                            <option>Deep-Freeze Trailer</option>
                            <option>Multi-Temperature Trailer</option>
                            <option>Controlled Atmosphere (CA) Trailer</option>
                            <option>Curtain-Sided Reefer Trailer</option>
                            <option>Double-Deck Reefer Trailer</option>
                            <option>Tail Lift Refrigerated Trailer</option>
                        </optgroup>
                    </select>
                    <button class="lg:mt-12 mt-5 border-r20 bg-darkblue p-4 w-full text-white modalButton close_icon">Assign to Driver</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bid now -> assing modal -->
<div class="modal" id="load-assign-vehicle">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header flex justify-between">
                <div class="text-center text-2xl largefont darkpurpleColor font-medium">Assign Driver</div>
                <button class="text-lg smallfont underline modalButton" data-target="#add_bid_price" data-toggle="modal">Skip & Submit Bid</button>
            </div>
            <div class="modal-body py-2">
                <div class="max-h-[470px] overflow-y-auto">
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unscheduled</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold me-2.5">John Williams Smith</label>
                                 <label class="text-sm smallfont inline-block py-2 px-3 bg-grey rounded-full mb-1">Freelancer</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unscheduled</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="on_trip_blue border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">On Trip</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unassigned</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                         </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3 text-white">
                    <button class="w-1/2 bg-red text-center p-2 2xl:py-3 border-r20 close_icon">Cancel</button>
                    <button class="w-1/2 bg-green text-center p-2 2xl:py-3 border-r20 modalButton" data-target="#add_bid_price" data-toggle="modal">Bid</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bid strat price modal  -->
<div class="modal" id="add_bid_price">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-2 text-wcenter">
                <div class="text-center">
                    <div class="text-center text-3xl largefont 2xl:pt-4 pt-3 mb-3 font-semibold">€ 400</div>
                    <label class="text-lg smallfont darkpurpleColor font-medium">Bid Start Price</label>
                    <input type="number" name="" class="2xl:mt-10 mt-5 w-full placeholder:text-[#9B51E08F] px-6 py-4 text-sm smallfont notifi_count_bg borderpurple rounded-xl" placeholder="Enter your Bid">
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon font-medium close_icon">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton" data-target="#book_bid_load" data-toggle="modal">Bid</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bid strat price Book modal  -->
<div class="modal" id="book_bid_load">
    <div class="modal-dialog modal-dialog-centered">    
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-2 text-wcenter text-base smallfont">
                <div class="text-center">
                    <img src="images/check-mark.png" class="m-auto mb-5">
                </div>
                <div class="text-center">
                    <label class="darkpurpleColor block mb-5 text-2xl smallfont font-medium">Bid Amount Placed : € 400</label>
                    <p class="px-2 text-center">
                        You will receive a confirmation if the Shipper decides to accept your bid and select you to carry this load. until then, continue exploring loads.
                    </p>
                </div>
            </div>
            <div class="modal-footer lg:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3 text-base smallfont">
                    <button class="w-full borderBlue text-center p-2 2xl:py-3 border-r20 bg-darkblue text-white">Book More Loads</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- private load interested assign driver list -->
<div class="modal" id="private_load_interested_driver_list">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header flex justify-between">
                <div class="text-center text-2xl largefont darkpurpleColor font-medium">Assign Driver</div>
                <button class="text-lg smallfont underline">Skip & Submit Interest</button>
            </div>
            <div class="modal-body py-2">
                <div class="max-h-[470px] overflow-y-auto">
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unscheduled</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold me-2.5">John Williams Smith</label>
                                 <label class="text-sm smallfont inline-block py-2 px-3 bg-grey rounded-full mb-1">Freelancer</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unscheduled</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="on_trip_blue border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">On Trip</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 2xl:p-5 p-4 2xl:pt-8 lg:pr-10 mt-5 sm:flex justify-between block" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-3">
                             <div class="bg-darkpurple 2xl:min-w-[80px] min-w-[40px] 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <label class="inline-block 2xl:mb-2 mb-1 text-xl smallfont font-semibold">John Williams Smith</label>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont"><span class="text-base smallfont">4.3</span> (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="md:mt-6 text-end text-sm smallfont">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] font-medium">Unassigned</label>
                             <span class="block darkpurpleColor mb-1">Truck With Trailer</span>
                         </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3 text-white">
                    <button class="w-1/2 bg-red text-center p-2 2xl:py-3 border-r20 close_icon">Cancel</button>
                    <button class="w-1/2 bg-green text-center p-2 2xl:py-3 border-r20 modalButton" data-target="#successassignmsg_modal">Submit Interest</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- private load interested driver assigned msg modal  -->
<div class="modal" id="successassignmsg_modal">
    <div class="modal-dialog modal-dialog-centered">    
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
            </div>
            <div class="modal-body py-2 text-wcenter text-base smallfont">
                <div class="text-center">
                    <img src="images/check-mark.png" class="m-auto mb-5">
                </div>
                <div class="text-center w-full tabletdclr">
                    You will receive a confirmation if the shipper decides to accept your bid and select you to carry this load. until then, continue exploring loads.
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

<!-- schedule trip change confirm modal -->
<div class="modal" id="trip_change_driver">
    <div class="modal-dialog modal-dialog-centered smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 font-semibold darkpurpleColor">Change Driver</div>
            </div>
            <div class="modal-body py-2 text-wcenter">
                <div class="text-center px-4 font-medium">
                    Do you wish to replace Pavlos from this trip, Edo, or do you wish to select another driver from your fleet to replace Pavlos?
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <button class="w-full borderBlue text-center p-2 2xl:py-3 border-r20 close_icon font-medium mb-4">Replace with Edo</button>
                <button class="w-full bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Replace with Other Driver</button>
            </div>
        </div>
    </div>
</div>

<!-- Schedule trip change driver list modal -->
<div class="modal" id="schedule_change_driver_list">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 darkpurpleColor font-medium">Change Driver</div>
            </div>
            <div class="modal-body py-2">
                <div class="h-[450px] pr-1 overflow-y-auto">
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unscheduled</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="on_trip_blue border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">On Trip</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue">Change Driver</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- schedule pending add driver modal -->
<div class="modal" id="schedule_add_driver_list">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 darkpurpleColor font-medium">Add Driver</div>
            </div>
            <div class="modal-body py-2">
                <div class="h-[450px] pr-1 overflow-y-auto">
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between" href="#">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="bg-green text-white border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unscheduled</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="on_trip_blue border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">On Trip</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                    <a class="relative borderpurple border-r20 p-5 lg:pr-10 mt-5 sm:flex items-center justify-between">
                         <div class="flex items-center 2xl:gap-5 gap-3 sm:mt-0 mt-6">
                             <div class="bg-darkpurple 2xl:w-20 w-10 2xl:h-20 h-10 rounded-full flex items-center justify-center text-2xl smallfont font-medium text-white">MR</div>
                             <div>
                                 <div class="mb-2 text-xl smallfont font-semibold">John Williams Smith</div>
                                 <div class="flex items-center 2xl:gap-3 gap-2">
                                     <img src="images/star-solid.svg" class="2xl:w-[20px] w-[15px]" />
                                     <span class="text-sm smallfont">4.3 (34)</span>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-4 text-sm text-end">
                            <label class="bg-lemon border-r20 rounded-t xl:w-[200px] w-[130px] p-2 block text-center absolute top-[-1px] lg:right-[2.5rem] right-[1.25rem] text-sm smallfont font-medium">Unassigned</label>
                             <span class="block smallfont darkpurpleColor">No Vehicle Assigned</span>
                             <span class="block darkpurpleColor">Curtainside</span>
                         </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 close_icon">Cancel</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton" data-target="#schedule_driver_allocate_address">Add Driver</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- schedule pending after add driver allocate for modal -->
<div class="modal" id="schedule_driver_allocate_address">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 darkpurpleColor font-medium">Allocate For</div>
            </div>
            <div class="modal-body py-2">
                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-2">
                        <label class="text-sm smallfont font-medium">Changeover Location</label>
                        <div class="relative tooltip">
                            <img src="images/tooltip-icon.svg">
                            <span class="tooltiptext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                        </div>
                    </div>
                    <button class="w-full text-white font-medium bg-darkpurple rounded-xl p-4 modalButton" data-target="#schedule_driver_addLocation_modal">+ Add Custom Address</button>
                    <div class="my-3">
                        <div class="flex items-center gap-3">
                            <img src="images/location_purple.svg" class="min-w-fit">
                            <p class="text-sm smallfont"><span class="font-semibold">Mithimnis 30,</span> Athina 112 57, Greece</p>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="flex items-center gap-3">
                            <img src="images/date_purple.svg" class="min-w-fit">
                            <p class="text-sm font-semibold smallfont">June 06, 2023, 08:30</p>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-2">
                        <label class="text-sm smallfont font-medium">Start Location</label>
                        <div class="relative tooltip">
                            <img src="images/tooltip-icon.svg">
                            <span class="tooltiptext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                        </div>
                    </div>
                    <button class="text-start w-full bg-semilightapurple darkpurpleColor font-medium px-6 py-3.5 borderpurple rounded-xl bg-[url('images/arrow-down.svg')] bg-no-repeat bg-[center_right_1rem] pr-12 modalButton" data-target="#schedule_driver_allocate_Startaddress">Select Start Location</button>
                    <div class="my-3">
                        <div class="flex items-center gap-3">
                            <img src="images/location_purple.svg" class="min-w-fit">
                            <p class="text-sm smallfont"><span class="font-semibold">Mithimnis 30,</span> Athina 112 57, Greece</p>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="flex items-center gap-3">
                            <img src="images/date_purple.svg" class="min-w-fit">
                            <p class="text-sm font-semibold smallfont">June 06, 2023, 08:30</p>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="mb-2">
                        <label class="text-sm smallfont font-medium">End Location</label>
                    </div>
                    <label class="block bg-semilightapurple darkpurpleColor font-medium px-6 py-4 rounded-xl">XYZ Pvt. Ltd.</label>
                    <div class="my-3">
                        <div class="flex items-center gap-3">
                            <img src="images/location_purple.svg" class="min-w-fit">
                            <p class="text-sm smallfont"><span class="font-semibold">Mithimnis 30,</span> Athina 112 57, Greece</p>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="flex items-center gap-3">
                            <img src="images/date_purple.svg" class="min-w-fit">
                            <p class="text-sm font-semibold smallfont">June 06, 2023, 08:30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 modalButton" data-target="#schedule_add_driver_list">Back</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue opacity-50 modalButton" data-target="#schedule_allocate_driver_successfully" disabled>Allocate Driver</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- schedule allocate for add start location modal -->
<div class="modal" id="schedule_driver_allocate_Startaddress">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 darkpurpleColor font-medium">Select Start Location</div>
            </div>
            <div class="modal-body py-2">
                <div>
                    <div class="my-4">
                        <input type="radio" id="pickupLocation1" name="pickupLocation" class="hidden radioCustom_btn radioButton_top" checked />
                        <label for="pickupLocation1" class="w-full">
                            <div class="flex items-center justify-between px-2">
                                <div>
                                    <div class="text-lg smallfont darkpurpleColor">Pickup Location</div>
                                    <p class="">Mithimnis 30, Loannina 112 57, Greece</p>
                                </div>
                                <div class="flex gap-2 w-auto items-center">
                                    <img src="images/time_icon.svg">
                                    <p class="text-sm smallfont">June 06, 2023, 08:30</p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="my-4">
                        <input type="radio" id="pickupLocation2" name="pickupLocation" class="hidden radioCustom_btn radioButton_top" />
                        <label for="pickupLocation2" class="w-full">
                            <div class="flex items-center justify-between px-2">
                                <div>
                                    <div class="text-lg smallfont darkpurpleColor">Pickup Location</div>
                                    <p class="">Mithimnis 30, Loannina 112 57, Greece</p>
                                </div>
                                <div class="flex gap-2 w-auto items-center">
                                    <img src="images/time_icon.svg">
                                    <p class="text-sm smallfont">June 06, 2023, 08:30</p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="my-4">
                        <input type="radio" id="pickupLocation3" name="pickupLocation" class="hidden radioCustom_btn radioButton_top" />
                        <label for="pickupLocation3" class="w-full">
                            <div class="flex items-center justify-between px-2">
                                <div>
                                    <div class="text-lg smallfont darkpurpleColor">Pickup Location</div>
                                    <p class="">Mithimnis 30, Loannina 112 57, Greece</p>
                                </div>
                                <div class="flex gap-2 w-auto items-center">
                                    <img src="images/time_icon.svg">
                                    <p class="text-sm smallfont">June 06, 2023, 08:30</p>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 modalButton" data-target="#schedule_driver_allocate_address">Back</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton" data-target="#schedule_driver_allocate_address">Select</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- schedule pending after add driver allocate address and time for modal -->
<div class="modal" id="schedule_driver_addLocation_modal">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 darkpurpleColor font-medium">Add Changeover Address</div>
            </div>
            <div class="modal-body py-2">
                <div class="mb-6">
                    <div class="mb-2">
                        <label class="text-sm smallfont font-medium">Define Location</label>
                    </div>
                    <button class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/gps_location.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat text-start modalButton" data-target="#schedule_addAddress_modal">
                        <span class="extradarkgreyColor">Enter Location</span>
                    </button>
                </div>
                <div class="grid grid-cols-2 lg:gap-5 gap-3 2xl:mt-6 mt-4">
                    <div class="date_picker relative">
                        <label class="text-sm smallfont font-medium">Date</label>
                        <div class="datepiker_wrapper">
                            <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/calendar_icon.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Date">
                            <div class="bg-white border-r20 datePicker_design">
                                <div class="flex items-center mb-5 justify-between">
                                    <label class="block font-medium darkpurpleColor">Date</label>
                                    <a class="close_date cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512" fill="#292d32"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
                                </div>
                                <div class="datepicker_custom"></div>
                            </div>
                        </div>
                    </div>
                    <div class="date_picker relative">
                        <label class="text-sm smallfont font-medium">Time</label>
                        <div class="datepiker_wrapper">
                            <input type="text" class="border bg-white extradarkgreyColor block rounded-2xl p-3 w-full mt-2 bg-[url('images/time_icon_bg.svg')] pr-10 bg-[center_right_1rem] bg-no-repeat" placeholder="Time">
                            <div class="bg-white border-r20 datePicker_design">
                                <div class="w-full">
                                    <label class="text-sm smallfont darkpurpleColor block mb-1">Time</label>
                                    <input type="time" name="" class="border bg-[#1F1F410F] extradarkgreyColor block rounded-2xl p-3 w-full" placeholder="Time From">
                                </div>
                                <button class="close_date w-full bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue mt-5" type="button">Done</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <div class="flex items-center lg:gap-5 gap-3">
                    <button class="w-1/2 borderBlue text-center p-2 2xl:py-3 border-r20 modalButton" data-target="#schedule_driver_allocate_address">Back</button>
                    <button class="w-1/2 bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton" data-target="#schedule_driver_allocate_address">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- schedule add address and time modal -->
<div class="modal" id="schedule_addAddress_modal">
    <div class="modal-dialog modal-dialog-centered 2xl:max-w-[750px] lg:max-w-[600px] smallfont">
        <div class="modal-content md:p-7 p-4">
            <div class="modal-header xl:pb-5 pb-2">
                <button data-dismiss="modal" class="close_icon bg-[url('images/close-circle.svg')] bg-center bg-no-repeat w-[24px] h-[24px] float-right"></button>
                <div class="text-center text-2xl largefont 2xl:pt-6 pt-4 darkpurpleColor font-medium">Select Changeover Address</div>
            </div>
            <div class="modal-body py-2">
                <div class="mb-6">
                    <img src="images/google map.png">
                    <div class="flex items-center gap-3 2xl:mt-10 mt-5">
                        <img src="images/green_location.svg" class="min-w-fit">
                        <p class="text-sm smallfont"><span class="font-semibold">Mithimnis 30,</span> Athina 112 57, Greece</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer 2xl:mt-10 mt-5">
                <button class="w-full bg-darkblue text-center p-2 2xl:py-3 border-r20 text-white borderBlue modalButton" data-target="#schedule_driver_addLocation_modal">Select Location</button>
            </div>
        </div>
    </div>
</div>

<!-- schedule driver allocated successfully modal -->
<div class="modal" id="schedule_allocate_driver_successfully">
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
                   Driver Has Been Added Successfully
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


<script src="js/jquery.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="js/tail.select.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/countrySelect.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>