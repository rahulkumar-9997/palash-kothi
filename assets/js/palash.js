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

        /**Finale form submit */
        $(document).off('submit', '#homeEnquiryFinalSubmit').on('submit', '#homeEnquiryFinalSubmit', function (event) {
            event.preventDefault();
            var form = $(this);
            var submitButton = form.find('button[type="submit"]');
            var formData = new FormData(this);
            $('.form-control').removeClass('is-invalid');
            $('.invalid-feedback').remove();
        
            submitButton.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
            showToast('danger', "An unknown error occurred.");
            $.ajax({
                url: 'submit-form-controller.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    submitButton.prop('disabled', false).html('SEND YOUR MESSAGE');
            
                    console.log("AJAX Success Response:", response);
                    if (response.status === 'success') {
                        showToast('success', response.message);
                        form[0].reset();
                    } else if (response.status === 'error' && response.errors) {
                        $.each(response.errors, function(key, value) {
                            var inputField = form.find('[name="' + key + '"]');
                            inputField.addClass('is-invalid');
            
                            if (inputField.next('.invalid-feedback').length === 0) {
                                inputField.after('<div class="invalid-feedback">' + value + '</div>');
                            }
                        });
                    } else {
                        showToast('danger', "An unknown error occurred.");
                    }
                },
                error: function(xhr) {
                    submitButton.prop('disabled', false).html('SEND YOUR MESSAGE');
                    console.log("AJAX Error:", xhr.responseText);
            
                    showToast('danger', "An error occurred! Please try again.");
                }
            });
            
        });
        function showToast(type, message) {
            var toastHTML = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
                message +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span>' +
                '</button>' +
                '</div>';
        
            $("#toast-container").html(toastHTML); 
            setTimeout(function () {
                $(".alert").fadeOut(500, function () {
                    $(this).remove();
                });
            }, 1000000);
        }
        
        /**Finale form submit */
    
});
