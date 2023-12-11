// side bar active menu js
$(document).on('click', '.sidenav_nav li a.side-menu', function () {
    $('.sidenav_nav li a.side-menu.side-menu--active').removeClass('side-menu--active');
    $(this).addClass('side-menu--active');
});
// side bar active menu js


// side bar expand js 
$(document).on('click', '.nav_expand', function(event) {
    $(this).parents().find('.side-nav').toggleClass('sidenav_expand');
});
// side bar expand js 


// dashborad tab view
$(document).on('click', 'ul.nav-tabs a', function (e) {
    e.preventDefault();
    $("ul.nav-tabs li").each((index, el) => {
        $(el).removeClass('navtab_active')
    })
    $(this).parent().addClass('navtab_active')
    let targetTab = $(this).attr('href')
    $('.tabView .tab-content > .tab-pane').each((index, tab) => {
        $(tab).removeClass('active')
    })
    $(targetTab).addClass('active')
});
// dashborad tab view


// pagination js 
$(document).on('click','nav.pagination a',function(){
    $('nav.pagination a').removeAttr('aria-current').removeClass('bg-darkpurple text-white').addClass('border');
    $(this).attr('aria-current','page').removeClass('border').addClass('bg-darkpurple text-white');
});
// pagination js 

// modal open close js 
var btn = document.querySelectorAll(".modalButton");
var modals = document.querySelectorAll('.modal');
var spans = document.getElementsByClassName("close_icon");

for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.closest('button').getAttribute("data-target"));
    modal.style.display = "block";
    document.querySelector("body").classList.add("modal-open");
 }
}

for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
        document.querySelector("body").classList.remove("modal-open");
    }
 }
}

function closeModal_ajax(modal_id){
    document.getElementById(modal_id).style.display = "none";
    document.querySelector("body").classList.remove("modal-open");
}

// window.onclick = function(event) {
//     if (event.target.classList.contains('modal')) {
//      for (var index in modals) {
//       if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
//         document.querySelector("body").classList.remove("modal-open");
//      }
//     }
// }

$(document).on('click','.modal button[data-target]',function(){
    var dataTarget = $(this).attr('data-target');
    $(modals).css('display','none');
    $(this).parents().find(dataTarget).show();
});
// modal open close js 


// Edit profile save btn hide show js
$(document).on('click', '.editProfile_btn', function(event) {
    event.preventDefault();
    var originalLabel = $(this).parent().find('.change_labelName').html();
    var labelName = $(this).parent().find('.change_labelName').attr('data-name');
    if(($(this).find('a').attr('href').length) > 0){
        $(this).parent().find('.change_labelName').html(labelName);
        $(this).parent().find('.change_labelName').attr('data-name',originalLabel);
        $(this).find('a').addClass('hidden');
        $(this).find('button').removeClass('hidden');
    }
    else{
        alert('dsds')
        $(this).parent().find('.change_labelName').html(labelName);
        $(this).parent().find('.change_labelName').attr('data-name',originalLabel);
        $(this).find('button').addClass('hidden');
        $(this).find('a').removeClass('hidden');
    }
});
// Edit profile save btn hide show js

// get country code 
$(document).ready(function() {
    $("#country").countrySelect({
        defaultCountry: "in",
        responsiveDropdown: true
    });
});
// get country code 


// get toggle checkbox value
$(document).on('change','input[type="checkbox"].custom_togglecheckbox',function(){
    if($(this).is(':checked') == true){
        $(this).attr('value','1')
    }
    else{
        $(this).attr('value','0')
    }
}) ;
// get toggle checkbox value


 // profile image change js 
 $(document).on('change','#select_profile_pic',function(cf){
    var changeImg = cf.target.files[0].name;
    $(this).parent().find('.profile_img_change').attr('src',URL.createObjectURL(event.target.files[0]));
 });

 // profile image change js 


// tail select js 
$(document).ready(function(){
    // My prfile assign driver - modal
    tail.select(".selectVehicleType", {
        placeholder: 'Select Vehicle Type',
        hideDisabled: false,
        hideSelected: false,
        multiPinSelected: false,
        multiShowCount: false,
        multiSelectGroup: false,
        stayOpen: false,
        animate: false,
    });
    tail.select(".selectCargoType", {
        placeholder: 'Select Cargo Type',
    });
    tail.select(".spacify_cargoType", {
        placeholder: 'Select Driver Status',
    });
    // My prfile assign driver - modal


    // fleet driver - change driver status
    tail.select(".change_driverStatus", {
        placeholder: 'Specify Cargo Type',
    });
    // fleet driver filter modal select js 
    tail.select(".fleet_driver_name", {
        placeholder: 'Select Driver Name',
    });

    tail.select(".fleet_trip_status", {
        placeholder: 'Select Trip Status',
    });

    tail.select(".type_of_vehicle", {
        placeholder: 'Select Vehicle',
    });

    tail.select(".trip_cargo", {
        placeholder: 'Select Cargo',
    });
    // fleet driver filter modal select js 
    // fllet driver view trip filter modal
    tail.select(".shipper_driver_name", {
        placeholder: 'Select Shipper',
        multiple:true,
        multiContainer: ".tail-move-container",
        multiShowCount: false,
    });
    tail.select(".fleet_trip_load", {
        placeholder: 'Select Load Type',
    });
    tail.select(".Pro_type", {
        placeholder: 'Select Product Type',
    });
    tail.select(".type_of_trip", {
        placeholder: 'Select Trip Type',
    });
    tail.select(".deadhead_length", {
        placeholder: 'Select Deadhead Length',
    });
    tail.select(".number_of_drivers", {
        placeholder: 'Select Number of Drivers',
    });
    // fllet driver view trip filter modal

    // private load filter 
    tail.select(".post_load_bidStatus", {
        placeholder: 'Select Bid Status',
    });
    tail.select(".post_load_driver", {
        placeholder: 'Select Driver Name',
    });
});
// tail select js 


// Rating counter js 
$(document).ready(function () {
  $( ".ratings-list li.rating-counter" ).each(function( index ) {
   var count =  $(this).find(".counter-count").text();
    $(this).find(".counter-bar").css({
        'width':count,
        'opacity':count
    });
});
});

// add driver configuration radio button tab view js 
$('.driveAdd_radio [name=bulk_add_driver]').on('change', function(){
  var i = $('[name=bulk_add_driver]').index(this);
  $('.driveAdd_con').removeClass('block');
  $('.driveAdd_con').eq(i).addClass('block');
});

// Range slider JS

$(".modalButton").on("click", function (e) {
    e.preventDefault();
    rangeInit();
});

document.addEventListener("DOMContentLoaded",()=>{
    var rangeParent = document.getElementsByClassName("driver_load_ava");
    if(rangeParent.length == 1){
        rangeInit();
    }
});

function rangeInit() {
    const slideWrapper = document.querySelectorAll(".slide-wrapper");
    slideWrapper.forEach((slide) => {
        slideInit(slide);
    });}

function slideInit(slideElement) {
    const rangeSlider = slideElement.querySelector(".range-slider_main");
    const displayValOne = slideElement.querySelector(".range-value");
    const sliderTrack = slideElement.querySelector(".slider-track");
    const sliderMaxValue = rangeSlider.max;
    function slideOne() {
        let sliderValue = parseInt(rangeSlider.value)

        fillColor();
        if (displayValOne.offsetWidth / 2 > displayValOne.offsetLeft) {
            displayValOne.style.transform = `translateX(0)`;
        } else if ((displayValOne.offsetLeft + displayValOne.offsetWidth / 2) > displayValOne.parentElement.offsetWidth) {
            displayValOne.style.transform = `translateX(-100%)`;
        }
        else {
            displayValOne.style.transform = `translateX(-50%)`;
        }
    }
    function fillColor() {
        let percentSlide = ((rangeSlider.value / sliderMaxValue) * 100).toFixed(2);
        displayValOne.style.left = `${percentSlide}%`;
        displayValOne.textContent = `${rangeSlider.value} kms`;
        sliderTrack.style.background = `linear-gradient(to right, var(--range-color-pallete) ${percentSlide}%, #F5F5F5 ${percentSlide}%`;
    }
    rangeSlider.addEventListener("input", slideOne);
    fillColor();
}
// Range slider JS

// fleet driver sort by modal js
$(document).on('click','.sort_by_list li a', function(){
    $('.sort_by_list li a.selected').removeClass('selected');
    $(this).addClass('selected');
});


// datepicker celedenter js
function dateCelender(as){
  $(as).datepicker({
    onSelect: function () {
      var monthName = $.datepicker.formatDate('M dd, yy', $(as).datepicker('getDate'));
        $('.datepiker_wrapper.active input').val(monthName);
    }
  });
}

// view trip page filter date picker hide show js
$(document).on('click','.date_picker input[type="text"]',function(){
    $('.date_picker .datepiker_wrapper.active').removeClass('active')
    $(this).parent().addClass('active');
    dateCelender($(this).next().find('.datepicker_custom'));
});

$(document).on('click',' .close_date',function(){
    $(this).parents().find('.datepiker_wrapper.active').removeClass('active')
});

// fleet manager add tab js 
$(document).on('click','.fleet_manager_sec .fleet_profile_sec .add_fleet_manager',function(){
    $('.fleet_manager_sec .fleet_profile_sec').hide();
    $('.fleet_manager_sec .fleet_add_profile_sec').show();
})



// Dropdown js for Partner Page
function dropDownHandle(btnSelector) {
  const $btn = $(btnSelector);
  const $dropBox = $('.dropdown_container');

  $btn.on('click', (e) => {
    const $el = $(e.currentTarget);
    const $optionEl = $(e.target);
    const isExpanded = $el.attr('aria-expanded') === 'true';

    $el.attr('aria-expanded', isExpanded ? 'false' : 'true');
    $el.children($dropBox).toggleClass('open_tab');

    const $closestLi = $optionEl.closest('li');
    if ($closestLi.length) {
      $el.find(`.dropdown_container li`).removeClass('selected');
      $optionEl.addClass('selected');
      const selectedValue = $optionEl.attr('data-value');
      $el.find('[data-selected]').attr('data-selected', selectedValue).text(selectedValue);
    }
  });


  // Escape button to close
  $(document).on('keydown', (e) => {
    if (e.key === 'Escape') {
      closeDropdown();
    }
  });
}
dropDownHandle('#country_code');

// assigned driver driver less more 
$(document).on('click','.assign_trip_driver a.expanedDriverList', function(){
    var seeLabel = $(this).html();
    var allLabel = $(this).attr('data-label');
    if(seeLabel == 'See All'){
        $(this).html(allLabel);
        $(this).attr('data-label',seeLabel);
        $(this).parents('.assign_trip_driver').find('.expanedDriverExpand').hide();
        $(this).parents('.assign_trip_driver').find('.togglemenus').show();
    }
    else{
        $(this).html(allLabel);
        $(this).attr('data-label',seeLabel);
        $(this).parents('.assign_trip_driver').find('.expanedDriverExpand').show();
        $(this).parents('.assign_trip_driver').find('.togglemenus').hide();
    }
});