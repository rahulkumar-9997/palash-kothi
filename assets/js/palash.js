$(document).ready(function(){
    $(window).on('load', function () {
        var $container = $('.grid-services');
          $container.isotope({
              filter: '*',
        });
    });
    /*Home Enquiry form*/
        $(document).off('submit', '#homeEnquiryForm').on('submit', '#homeEnquiryForm', function (e) {
            e.preventDefault();
            var form = $(this);
            var submitButton = form.find('button[type="submit"]');
            submitButton.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...');
        
            let checkIn = $(".js-first-date").text().trim().replace(/\s+/g, ' ');
            let checkInOut = $(".js-last-date").text().trim().replace(/\s+/g, ' ');
            let rooms = $(".js-room-select").text().trim();
            let guest = $(".js-select-guest").text().trim().replace(/\s+/g, ' ');
            let children = $(".js-children-select").text().trim();
            
            let isValid = true;
            $(".error-message").remove(); 
            if (checkIn === "Check In - Check Out") {
                $(".checkincheckoutarea").after('<p class="error-message" style="color: red; font-size: 12px;">Please select Check-in & Check-out dates.</p>');
                isValid = false;
            }
            if (rooms === "Rooms" || rooms === "0") {
                $(".roomsarea").after('<p class="error-message" style="color: red; font-size: 12px;">Please select at least 1 room.</p>');
                isValid = false;
            }
            if (guest === "Guests" || guest === "0") {
                $(".guestarea").after('<p class="error-message" style="color: red; font-size: 12px;">Please select at least 1 adult.</p>');
                isValid = false;
            }
            if (!isValid) {
                submitButton.prop('disabled', false).html('Send Enquiry');
                return;
            }
            let queryParams = $.param({
                check_in: checkIn,
                check_out: checkInOut,
                rooms: rooms.replace("Rooms", "").trim(),
                guest: guest.replace("Guest", "").trim(),
            });
        
            window.location.href = "home-enquiry.php?" + queryParams;
        });
    
});
