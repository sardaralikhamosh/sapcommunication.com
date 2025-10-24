
<style type="text/css">
    .service-contact-section {
    padding: 60px 20px;
    text-align: center;
}

.service-tabs {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 30px;
}

.service-tab {
    background-color: #fff;
    padding: 15px 25px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #ddd;
    font-family: 'Agrandir Regular', sans-serif;
    color: #373A3F;
}

.service-tab:hover {
    background-color: #e9e9e9;
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.contact-form-modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.modal-content {
    background-color: #373a3f;
    margin: 10% auto;
    padding: 30px;
    border-radius: 8px;
    width: 90%;
    max-width: 500px;
    position: relative;
    color: #373A3F;
    font-family: 'Agrandir Regular', sans-serif;
}

.close-modal {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    color: #f2f0eb;
}

.close-modal:hover {
    color: #f25606;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #373A3F;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-family: 'Agrandir Regular', sans-serif;
    box-sizing: border-box;
    color: #f2f0eb;
    background:#373A3F;
}

.form-group textarea {
    height: 120px;
    resize: vertical;
}

button[type="submit"] {
    background: linear-gradient(to right, #f9d423, #ff4e50);
    color: #f2f0eb;
    border: none;
    padding: 12px 25px;
    border-radius: 20px;
    cursor: pointer;
    font-family: 'Agrandir Regular', sans-serif;
    font-size: 16px;
    transition: background-color 0.3s;
    width: 50%;
}

button[type="submit"]:hover {
    background-color: #2a2c30;
}

button[type="submit"]:disabled {
    background-color: #6c757d;
    cursor: not-allowed;
}

#form-message {
    padding: 15px;
    border-radius: 4px;
    text-align: center;
    font-weight: bold;
    margin-top: 15px;
}

#form-message.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

#form-message.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

/* Success Popup Modal Styles */
.success-popup {
    display: none;
    position: fixed;
    z-index: 1001; /* Higher than contact form modal */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.success-popup-content {
    background-color: #f2f0eb;
    margin: 20% auto;
    padding: 40px 30px;
    border-radius: 8px;
    width: 90%;
    max-width: 400px;
    text-align: center;
    color: #373A3F;
    font-family: 'Agrandir Regular', sans-serif;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}

.success-popup-content h3 {
    color: #155724;
    margin-bottom: 15px;
    font-size: 24px;
}

.success-popup-content p {
    margin-bottom: 25px;
    font-size: 16px;
    line-height: 1.5;
}

.success-popup-close {
    background-color: #373A3F;
    color: #f2f0eb;
    border: none;
    padding: 12px 30px;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'Agrandir Regular', sans-serif;
    font-size: 16px;
    transition: background-color 0.3s;
}

.success-popup-close:hover {
    background-color: #2a2c30;
}

@media (max-width: 768px) {
    .service-tabs {
        flex-direction: column;
        align-items: center;
    }
    
    .service-tab {
        width: 80%;
    }
    
    .modal-content {
        margin: 20% auto;
        width: 85%;
        padding: 20px;
    }
    
    .success-popup-content {
        margin: 30% auto;
        width: 85%;
        padding: 30px 20px;
    }
}
</style>
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