<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <?php 
      if(isset($blog)){ 
          $meta_title = $blog['meta_title'];
          $meta_data = $blog['meta_keywords'];
          $meta_desc = $blog['meta_keywords'];
      }
      ?>
   <?php
      if((isset($slug) && ($slug == 'enquiry' || $slug == 'event')) || isset($blog) && !empty($blog) && $blog['category'] == 'newsletter' ){
      ?>
   <meta name="robots" content="noindex, nofollow">
   <link rel="canonical" href="https://allcare4u.com" >
   <?php } ?>
   <!-- <link rel="stylesheet" href="/assets/calendar/calendar_style.css"> -->
   <!-- Owl -->
   <!-- Favicon -->
   <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
   <link rel="manifest" href="/favicon/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">
   <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="/assets/css/bootstrap.min.css" > -->
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css?v1.0" as="style" onload="this.onload=null;this.rel='stylesheet'">
   <link rel="preload" href="/assets/css/custom.css?v1.0" as="style" onload="this.onload=null;this.rel='stylesheet'">
   <title><?php echo $meta_title; ?></title>
   <meta name="keywords" content="<?php echo $meta_data; ?>" />
   <meta name="description" content="<?php echo $meta_desc; ?>" />
   <!-- Facebook Meta Tags -->
   <meta property="og:url" content="https://allcare4u.com/">
   <meta property="og:type" content="website">
   <meta property="og:title" content="All Care">
   <meta property="og:description" content="AllCare4U is a leading medical and wellness care service provider. All Care has a team of highly qualified healthcare professionals who ensure complete care of their patients.">
   <meta property="og:image" content="https://allcare4u.comundefined">
   <!-- Twitter Meta Tags -->
   <meta name="twitter:card" content="summary_large_image">
   <meta property="twitter:domain" content="allcare4u.com">
   <meta property="twitter:url" content="https://allcare4u.com/">
   <meta name="twitter:title" content="All Care">
   <meta name="twitter:description" content="AllCare4U is a leading medical and wellness care service provider. All Care has a team of highly qualified healthcare professionals who ensure complete care of their patients.">
   <meta name="twitter:image" content="https://allcare4u.comundefined">

<style>
   header {display: none;}
   form#aep-campaign {background: #FAFBFC;box-shadow: 0px 4px 40px 0px rgba(0, 0, 0, 0.08);border-radius: 4px;}
   .bg_aep {position: relative;z-index: 1; padding-top: 40px;}
   .aep-para{color: #000;font-family: Nunito;font-size: 20px;font-style: normal;font-weight: 600;line-height: 30px;}
   .aep-head{color: #191A15;font-family: Nunito;font-size: 32px;font-style: normal;font-weight: 700;line-height: normal;}
   .form-control {padding: 10px;}
   .form-head{color: #191A15;font-family: Nunito;font-size: 32px;font-style: normal;font-weight: 700;line-height: normal;}
   .btn-primary:disabled {color: #fff;background-color: #096DD9;border-color: #096DD9;opacity: 100;border-radius: 20px;}
   .form-section {padding-left: 5rem;}
   .m-banner{display:none;}
   div#success-message {background-color: #117752;color: #fff;padding: 20px;display: flex;margin-top: 0px; border-radius: 4px;box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.30), 0px 4px 8px 3px rgba(0, 0, 0, 0.15);}
   .visit-web{display: flex!important;flex-direction: row-reverse;width: 100%;}
   a.visit-button { color: #000;border-radius: 4px;background: #B5DBF0;padding: 5px 10px;width: 40%;display: block;margin-top: 12px;}
   .btn-primary {border-radius: 20px;}
   
   @media screen and (min-width: 786px) {
   body{background: linear-gradient(90deg, rgba(90,197,255,0.24555759803921573) 10%, rgba(84,190,150,0.25115983893557425) 100%) !important}
   .bg_illustration{background-color:unset !important;}
   .bg_illustration:before {content: ""; left: -80px; top: 8%; width: 500px; height: 700px; background: url(../images/illumination/wellnessblue.svg); z-index:0;  position:absolute; background-repeat:no-repeat; background-size: contain !important; }
   .bg_illustration:after {content: ""; right: -40px; top: 46%; width: 400px; height: 700px; background: url(../images/illumination/wellnessgreen.svg); z-index:-1; position: absolute; background-repeat: no-repeat; background-size: contain !important;}}
   @media screen and (max-width: 600px) {
   .form-section {padding: 0rem;}
   .bg_illustration {position: relative; overflow: hidden; background-image: linear-gradient(#61b5e330, #FFFFFF) !important; z-index: 1;}
   .bg_illustration:before {content: ""; left: -80px; top: 8%; width: 500px; height: 700px; background: url(../images/illumination/wellnessblue.svg); z-index:0;  position:absolute; background-repeat:no-repeat; background-size: contain !important; }
   .bg_illustration:after {content: ""; right: -40px; top: 46%; width: 400px; height: 700px; background: url(../images/illumination/wellnessgreen.svg); z-index:-1; position: absolute; background-repeat: no-repeat; background-size: contain !important;} 
   .m-banner{display:block;}
   .aep-head{color: #191A15;font-family: Nunito;font-size: 20px;font-style: normal;font-weight: 800;line-height: normal;}
   .bg_aep {position: relative;z-index: 1;height: auto;padding-top: 0px;}
   .aep-campaign img{display:none;}
   .aep-para {color: #000;font-family: Nunito;font-size: 16px;font-style: normal;font-weight: 600;line-height: 24px;padding: 10px 0px !important;}
   }
</style>
   <!-- Event snippet for Book appointment conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-11361300623/wk3FCJffwPQYEI_hvqkq',
      'event_callback': callback
  });
  return false;
}
</script>
</head>
<body>
   <div class="m-banner">
      <img src="<?= IMG_BASE_URL ?>home/banner-slider/mobile-aep-banner.jpg" width="100%" height="auto" alt="AEP banner">
   </div>
   <div class="container-fluid aep-campaign bg_aep bg_illustration">
      <div class="container mt-5 mb-5">
         <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12 order-sm-2 order-md-1 p-0">
               <h2 class="aep-head pb-3">At All Care, we are focused on you and provide comprehensive care tailored to you. </h2>
               <img src="<?= IMG_BASE_URL ?>home/banner-slider/aep-banner.png" width="100%" height="auto" alt="aep banner">
               <div class="d-none d-lg-block d-md-block">
                  <p class="aep-para pt-4">Being fully dedicated to Medicare recipients, we guide you through Medicare Advantage Plans, covering fees and medications, while our experienced providers ensure timely follow-ups, pharmacy coordination, and 24/7 availability.</p>
                  <p class="aep-para">For emergencies, we're connected to hospitals for seamless care. Our personalized wellness program addresses all your unique health needs – from nutrition and exercise to stress management and social support.</p>
               </div>
            </div>
            <div class="form-section col-lg-5 col-md-7 col-sm-12 order-sm-1 order-md-2 pr-0">
                  <div id="contact-form">
                     <form id="aep-campaign" onsubmit="return ac4u_aep_campaign()">
                        <div class="p-4">
                           <div class="col-12 p-0 d-none d-md-block d-lg-block">
                              <div class="col-12 p-2">
                                 <h2 class="form-head">Request a callback</h2>
                              </div>
                           </div>
                           <div class="col-12 p-0">
                              <div class="col-12 p-2">
                                 <label class="required">Name</label>
                                 <input type="text" name="name" class="form-control mb-2" placeholder="Enter your full name" oninvalid="setCustomValidity('Please enter your name')" onchange="this.setCustomValidity('')" required >
                              </div>
                           </div>
                           <div class="col-12 p-0">
                              <div class="col-12 p-2">
                                 <label class="required">Contact Number</label>
                                 <input type="text" id="phone" name="phone_number" class="form-control mb-2" placeholder="Enter your contact number" onkeypress="phoneno()" maxlength="11" placeholder="" oninvalid="setCustomValidity('Please enter your contact number')" onchange="this.setCustomValidity('')" required>
                              </div>
                           </div>
                           <div class="col-12 col-md-12 p-0">
                              <div class="col-12 p-0">
                                 <div class="col-12 mb-3 pl-2">
                                    <p class="f-w-00 f-w-500 text-black h6 mb-3 required">Preferred time slots </p>
                                    <label class="checkcontainer">8 AM - 12 PM
                                    <input type="radio" name="preferred_time" value="8 AM - 12 PM" required oninvalid="setCustomValidity('This field is mandatory.')" onchange="this.setCustomValidity('')">
                                    <span class="radiobtn"></span>
                                    </label>
                                    <label class="checkcontainer">12 PM - 3 PM
                                    <input type="radio" name="preferred_time" value="12 PM - 3 PM" required oninvalid="setCustomValidity('This field is mandatory.')" onchange="this.setCustomValidity('')">
                                    <span class="radiobtn"></span>
                                    </label>
                                    <label class="checkcontainer">3 PM - 5 PM
                                    <input type="radio" name="preferred_time" value="3 PM - 5 PM" required oninvalid="setCustomValidity('This field is mandatory.')" onchange="this.setCustomValidity('')">
                                    <span class="radiobtn"></span>
                                    </label>
                                 </div>
                                 <div class="col-12 mb-3 pl-2">
                                    <p class="f-w-00 f-w-500 text-black h6 mb-3 required">I am </p>
                                    <label class="checkcontainer"> A Patient seeking care
                                    <input type="radio" name="filled_by" value="Patient seeking care" required oninvalid="setCustomValidity('This field is mandatory.')" onchange="this.setCustomValidity('')">
                                    <span class="radiobtn"></span>
                                    </label>
                                    <label class="checkcontainer">A Relative of a patient
                                    <input type="radio" name="filled_by" value="Relative of a patient" required oninvalid="setCustomValidity('This field is mandatory.')" onchange="this.setCustomValidity('')">
                                    <span class="radiobtn"></span>
                                    </label>
                                    <label class="checkcontainer">Other
                                    <input type="radio" name="filled_by" value="Other" required oninvalid="setCustomValidity('This field is mandatory.')" onchange="this.setCustomValidity('')">
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
    <div class="row pl-3 pr-3">
        <div class="visit-web">
                     <a href="https://allcare4u.com" class="visit-button">Visit our website <img src="https://demo.allcare4u.com/assets/images/visit-icon.svg" width="16px" alt="visit-icon"></a></div>
                     </div>
                  </div>
                  
               <div class="d-block d-lg-none d-md-none">
                  <p class="aep-para pt-4">Being fully dedicated to Medicare recipients, we guide you through Medicare Advantage Plans, covering fees and medications, while our experienced providers ensure timely follow-ups, pharmacy coordination, and 24/7 availability.<br>
                     For emergencies, we're connected to hospitals for seamless care. Our personalized wellness program addresses all your unique health needs – from nutrition and exercise to stress management and social support.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="/assets/js/jquery-3.5.1.min.js?v1.0" ></script>
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
      
      function ac4u_aep_campaign() {
          console.log("Event: AEP Campaign.");
          let data = $('#aep-campaign').serializeArray();
          $.ajax({
              url: "<?=BASE_URL.'api/aep-campaign' ?>",
              type: "POST",
              data: data,
              beforeSend: function () {
                  $('#aep-campaign [type="submit"]').attr("disabled", true).html('Processing <i class="fa fa-spin fa-spinner"></i>');
              },
              success: function (response) {
                  console.log(response);
                  let data = $.parseJSON(response);
                  if (data.status) {
                      $('#contact-form').css('display', 'none');
                      $('#success-message').css('display', 'block');
                      $('#aep-campaign')[0].reset();
                  }
                  $('#aep-campaign div[form-messages]').html(data.message);
              },
              complete: function () {
                  $('#aep-campaign [type="submit"]').attr("disabled", false).html('Submit');
                  setTimeout(function () {
                      $('#aep-campaign div[form-messages]').html("");
                  }, 10000);
              },
              error: function (response) {
                  console.log(response);
                  let data = $.parseJSON(response);
                  $('#aep-campaign div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
              }
          });
          return false;
      }
      
   </script>
</body>
</html>