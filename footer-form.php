
<div class="service-contact-section" style="color: #373A3F; font-family: 'Agrandir Regular', sans-serif; border-radius: 20px;">
    <div class="service-selection">
        <h2 style="color: #373A3F;">Select a Service</h2>
        <div class="service-tabs">
            <div class="service-tab" data-service="Event Management">Event Management</div>
            <div class="service-tab" data-service="OOH Advertising">OOH Advertising</div>
            <div class="service-tab" data-service="Offset & Large Format Printing">Offset & Large Format Printing</div>
            <div class="service-tab" data-service="Web Design">Web Design</div>
            <div class="service-tab" data-service="Web Development">Web Development</div>
            <div class="service-tab" data-service="SEO Optimization">SEO Optimization</div>
            <div class="service-tab" data-service="Content Creation">Content Creation</div>
            <div class="service-tab" data-service="Social Media Management">Social Media Management</div>
            <div class="service-tab" data-service="Brand Strategy">Brand Strategy</div>
            <div class="service-tab" data-service="Digital Marketing">Digital Marketing</div>
            <div class="service-tab" data-service="Graphic Design">Graphic Design</div>
            <div class="service-tab" data-service="Video Production">Video Production</div>
             <div class="service-tab" data-service="Audio Production">Audio Production</div>
             <div class="service-tab" data-service="Training & Capacity Building">Training & Capacity Building</div>
        </div>
    </div>
    
    <div class="contact-form-modal" id="contactFormModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 style="color:#f2f0eb">Contact Us</h2>
            <p style="color:#f2f0eb">You've selected: <span style="color:#f2f0eb" id="selected-service-text"></span></p>
            <form id="service-contact-form">
                <input type="hidden" id="selected-service" name="selected_service">
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" id="name" name="name" required Placeholder="Enter Your Name*">
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" required Placeholder="Enter Your Email*">
                </div>
                <div class="form-group">
                    <label for="message"></label>
                    <textarea id="message" name="message" required Placeholder="Enter Your Mesage"></textarea>
                </div>
                <button type="submit" id="submit-btn" class="custom-buttom">Send Message</button>
                <div id="form-message" style="margin-top: 15px; display: none;"></div>
            </form>
        </div>
    </div>
</div>

<!-- Success Popup Modal -->
<div class="success-popup" id="successPopup">
    <div class="success-popup-content">
        <h3 style="color: #155724; margin-bottom: 15px;">✅ Success!</h3>
        <p id="success-message" style="margin-bottom: 20px; color: #373a3f;">Your message has been sent successfully!</p>
        <button class="success-popup-close">Close</button>
    </div>
</div>

<script>
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
</script>