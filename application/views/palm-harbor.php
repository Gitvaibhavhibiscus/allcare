<?php include 'partial/header.php';?>
<div class="container-fluid patient_resources p-0">
   <div class="head_banner col-12 p-0">
      <img src="<?=IMG_BASE_URL ?>patient-resources/patientbanner.webp" alt="Patient Resources Banner"class="w-100 thumb banner_img" />
      <div class="bottom_card">
         <div class="bg_circle">
            <img src="<?=IMG_BASE_URL ?>illumination/banner_head.png" alt="allcare4u illustration" class="w-100" />
            <h1 class="m-0 text-white font-primary">Palm Harbor</h1>
         </div>
      </div>
   </div>
   <div class="container-fluid p-0">
      <div class="container mt-5 mb-5">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 pr-lg-5 mb-4">
               <h4 class="location-add">Address:</h4>
               <h3 class="location-det mb-3">1115 Florida Ave. Palm Harbor, FL 34683</h3>
               <h4 class="location-add">Phone:</h4>
               <h3 class="location-det mb-3">727-259-2300</h3>
               <h4 class="location-add">Fax:</h4>
               <h3 class="location-det mb-3">727-259-2305</h3>
               <div class="row mt-4">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <a href="#Schedule" class="btn btn-primary w-100" target="_blank">Schedule an appointment </a>
                  </div>
               </div>
            </div>
            <div class="patient-listing col-lg-6 col-md-6 col-sm-12 px-2 pl-lg-5">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14080.953218303579!2d-82.765432!3d28.078273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2f2ef3e657ce5%3A0xdab6b8f55ca054a0!2s1115%20Florida%20Ave%2C%20Palm%20Harbor%2C%20FL%2034683!5e0!3m2!1sen!2sus!4v1696331183489!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="palm-harbor-provider" class="container-fluid p-0 bg_illustration">
   <div class="container mt-5 mb-5">
      <h3>Our Team at Palm Harbor</h3>
      <?php include 'partial/providers_tab.php'; ?>
   </div>
</div>
<div class="container-fluid p-0 bg_illustration-ptrn3">
   <div class="container mt-5 mb-5 loc-providelist">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="mb-3"><img src="<?=IMG_BASE_URL ?>patient-resources/certificate-02.webp" width="30px" height="30px"> Services Provided</h3>
            <ul class="pl-4">
               <li>24/7 On-call providers</li>
               <li>Same day & next day sick visits</li>
               <li>Flu Shots</li>
               <li>Annual Wellness Visits</li>
               <li>Transportation via Lyft/Uber</li>
               <li>Immunizations</li>
               <li>EKGs</li>
               <li>Pulmonary Function Test</li>
               <li>Ear LavageSuture/Staple Removal</li>
               <li>Peripheral Artery Disease testing (Ankle Brachial Index)</li>
               <li>Minor dermatological procedures</li>
            </ul>
            <h3 class="mt-5 mb-2"><img src="<?=IMG_BASE_URL ?>patient-resources/file-shield.webp" width="30px" height="30px"> Insurances Accepted</h3>
            <h4>Managed Care Plans</h4>
            <ul class="pl-4">
               <li>Baycare Plus Medicare Advantage</li>
               <li>BCBS HMO</li>
               <li>Careplus</li>
               <li>Freedom</li>
               <li>Humana Gold & Gold Plus</li>
               <li>Optimum</li>
               <li>Ultimate</li>
               <li>Wellcare</li>
            </ul>
            <h4>Medicare & Medicare Advantage Plans</h4>
            <ul class="pl-4">
               <li>AARP Medicare Complete</li>
               <li>Aetna Medicare (Prefix MEB Aetna MCR PPO Only)</li>
               <li>Allwell by Sunshine</li>
               <li>BCBS Medicare PPO</li>
               <li>Medicare</li>
               <li>Railroad Medicare</li>
               <li>United Healthcare Medicare</li>
               <li>Wellmed HMO & PPO</li>
               <li>We accept Humana Medicare products</li>
            </ul>
            <h4>Commercial Plans & Networks</h4>
            <ul class="pl-4">
               <li>Aetna (No AETNA X)</li>
               <li>Allegiance</li>
               <li>Allsavers</li>
               <li>Ambetter</li>
               <li>Assurant</li>
               <li>AVMED</li>
               <li>BCBS (No BLUE SELECT or MY BLUE, We will accept any out of state BCBS product that can be filed to our local plan.)</li>
               <li>Beechstreet</li>
               <li>Cigna (No LOCAL PLUS or CIGNA CONNECT)</li>
               <li>Emblem Health</li>
               <li>Firsthealth</li>
               <li>GEHA</li>
               <li>GHI</li>
               <li>Golden Rule</li>
               <li>Group and Pension Administrators GPA</li>
               <li>Humana (All Commercial Plans)</li>
               <li>Meritain</li>
               <li>Multiplan</li>
               <li>Oscar</li>
               <li>Oxford</li>
               <li>PHCS</li>
               <li>Tricare</li>
               <li>UMR</li>
               <li>Unicare</li>
               <li>United Healthcare & UHC Passport plan</li>
               <li>Web TPA</li>
            </ul>
            <h5 class="mt-3">Disclaimer: To guarantee the coverage offered by your specific insurance plan, please call our billing team so they can verify your benefits!</h5>
         </div>
      </div>
   </div>
</div>
<div id="Schedule" class="container-fluid p-0">
   <div class="container mt-5 mb-5">
     <div class="lac-apntmentform">
         <div class="mt-3 mb-4">
            <h2 class="text-center">Schedule an Appointment</h2>
         </div>
         <div class="loc_schlform">
         <form id="form-contact-us" class="p-4" onsubmit="return ac4u_contact_form_submit()">
                     <iframe data-tally-src="https://tally.so/embed/wvAQyd?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="738" frameborder="0" marginheight="0" marginwidth="0" title="Schedule an Appointment"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script></form>
           <!-- <form id="form-appointment" onsubmit="return ac4u_appointment_form_submit()">
                        <div class="p-5">
                           <div class="row">
                              <div class="col-12 p-2">
                                 <lable class="required">Full Name</lable>
                                 <input type="text" name="name" class="form-control mt-2 mb-2" placeholder="E.g. John Smith" required>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 p-2">
                                 <lable class="required">Mobile Number</lable>
                                 <input type="text" id="phone" name="phone_number" class="form-control mt-2 mb-2" onkeypress="phoneno()" onkeypress="return restrictNonNumeric(event)" maxlength="12" placeholder="E.g. 9999999999">
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 p-2">
                                 <lable class="required">Email Address</lable>
                                 <input type="email" name="email_address" pattern="[^@\s]+@[^@\s]+\.[a-zA-Z]{2,14}" class="form-control mt-2 mb-2" placeholder="E.g. johnsmith@mail.com" required>
                              </div>
                           </div>
                           <div class="row mb-2">
                           <div class="col-12 p-2">
                            <lable class="required">Office Location</lable>
                           </div>
                              <div class="col-12 col-lg-4 col-md-4">
                                 <label class="checkcontainer text-black">Clearwater
                                 <input type="radio" name="office" checked="checked" value="Clearwater : 1745 S Highland Avenue" id="radios1">
                                 <span class="radiobtn" for="office"></span>
                                 </label>
                              </div>
                              <div class="col-12 col-lg-4 col-md-4">
                                 <label class="checkcontainer text-black">Palm Harbor
                                 <input type="radio" name="office" value="Palm Harbor : 1115 Florida Avenue" id="radios1">
                                 <span class="radiobtn" for="office"></span>
                                 </label>
                              </div>
                              <div class="col-12 col-lg-4 col-md-4">
                                 <label class="checkcontainer text-black">Seminole
                                 <input type="radio" name="office" value="Seminole : 8900 Park Blvd N" id="radios1">
                                 <span class="radiobtn" for="office"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 p-2">
                                 <lable class="required">Select Date</lable>
                                 <input type="date" name="date" class="form-control mt-2 mb-2" placeholder="Select a date for your appointment" required>
                                 </div>
                           </div>
                           <div class="row">
                           <div class="col-12 p-2">
                              <lable class="required">Reason for appointment</lable>
                              <textarea  name="reason" class="form-control mt-2" id="exampleFormControlTextarea1" rows="5" placeholder=" E.g. Healthcare Checkup"></textarea>
                           </div>
                        </div>
                           <div class="row">
                              <div class="col-12 p-2">
                                 <div class="g-recaptcha"  
                                    data-callback="ac4u_appointment_captcha_callback"
                                       data-expired-callback="ac4u_appointment_captcha_expired_callback"
                                    data-sitekey="<?=RECAPTCHA_SITE_KEY ?>">
                                 </div>
                              </div>
                              <div class="col-12" form-messages></div>
                           </div>
                           <div class="row">
                              <div class="col-12 p-2 col-md-4 mt-2">
                                 <button type="submit" class="btn btn-primary" disabled>Submit</button>
                              </div>
                           </div>
                        </div>
                        <div class="col-12" form-messages>
                        </div>
                  </div>
               </div>
               </form>
   --></div>
</div>
</div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async></script>
<script>        
   function phoneno(){          
    $('#phone').keypress(function(e) {
        var a = [];
        var k = e.which;
   
        for (i = 48; i < 58; i++)
            a.push(i);
   
        if (!(a.indexOf(k)>=0))
            e.preventDefault();
    });
   }
</script>
<script type="text/javascript">
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
            },4000);
         },
         error: function(response){
            console.log(response);
            let data = $.parseJSON(response);
            $('#form-appointment div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
         }
      })
      return false;
   }
</script>
<?php include 'partial/footer.php';?>