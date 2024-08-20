<?php include 'partial/header.php';?>
<style>
   form#form-contact-us, form#form-appointment {
   background: #FAFBFC;
   box-shadow: 0px 4px 40px 0px rgba(0, 0, 0, 0.08);
   }
   .loc_head{ font-size:20px;}
</style>
<link rel="stylesheet" href="/assets/calendar/ui-calendar.css">
<div class="container-fluid contact_us p-0">
   <div class="banner_2 col-12 p-0" style="background-image: url('/assets/images/banners/contactbanner.webp');">
      <div class="bg_circle">
         <img src="<?=IMG_BASE_URL ?>illumination/banner_head.png"  alt="allcare4u illustration"  class="w-100">
         <h1 class="m-0 text-white font-primary">Contact Us</h1>
      </div>
   </div>
</div>
<div class="container-fluid p-0 bg_illustration-ptrn3">
   <div class="container">
      <div class="row mt-5 w-sm-100" style="text-align: center; margin: auto;">
         <div class="col-12 col-sm-12">
            <p>If you have any queries regarding our services, our centres or appointment, feel free to reach out to us. <br class="d-md-block d-none">Our team is always ready to hear from you and guide you in the right direction.</p>
         </div>
      </div>
      <div class="row mb-5 justify-content-center">
         <div class="contactform-tab col-lg-auto col-md-auto col-sm-12 pl-0 mt-lg-4">
            <div class="tab-card-header d-flex justify-content-center mt-4 ml-lg-5">
               <ul class="nav nav-tabs card-header-tabs d-lg-block text-right" id="myTab" role="tablist">
                  <li class="nav-item  mb-lg-4">
                     <a class="nav-link active" id="two-tab" data-toggle="tab" href="#meeting-link" role="tab" aria-controls="Two" aria-selected="false">Schedule an Appointment</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">General Inquiries</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="tab-content mt-3 form-size" id="myTabContent">
               <div class="tab-pane fade p-3 " id="one" role="tabpanel" aria-labelledby="one-tab">
                  <!--<form id="form-contact-us" class="p-4" onsubmit="return ac4u_contact_form_submit()">
                     <iframe data-tally-src="https://tally.so/embed/wa67RX?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="100" frameborder="0" marginheight="0" marginwidth="0" title="General Inquiries"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
                  </form>-->
                  <form id="form-contact-us" class="p-4" onsubmit="return ac4u_contact_form_submit()">
                     <div class="p-lg-4 p-sm-0">
                        <div class="row">
                           <div class="col-12 pb-2">
                              <lable class="required">Full Name</lable>
                              <input type="text" name="name" class="form-control mt-2 mb-2" placeholder="E.g. John Smith" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 pb-2">
                              <lable class="required">Mobile Number</lable>
                              <input type="text" id="phone1" name="phone" class="form-control phone-input mt-2 mb-2" onkeypress="phoneno()" maxlength="12" placeholder="E.g. 999-9999-999">
                                 
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 pb-2">
                              <lable class="required">Email Address</lable>
                              <input type="email" name="email" pattern="[^@\s]+@[^@\s]+\.[a-zA-Z]{2,14}" class="form-control mt-2 mb-2" placeholder="E.g. johnsmith@mail.com" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 pb-2">
                              <lable class="required">Reason for appointment</lable>
                              <textarea  name="message" class="form-control mt-2" id="exampleFormControlTextarea1" rows="5" placeholder=" E.g. Regular checkup"></textarea>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 pb-2">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="g-recaptcha"  
                                       data-callback="ac4u_contact_captcha_callback"
                                       data-expired-callback="ac4u_contact_captcha_expired_callback"
                                       data-sitekey="<?=RECAPTCHA_SITE_KEY ?>">
                                    </div>
                                 </div>
                                 <div class="col-12" form-messages></div>
                                 <br/>
                              </div>
                              <button type="submit" class="btn btn-primary" disabled>Submit</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane fade p-3 show active" id="meeting-link" role="tabpanel" aria-labelledby="two-tab">
                  <div class="container-fluid p-0">
                  <!--<form id="form-contact-us" class="p-4" onsubmit="return ac4u_contact_form_submit()">
                     <iframe data-tally-src="https://tally.so/embed/wvAQyd?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="100" frameborder="0" marginheight="0" marginwidth="0" title="Schedule an Appointment"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
                  </form>-->
                    <form id="form-appointment" class="p-4" onsubmit="return ac4u_appointment_form_submit()">
                        <div class="p-lg-4 p-sm-0">
                           <div class="row">
                              <div class="col-12 pb-2">
                                 <lable class="required">Full Name</lable>
                                 <input type="text" name="name" class="form-control mt-2 mb-2" placeholder="E.g. John Smith" required>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 pb-2">
                                 <lable class="required">Mobile Number</lable>
                                 <input type="text" id="phone2" name="phone_number" class="form-control phone-input mt-2 mb-2" onkeypress="phoneno()" maxlength="12" placeholder="E.g. 999-9999-999" required>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 pb-2">
                                 <lable class="required">Email Address</lable>
                                 <input type="email" name="email_address" pattern="[^@\s]+@[^@\s]+\.[a-zA-Z]{2,14}" class="form-control mt-2 mb-2" placeholder="E.g. johnsmith@mail.com" required>
                              </div>
                           </div>
                           <div class="row mb-2">
                           <div class="col-12 pb-2">
                            <lable class="required">Office Location</lable>
                           </div>
                              <div class="col-12 col-lg-4 col-md-4">
                                 <label class="checkcontainer text-black">Clearwater
                                 <input type="radio" name="office" checked="checked" value="Clearwater : 1745 S Highland Avenue" id="radios1" required>
                                 <span class="radiobtn" for="office"></span>
                                 </label>
                              </div>
                              <div class="col-12 col-lg-4 col-md-4">
                                 <label class="checkcontainer text-black">Palm Harbor
                                 <input type="radio" name="office" value="Palm Harbor : 1115 Florida Avenue" id="radios1" required>
                                 <span class="radiobtn" for="office"></span>
                                 </label>
                              </div>
                              <div class="col-12 col-lg-4 col-md-4">
                                 <label class="checkcontainer text-black">Seminole
                                 <input type="radio" name="office" value="Seminole : 8900 Park Blvd N" id="radios1" required>
                                 <span class="radiobtn" for="office"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 pb-2">
                                 <lable class="required">Select Date</lable>
                                 <input type="date" name="date" id="date" class="form-control mt-2 mb-2 datefield-size text-uppercase" placeholder="Select a date for your appointment" required>
                                 </div>
                           </div>
                           <div class="row">
                           <div class="col-12 pb-2">
                              <lable class="required">Reason for appointment</lable>
                              <textarea  name="reason" class="form-control mt-2" id="exampleFormControlTextarea1" rows="5" placeholder=" E.g. Healthcare Checkup"></textarea>
                           </div>
                        </div>
                           <div class="row">
                              <div class="col-12 pb-2">
                                 <div class="g-recaptcha"  
                                    data-callback="ac4u_appointment_captcha_callback"
                                       data-expired-callback="ac4u_appointment_captcha_expired_callback"
                                    data-sitekey="<?=RECAPTCHA_SITE_KEY ?>">
                                 </div>
                              </div>
                              <div class="col-12" form-messages></div>
                           </div>
                           <div class="row">
                              <div class="col-12 pb-2 col-md-4 mt-2">
                                 <button type="submit" class="btn btn-primary" disabled>Submit</button>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="container-fluid contact_us p-0">
   <div class="container mt-5 mb-5">
      <div class="row mt-4">
         <div id="clearwater" class="col-lg-4 col-sm-12 mb-3">
            <h3 class="loc_head">Clearwater</h3>
            <div class="address_body w-75">
               <p><b>Address</b>: 1745 S. Highland Avenue, Clearwater, FL 33756<br/>
                  <b>Time:</b> 8am – 5pm <br/>
                  <b>Phone</b>: 727-587-0377<br/>
                  <b>Fax</b>: 727-587-0527<br/>
               </p>
            </div>
            <a href="<?= BASE_URL ?>clearwater" class="btn btn-outline-primary mb-4 w-100">More about this location <i class="fa-solid fa-arrow-right"></i></a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.9587952625175!2d-82.77727382512195!3d27.933908415463566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2f07cd0ffc495%3A0xf45d5c9e726c9792!2s1745%20S%20Highland%20Ave%2C%20Clearwater%2C%20FL%2033756%2C%20USA!5e0!3m2!1sen!2sin!4v1694278600796!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div id="palm-harbor" class="col-lg-4 col-sm-12 mb-3">
            <h3 class="loc_head">Palm Harbor</h3>
            <div class="address_body w-75">
               <p><b>Address</b>: 1115 Florida Ave. Palm Harbor, FL 34683<br/>
                  <b>Time:</b> 8am – 5pm <br/>
                  <b>Phone</b>: 727-259-2300<br/>
                  <b>Fax</b>: 727-259-2305<br/>
               </p>
            </div>
            <a href="<?= BASE_URL ?>palm-harbor" class="btn btn-outline-primary mb-4 w-100">More about this location <i class="fa-solid fa-arrow-right"></i></a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7040.4766091517895!2d-82.765432!3d28.078273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2f2ef3e657ce5%3A0xdab6b8f55ca054a0!2s1115%20Florida%20Ave%2C%20Palm%20Harbor%2C%20FL%2034683!5e0!3m2!1sen!2sus!4v1694512856023!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div id="seminole" class="col-lg-4 col-sm-12 mb-3">
            <h3 class="loc_head">Seminole</h3>
            <div class="address_body w-100">
               <p><b>Address:</b> 8900 Park Blvd N., Seminole, <br/>FL 33777 <br/>
                  <b>Time:</b> 8am – 5pm <br/>
                  <b>Phone:</b> 727-545-4545 <br/>
                  <b>Fax:</b> 727-548-1360
               </p>
               <div class="wellness-content" style="display: none;">
                  <h6>Wellness:</h6>
                  <p>
                     <b>Hours:</b> Monday to Friday <br/>
                     <b>Time:</b> 8am – 5pm <br/>
                     <b>Phone:</b> 727-767-0950
                  </p>
                  <h6>Fitness:</h6>
                  <p>
                     <b>Hours:</b> Monday to Friday <br/>
                     <b>Time:</b> 7am – 5pm <br/>
                     <b>Hours:</b> Saturday <br/>
                     <b>Time:</b> 9am – 12pm <br/>
                  </p>
               </div>
               <p class="read-more-scroll">
                  <a href="#" class="read-more-link" onclick="toggleWellness()">Read More</a>
               </p>
            </div>
            <a href="<?= BASE_URL ?>seminole" class="btn btn-outline-primary mb-4 w-100">More about this location <i class="fa-solid fa-arrow-right"></i></a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7056.098225484657!2d-82.762391!3d27.839026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2fb65c2ec37bf%3A0xec80b25737afb551!2s8900%20Park%20Blvd%2C%20Seminole%2C%20FL%2033777!5e0!3m2!1sen!2sus!4v1694512879928!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async></script>
<script>
   function phoneno() {
      $('.phone-input').keypress(function(e) {
         var allowedKeys = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57]; // ASCII values for 0-9

         if (!(allowedKeys.includes(e.which))) {
            e.preventDefault();
         }
      });
   }
</script>
<script>
function clearResult(){
  document.getElementById("result").value = ''
}
</script>
<script>
   function toggleWellness() {
      var wellnessContent = document.querySelector('.wellness-content');
      var readMoreLink = document.querySelector('.read-more-link');
   
      if (wellnessContent.style.display === 'none' || wellnessContent.style.display === '') {
         wellnessContent.style.display = 'block';
         readMoreLink.textContent = 'Read Less';
      } else {
         wellnessContent.style.display = 'none';
         readMoreLink.textContent = 'Read More';
      }
   }
</script>
<script type="text/javascript">
   $(".address_header h3[location]").click(function(){
   
   	let location = $(this).attr('location');	
   	$('.google-map-iframe').hide();
   	$('.google-map-iframe[location="'+location+'"]').show();
   
   });
   
   function ac4u_contact_captcha_callback(){
   	console.log("Event: Captcha Passed.");
   	$('#form-contact-us [type="submit"]').attr("disabled",false);
   }
   function ac4u_contact_captcha_expired_callback(){
   	console.log("Event: Captcha Expired.");
   	$('#form-contact-us [type="submit"]').attr("disabled",true);
   }
   function ac4u_contact_form_submit(){
   	console.log("Event: Contact Form Submited. ");
   	let data = $('#form-contact-us').serializeArray();
   	$.ajax({
   		url : "<?=BASE_URL.'api/contact-form' ?>",
   		type: "POST",
   		data: data,
   		beforeSend: function(){
   			$('#form-contact-us [type="submit"]').attr("disabled",true).html('Processing <i class="fa fa-spin fa-spinner"></i>');
   		},
   		success: function(response){
   			console.log(response);
   			let data = $.parseJSON(response);
   			if(data.status){
                      $('#form-contact-us')[0].reset();
                  }
   			$('#form-contact-us div[form-messages]').html(data.message);
   		},
   		complete: function(){
   			$('#form-contact-us [type="submit"]').attr("disabled",false).html('Submit');
   			setTimeout(function(){
   				$('#form-contact-us div[form-messages]').html("");
   			},10000);
   		},
   		error: function(response){
   			console.log(response);
   			let data = $.parseJSON(response);
   			$('#form-contact-us div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
   		}
   	})
   	return false;
   }
   
   function ac4u_appointment_captcha_callback(){
   	console.log("Event: Captcha Passed.");
   	$('#form-appointment [type="submit"]').attr("disabled",false);
   }
   function ac4u_appointment_captcha_expired_callback(){
   	console.log("Event: Captcha Expired.");
   	$('#form-appointment [type="submit"]').attr("disabled",true);
   }
   
   
   function ac4u_appointment_form_submit(){
   	console.log("Event: Appointment Submited. ");
   	let data = $('#form-appointment').serializeArray();
   	$.ajax({
   		url : "<?=BASE_URL.'api/appointment-form' ?>",
   		type: "POST",
   		data: data,
   		beforeSend: function(){
   			$('#form-appointment [type="submit"]').attr("disabled",true).html('Processing <i class="fa fa-spin fa-spinner"></i>');
   		},
   		success: function(response){
   			let data = $.parseJSON(response);
   			if(data.status){
                      $('#form-appointment')[0].reset();
                  }
   			$('#form-appointment div[form-messages]').html(data.message);
   		},
   		complete: function(){
   			$('#form-appointment [type="submit"]').attr("disabled",false).html('Submit');
   			setTimeout(function(){
   				$('#form-appointment div[form-messages]').html("");
   			},10000);
   		},
   		error: function(response){
   			console.log(response);
   			let data = $.parseJSON(response);
   			$('#form-appointment div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
   		}
   	})
   	return false;
   }
   
   
    	$(document).ready(function() {
   
   	$('.collapse').on('shown.bs.collapse', function () {
   		$(this).parent().addClass('active');
   	});
   
   	$('.collapse').on('hidden.bs.collapse', function () {
   		$(this).parent().removeClass('active');
   	});
   
   	if(window.location.hash){
   		setTimeout(() => {
   			
   			$("html,body").animate({ scrollTop: $(window.location.hash).offset().top - 100});
   		}, 500);
   	}
   
   });
</script>
<script>function restrictNonNumeric(element) {
   element.value = element.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
   }
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
   var phoneInput = document.getElementById('phone');
   phoneInput.addEventListener('input', function() {
   if (phoneInput.validity.patternMismatch) {
   phoneInput.setCustomValidity("Please enter a 10-digit phone number");
   } else {
   phoneInput.setCustomValidity("");
   }
   });
   });
</script> 
<?php include 'partial/footer.php';?>