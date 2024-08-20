<?php include 'partial/header.php';?>
<style>
   form#form-contact-us, form#form-appointment {
   background: #FAFBFC;
   box-shadow: 0px 4px 40px 0px rgba(0, 0, 0, 0.08);
   }
   .loc_head{ font-size:20px;}
</style>
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
      <div class="row mt-5">
      <div class="col-12 col-sm-9">
         <p>If you have any queries regarding our services, our centres or appointment, feel free to reach out to us. Our team is always ready to hear from you and guide you in the right direction.</p>
      </div>
      </div>
         <div class="row mb-5">
            <div class="contactform-tab col-lg-5 col-sm-12 pl-0 mt-lg-4">
               <div class="tab-card-header d-flex justify-content-center mt-4 ml-lg-5">
                  <ul class="nav nav-tabs card-header-tabs d-lg-block text-right" id="myTab" role="tablist">
                     <li class="nav-item mb-lg-3">
                        <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">General Inquiries</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Schedule an Appointment</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-7 col-sm-12">
               <div class="tab-content mt-3 w-lg-75 w-md-75 w-sm-100 w-100" id="myTabContent">
                  <div class="tab-pane fade p-3 show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                     <form id="form-contact-us" onsubmit="return ac4u_contact_form_submit()">
                        <div class="p-5">
                        <div class="row">
                           <div class="col-12 p-2">
                              <lable class="required">Full Name</lable>
                              <input type="text" name="name" class="form-control mt-2" placeholder="E.g. John" required>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-12 p-2">
                              <lable class="required">Mobile Number</lable>
                              <input type="text" name="phone" class="form-control mt-2" placeholder="E.g. Smith">
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-12 p-2">
                              <lable class="required">Email Address</lable>
                              <input type="email" name="email" class="form-control mt-2" placeholder="E.g. JohnSmith@mail.com" required>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-12 p-2">
                              <lable class="required">Reason for appointment</lable>
                              <textarea  name="message" class="form-control mt-2" id="exampleFormControlTextarea1" rows="5" placeholder=" E.g. Healthcare Checkup"></textarea>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-12 p-2">
                           <div class="col-auto p-0">
                                   <div class="g-recaptcha"  
                                       data-callback="ac4u_contact_captcha_callback"
                                       data-expired-callback="ac4u_contact_captcha_expired_callback"
                                       data-size="compact" 
                                       data-sitekey="<?=RECAPTCHA_SITE_KEY ?>"></div> 
                                 </div>
                              <button type="submit" class="btn btn-primary" disabled>Submit</button>
                           </div>
                           </div>
                           <div class="col-12" form-messages>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                     <div class="container-fluid p-0">
                        <form id="form-appointment" onsubmit="return ac4u_appointment_form_submit()">
                           <div class="p-5">
                              <div class="row">
                                 <div class="col-12 p-2">
                                    <lable class="required">First Name</lable>
                                    <input type="text" name="first_name" class="form-control mt-2" placeholder="E.g. John" required>
                                 </div>
                                 <div class="col-12 p-2">
                                    <lable class="required">Last Name</lable>
                                    <input type="text" name="last_name" class="form-control mt-2" placeholder="E.g. Smith" required>
                                 </div>
                              </div>
                              <div class="col-12 p-0">
                                 <p class="f-w-00 f-w-500 text-black h6 mb-0 mt-4">Best Contact Method</p>
                              </div>
                              <div class="row">
                                 <div class="col-12 col-md-6 p-2">
                                    <input type="text" name="phone_number" class="form-control" placeholder="E.g. 123456789090" required>
                                 </div>
                                 <div class="col-12 col-md-6 p-2">
                                    <input type="text" name="preferred_time" class="form-control" placeholder="Time of day prefered" required>
                                 </div>
                                 <div class="col-12 col-md-6 p-2">
                                    <input type="email" name="email_address" class="form-control" placeholder="E.g. JohnSmith@mail.com" required>
                                 </div>
                              </div>
                              <div class="col-12 p-0">
                                 <p class="f-w-00 f-w-500 text-black h6 mb-2 mt-4">Office Location option</p>
                              </div>
                              <div class="row">
                                 <div class="col-12 col-md-4">
                                    <label class="checkcontainer text-black">Clearwater : 1745 S Highland Avenue
                                    <input type="radio" name="office" checked="checked" value="Clearwater : 1745 S Highland Avenue" id="radios1">
                                    <span class="radiobtn" for="office"></span>
                                    </label>
                                 </div>
                                 <div class="col-12 col-md-4">
                                    <label class="checkcontainer text-black">Palm Harbor : 1115 Florida Avenue
                                    <input type="radio" name="office" value="Palm Harbor : 1115 Florida Avenue" id="radios1">
                                    <span class="radiobtn" for="office"></span>
                                    </label>
                                 </div>
                                 <div class="col-12 col-md-4">
                                    <label class="checkcontainer text-black">Seminole : 8900 Park Blvd N
                                    <input type="radio" name="office" value="Seminole : 8900 Park Blvd N" id="radios1">
                                    <span class="radiobtn" for="office"></span>
                                    </label>
                                 </div>
                              </div>
                              <div class="col-12 p-0">
                                 <p class="f-w-00 f-w-500 text-black h6 mb-2 mt-4">Reason for appointment</p>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <textarea type="text" name="reason" class="form-control" placeholder="Write here your reason to visit"></textarea>
                                 </div>
                                 <div class="col-auto">
                                     <div class="g-recaptcha"  
                                       data-callback="ac4u_appointment_captcha_callback"
                                       data-expired-callback="ac4u_appointment_captcha_expired_callback"
                                       data-size="compact" 
                                       data-sitekey="<?=RECAPTCHA_SITE_KEY ?>"></div> 
                                 </div>
                                 
                              </div>
                              <div class="row">
                              <div class="col-12 col-md-4 mt-3">
                                    <button type="submit" class="btn btn-primary" disabled>Submit</button>
                              </div>
                              </div>
                              </div>
                                 <div class="col-12" form-messages>
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
               <p><b>Address</b>: 1745 S. Highland Avenue, Clearwater, FL 33756<br/>
                  <b>Phone</b>: 727-587-0377<br/>
                  <b>Fax</b>: 727-587-0527<br/>
               </p>
            </div>
            <a href="<?= BASE_URL ?>palm-harbor" class="btn btn-outline-primary mb-4 w-100">More about this location <i class="fa-solid fa-arrow-right"></i></a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7040.4766091517895!2d-82.765432!3d28.078273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2f2ef3e657ce5%3A0xdab6b8f55ca054a0!2s1115%20Florida%20Ave%2C%20Palm%20Harbor%2C%20FL%2034683!5e0!3m2!1sen!2sus!4v1694512856023!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div id="seminole" class="col-lg-4 col-sm-12 mb-3">
            <h3 class="loc_head">Seminole</h3>
            <div class="address_body w-100">
               <p><b>Address:</b> 8900 Park Blvd N., Seminole, FL 33777 <br/>
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
<?php include 'partial/footer.php';?>
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