<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php 
         if(isset($blog)){ 
             $meta_title = $blog['meta_title'];
             $meta_data = $blog['meta_keywords'];
             $meta_desc = $blog['meta_description'];
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
      <!-- <link href="/assets/fontawesome/css/all.min.css" rel="stylesheet"> -->
      <!-- <link rel="stylesheet" href="/assets/css/custom.css" > -->
      <link rel="preload" href="/assets/css/custom.css?v1.0" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <!-- <link rel="stylesheet" href="/assets/css/custom-min.css" > -->
      <!-- Owl JS -->
      <!-- Facebook Pixel Code -->
      <script async>
         !function(f,b,e,v,n,t,s)
         {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};
         if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
         n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t,s)}(window, document,'script',
         'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '1288776131493272');
         fbq('track', 'PageView');
      </script>
      <noscript async><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1288776131493272&ev=PageView&noscript=1"
         /></noscript>
      <!-- End Facebook Pixel Code -->
      <title><?php echo $meta_title; ?></title>
      <meta name="keywords" content="<?php echo $meta_data; ?>" />
      <meta name="description" content="<?php echo $meta_desc; ?>" />
      <!-- Facebook Meta Tags -->
      <meta property="og:url" content="https://allcare4u.com/">
      <meta property="og:type" content="website">
      <meta property="og:title" content="All Care">
      <meta property="og:description" content="All Care is a leading medical and wellness care service provider. All Care has a team of highly qualified healthcare professionals who ensure complete care of their patients.">
      <meta property="og:image" content="https://allcare4u.comundefined">
      <!-- Twitter Meta Tags -->
      <meta name="twitter:card" content="summary_large_image">
      <meta property="twitter:domain" content="allcare4u.com">
      <meta property="twitter:url" content="https://allcare4u.com/">
      <meta name="twitter:title" content="All Care">
      <meta name="twitter:description" content="All Care is a leading medical and wellness care service provider. All Care has a team of highly qualified healthcare professionals who ensure complete care of their patients.">
      <meta name="twitter:image" content="https://allcare4u.comundefined">
      <!-- Meta Tags Generated via https://www.opengraph.xyz -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-C4V5GFK7R4"></script>
      <script async>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'G-C4V5GFK7R4');
      </script>

      <!-- Orgnization tag -->
      <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "All Care",
  "image": "https://www.allcare4u.com/assets/images/logo.png",
  "@id": "",
  "url": "https://allcare4u.com/",
  "telephone": "727-545-4545",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "8900 Park Blvd N., Seminole",
    "addressLocality": "Seminole",
    "addressRegion": "FL",
    "postalCode": "33777",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 27.838990,
    "longitude": -82.762430
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "08:00",
    "closes": "17:00"
  },
  "sameAs": [
    "https://www.facebook.com/allcarehealthcenter",
    "https://www.instagram.com/allcare4U/",
    "https://www.youtube.com/channel/UC9839f6lgwcMlH0JpRoX8qw",
    "https://www.linkedin.com/company/allcare4u/",
    "https://allcare4u.com/"
  ]
}
</script>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   </head>
   <body>
      <!-- Modal -->
      <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search...">
                  <span class="input-group-addon" type="submit" value="Submit"><i class="fa fa-search" aria-hidden="true"></i></span>
                  <button class="btn btn-close" id="btnclose" data-dismiss="modal"> <img src="<?=IMG_BASE_URL ?>home/close.webp" width="12px"></button>
               </div>
            </div>
         </div>
         </div> -->
      <header>
         <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand mr-5" href="<?=BASE_URL ?>"><img src="<?=IMG_BASE_URL ?>logo.png" alt="All Care logo" class="logo" width="" height=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto left_navigation">
                   <li class="nav-item mb-0 dropdown"><a class="nav-link dropdown-toggle" href="<?=BASE_URL ?>providers">Providers</a>
                   <ul class="dropdown-menu">
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>clearwater/#clearwater-provider">Clearwater</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>seminole/#seminole-provider">Seminole</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>palm-harbor/#palm-harbor-provider">Palm Harbor</a></li>
      </ul>
                   </li>
                  
                  <li class="nav-item mb-0 dropdown"><a class="nav-link dropdown-toggle" href="<?=BASE_URL ?>medical-care">Medical Care</a>
                  <ul class="dropdown-menu">
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>congestive-heart-failure">Congestive Heart Failure</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>copd-emphysema">COPD / Emphysema</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>diabetes-treatment">Diabetes Management Treatment</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>acute-pain">Acute Pain Management</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>high-blood-pressure">High Blood Pressure Management</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>womens-health">Women's Health</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>depression">Depression</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>asthma">Asthma</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>high-cholesterol">High Cholesterol Management</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>obesity-treatment">Obesity Management Treatment</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>skin-procedure">Skin Procedures and Treatments</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>osteopathic-manipulative-treatment">Osteopathic Manipulative Treatment</a></li>
      </ul>
                  </li>
                   <li class="nav-item mb-0 dropdown"><a class="nav-link dropdown-toggle" href="<?=BASE_URL ?>clinical-wellness">Wellness</a>
                   <ul class="dropdown-menu">
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>exercise-and-physical-activity">Exercise and Physical Activity</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>lifestyle-medicine">Lifestyle Medicine</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>stress-management">Stress Management</a></li>
        <li class="menuitem"><a class="dropdown-item" href="<?=BASE_URL ?>nutrition-and-weight-management">Nutrition and Weight Management</a></li>
      </ul>
                   </li>
                  <!--<li class="nav-item mb-0 dropdown">
                     <a class="nav-link dropdown-toggle" href="<?=BASE_URL ?>clinical-wellness" role="button" data-toggle="dropdown" aria-expanded="false">
                     Wellness
                     </a>
                     <div class="dropdown-menu p-0">
                        <a class="dropdown-item" href="<?=BASE_URL ?>exercise-and-physical-activity">Exercise and Physical Activity</a>
                        <a class="dropdown-item" href="<?=BASE_URL ?>lifestyle-medicine">Lifestyle Medicine</a>
                        <a class="dropdown-item" href="<?=BASE_URL ?>stress-management">Stress Management</a>
                        <a class="dropdown-item" href="<?=BASE_URL ?>nutrition-and-weight-management">Nutrition and Weight Management</a>
                     </div>
                  </li>-->
                  <li class="nav-item mb-0"><a class="nav-link" href="<?=BASE_URL ?>patient-resources">Patient Resources</a></li>
                  <li class="nav-item mb-0"><a class="nav-link" href="<?=BASE_URL ?>blogs">Blog</a></li>
                  <li class="nav-item mb-0"><a class="nav-link" href="<?=BASE_URL ?>about-us">About Us</a></li>
                  <li class="nav-item mb-0"><a class="nav-link" href="<?=BASE_URL ?>contact-us">Contact</a></li>
                  <!--<button class="btn btn-close" id="search-close"></button>
                     <button type="text" class="search_btn" data-toggle="modal" data-target="#exampleModal"><img src="<?=IMG_BASE_URL ?>icons/search.svg" alt="Search icon"></button>
                     -->
               </ul>
               <ul class="navbar-nav2">
                  <li class="nav-item active m-0">
                     <a href="/contact-us#schedule-appointment" class="btn btn-sm head-sch-btn mr-3">Schedule an Appointment</a>
                  </li>
                  <li class="nav-item active m-0">
                     <a href="http://pay.instamed.com/allcare4u" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success mr-3">Pay Now</a>    
                  </li>
                  <li class="nav-item active m-0">
                     <a href="https://mycw27.eclinicalweb.com/portal2573/jsp/100mp/login_otp.jsp" class="btn btn-sm btn-outline-success">Login</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
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
         			},4000);
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