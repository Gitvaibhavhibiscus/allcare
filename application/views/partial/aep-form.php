<div id="contact-form">
   <form id="aep-campaign-web" onsubmit="return ac4u_aep_campaign_web()">
      <div class="p-4">
         <div class="col-12 p-0">
            <div class="col-12 p-2">
               <h2 class="form-head text-center">Request a callback</h2>
            </div>
         </div>
         <div class="col-12 p-0">
            <div class="col-12 p-2">
               <label class="required">Name</label>
               <input type="text" name="name" class="form-control mb-2" placeholder="Enter your full name" oninvalid="setCustomValidity('Please enter your name')" onchange="this.setCustomValidity('')" required>
            </div>
         </div>
         <div class="col-12 p-0">
            <div class="col-12 p-2">
               <label class="required">Contact Number</label>
               <input type="text" id="phone" name="phone_number" class="form-control mb-2" onkeypress="phoneno()" maxlength="11" oninvalid="setCustomValidity('Please enter your contact number')" onchange="this.setCustomValidity('')" placeholder="Enter your contact number" required>
            </div>
         </div>
         <div class="col-12 col-md-12 p-0">
            <div class="col-12 p-0">
               <div class="col-12 mb-3 pl-2">
                  <p class="f-w-00 f-w-500 text-black h6 mb-3 required">Preferred time slots </p>
                  <label class="checkcontainer">8 AM - 12 PM
                  <input type="radio" name="preferred_time" value="8 AM - 12 PM" required>
                  <span class="radiobtn"></span>
                  </label>
                  <label class="checkcontainer">12 PM - 3 PM
                  <input type="radio" name="preferred_time" value="12 PM - 3 PM" required>
                  <span class="radiobtn"></span>
                  </label>
                  <label class="checkcontainer">3 PM - 5 PM
                  <input type="radio" name="preferred_time" value="3 PM - 5 PM" required>
                  <span class="radiobtn"></span>
                  </label>
               </div>
               <div class="col-12 mb-3 pl-2">
                  <p class="f-w-00 f-w-500 text-black h6 mb-3 required">I am </p>
                  <label class="checkcontainer"> A Patient seeking care
                  <input type="radio" name="filled_by" value="Patient seeking care" required>
                  <span class="radiobtn"></span>
                  </label>
                  <label class="checkcontainer">A Relative of a patient
                  <input type="radio" name="filled_by" value="Relative of a patient" required>
                  <span class="radiobtn"></span>
                  </label>
                  <label class="checkcontainer">Other
                  <input type="radio" name="filled_by" value="Other" required>
                  <span class="radiobtn"></span>
                  </label>
               </div>
            </div>
         </div>
         <div class="col-12 p-2">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
         </div>
         <div class="col-12" form-messages></div>
      </div>
   </form>
</div>
<div id="success-message" style="display: none;">
<p class="m-0">We have received your details. Our team will contact you shortly. </p>
<script src="/assets/js/jquery-3.5.1.min.js" ></script>
<script>
   $(document).ready(function(){
       $('#phone').keypress(function(e) {
           var a = [];
           var k = e.which;
   
           for (i = 48; i < 58; i++)
               a.push(i);
   
           if (!(a.indexOf(k) >= 0))
               e.preventDefault();
       });
   });
</script>
<script>function restrictNonNumeric(element) {
   element.value = element.value.replace(/[^0-9]/g, '');
   }
</script>
<script>
   // function ac4u_aep_campaign_captcha_callback(){
      //    console.log("Event: Captcha Passed.");
      //    $('#form-contact-us [type="submit"]').attr("disabled",false);
      // }
      // function ac4u_aep_campaign_captcha_expired_callback(){
      //    console.log("Event: Captcha Expired.");
      //    $('#form-contact-us [type="submit"]').attr("disabled",true);
      // }
   
   function ac4u_aep_campaign_web() {
       console.log("Event: AEP Campaign.");
       let data = $('#aep-campaign-web').serializeArray();
       $.ajax({
           url: "<?=BASE_URL.'api/aep-campaign-web' ?>",
           type: "POST",
           data: data,
           beforeSend: function () {
               $('#aep-campaign-web [type="submit"]').attr("disabled", true).html('Processing <i class="fa fa-spin fa-spinner"></i>');
           },
           success: function (response) {
               console.log(response);
               let data = $.parseJSON(response);
               if (data.status) {
                   $('#contact-form').css('display', 'none');
                   $('#success-message').css('display', 'block');
                   $('#aep-campaign-web')[0].reset();
               }
               $('#aep-campaign-web div[form-messages]').html(data.message);
           },
           complete: function () {
               $('#aep-campaign-web [type="submit"]').attr("disabled", false).html('Submit');
               setTimeout(function () {
                   $('#aep-campaign-web div[form-messages]').html("");
               }, 10000);
           },
           error: function (response) {
               console.log(response);
               let data = $.parseJSON(response);
               $('#aep-campaign-web div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
           }
       });
       return false;
   }
   
</script>