jQuery(document).ready(function($) {
    // Close success popup function
    function closeSuccessPopup() {
        $('#successPopup').fadeOut();
    }
    
    // Close success popup when close button is clicked
    $('.success-popup-close').on('click', function() {
        closeSuccessPopup();
    });
    
    // Open modal when service tab is clicked
    $('.service-tab').on('click', function() {
        var selectedService = $(this).data('service');
        $('#selected-service').val(selectedService);
        $('#selected-service-text').text(selectedService);
        $('#contactFormModal').fadeIn();
        $('#form-message').hide();
    });
    
    // Close modal when X is clicked
    $('.close-modal').on('click', function() {
        $('#contactFormModal').fadeOut();
        $('#form-message').hide();
    });
    
    // Close modal when clicking outside the modal content
    $(window).on('click', function(event) {
        if ($(event.target).is('#contactFormModal')) {
            $('#contactFormModal').fadeOut();
            $('#form-message').hide();
        }
        if ($(event.target).is('#successPopup')) {
            closeSuccessPopup();
        }
    });
    
    // Handle form submission
    $('#service-contact-form').on('submit', function(e) {
        e.preventDefault();
        
        var submitBtn = $('#submit-btn');
        var originalText = submitBtn.text();
        
        // Show loading state
        submitBtn.text('Sending...').prop('disabled', true);
        $('#form-message').hide();
        
        // AJAX request
        $.ajax({
            type: 'POST',
            url: service_contact_ajax.ajax_url,
            data: {
                action: 'submit_service_contact_form',
                nonce: service_contact_ajax.nonce,
                selected_service: $('#selected-service').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                message: $('#message').val()
            },
            success: function(response) {
                console.log('Response:', response); // For debugging
                
                if (response.success) {
                    // Show success popup
                    $('#success-message').text(response.data);
                    $('#successPopup').fadeIn();
                    
                    // Reset form and close contact modal
                    $('#service-contact-form')[0].reset();
                    $('#contactFormModal').fadeOut();
                    
                } else {
                    // Show error message in form
                    $('#form-message').removeClass('success').addClass('error').text(response.data).show();
                }
            },
            error: function(xhr, status, error) {
                console.log('Error:', error); // For debugging
                $('#form-message').removeClass('success').addClass('error').text('There was an error sending your message. Please try again.').show();
            },
            complete: function() {
                submitBtn.text(originalText).prop('disabled', false);
            }
        });
    });
});