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
      <meta property="og:description" content="AllCare4U is a leading medical and wellness care service provider. All Care has a team of highly qualified healthcare professionals who ensure complete care of their patients.">
      <meta property="og:image" content="https://allcare4u.comundefined">
      <!-- Twitter Meta Tags -->
      <meta name="twitter:card" content="summary_large_image">
      <meta property="twitter:domain" content="allcare4u.com">
      <meta property="twitter:url" content="https://allcare4u.com/">
      <meta name="twitter:title" content="All Care">
      <meta name="twitter:description" content="AllCare4U is a leading medical and wellness care service provider. All Care has a team of highly qualified healthcare professionals who ensure complete care of their patients.">
      <meta name="twitter:image" content="https://allcare4u.comundefined">
      <!-- Meta Tags Generated via https://www.opengraph.xyz -->
      <!-- Global site tag (gtag.js) - Google Analytics -->

      <style>
   header {display: none;}
   .btn.btn-primary {padding: 8px 100px;background: #096DD9;}
   form#aep-campaign-web {background: #FAFBFC;box-shadow: 0px 4px 40px 0px rgba(0, 0, 0, 0.08);border-radius: 4px;}
   .bg_aep {position: relative;z-index: 1; padding-top: 40px;}
   .aep-para{color: #000;font-family: Nunito;font-size: 20px;font-style: normal;font-weight: 600;line-height: 30px;}
   .aep-head1{color: #191A15;font-family: Nunito;font-size: 32px;font-style: normal;font-weight: 700;line-height: normal;}
   .aep-head{color: #191A15;font-family: Nunito;font-size: 32px;font-style: normal;font-weight: 700;line-height: normal;}
   .form-control {padding: 10px;}
   .form-head{color: #191A15;font-family: Nunito;font-size: 32px;font-style: normal;font-weight: 700;line-height: normal;}
   .btn-primary:disabled {color: #fff;background-color: #096DD9;border-color: #096DD9;opacity: 100;border-radius: 20px;}
   .form-section {padding-left: 0rem; margin-top: 60px;}
   .m-banner{display:none;}
   div#success-message {background-color: #117752;color: #fff;padding: 20px;display: flex;margin-top: 0px; border-radius: 4px;box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.30), 0px 4px 8px 3px rgba(0, 0, 0, 0.15);}
   .visit-web{display: flex!important;flex-direction: row-reverse;width: 100%;}
   a.visit-button { color: #000;border-radius: 4px;background: #B5DBF0;padding: 5px 10px;width: 40%;display: block;margin-top: 12px;}
   .btn-primary {border-radius: 20px;}

   .service-details{display: flex;align-items: start;justify-content: end;}
   .plancard{background-color:#E4F8F1; border-radius: 15px;height: auto !important;min-height: 270px;margin-bottom: 30px;}
   .aep-donot-list {list-style: none;padding: 0;}
   .aep-donot-list li {display: flex;align-items: center;margin-bottom: 20px;}
   .aep-donot-list li img {max-width: 200px;margin-right: 20px;}
   .aep-donot-list li p {margin: 0;flex: 1;}
   .star-img{width:20%;}

   /* service main */
   .service-main h3 {color: #191A15;font-family: Nunito;font-size: 28px;font-style: normal;font-weight: 700;line-height: normal;}
   .service-main p {color: #000;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;}
   .service-main ul li {color: #000;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;}
   .service-main ul {padding-left:25px !important;}

   /*plan offered */
   .plan-img {width: 100%;}
   .plans-offered h3 {color: #000;font-family: Nunito;font-size: 20px;font-style: normal;font-weight: 700;line-height: normal;}
   .plans-offered ul li {color: #000;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;margin-left: 0px !important;}
   .plans-offered ul {padding-left:25px !important;}

   /* enrollment-period */
   .enrollment-period ul li p{color: #191A15;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;}

   /* assist-enrollment */
   .assist-enrollment h2{color: #191A15;font-family: Nunito;font-size: 32px;font-style: normal;font-weight: 700;line-height: 38px;}
   .assist-enrollment ul li{color: #000;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;}

   /* date-enrollment */
   .date-enrollment p{color: #000;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;}
   .date-enrollment ul li {color: #000;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: 16px;margin-left: 0px !important;}
   .date-enrollment ul {padding-left:25px !important;}

   /* aep-faq */
   .aep-faq{width:75%; margin:auto;}

   /*accordion */
   .accordion_card{background:#F9FDFF; display: inline-block; width: 100%; margin-bottom: 25px; border-radius: 8px; border-bottom: 1px solid #E4E8EE;}
.accordion{background-color:#F9FDFF; color:#000; cursor:pointer; padding:18px; width:100%; border:none;
text-align: left; outline: none; font-size: 18px; font-weight: 600; transition: 0.4s; border-radius: 5px;display: inline-block;}
.accordion:after {content: "";font-family: "Font Awesome 5 Free"; color: #777; font-weight: bold; float: right; margin-left: 5px;}
.active_ac:after {content: "";font-family: "Font Awesome 5 Free"; rotate: 180deg;}
.panel{padding:0 18px; background-color:white; max-height: 0; overflow: hidden; transition: max-height 0.2s ease-out;border-radius: 8px;background: #F9FDFF;}
.accordion_card button {display: flex;align-items: center;justify-content: space-between;}
.accordion_card button img {margin-right: 10px;}
.accordion_card button::after {margin-left: 15px;}

/* footer */
.footer {position: relative; }
.footer .container {padding: 150px 20px 120px; max-width: 1240px !important; margin: auto;}
.footer ul {padding: 0px;}
.footer a{color:#ffffff;}
.footer ul li a {color: #000 !important;}
.footer ul li a:hover{text-decoration: none;}
.footer ul li{list-style:none;}
.footer .title {color: #000; margin-bottom: 30px; font-size: 20px;}
.footer ul li {list-style: none; margin-bottom: 10px; font-weight: 200;}
.social_icon li a {background: none; padding: 0px; margin: 3px; width: 35px; height: 35px; line-height: 38px; border-radius: 100%; transition: all .5s; font-size: 22px;}
.social_icon li a i {color: #000;}
    

.copyright {background: #1AAFE6;padding: 20px;}
.copyright p{text-align: center; color: #ffffff; margin: 0px;}
.footer {background: none;}
/* Footer */

/* pattern9 */
.bg_illustration-ptrn9 {left: 0px; width: 100%; background: url(https://allcare4u.com/assets/images/footer_logo.webp); z-index:0; background-repeat: no-repeat;
    background-size: cover; }

    .aep-img {padding-bottom: 30px;}

/* youtube embed */
lite-youtube {background-color: #000;position: relative;display: block;contain: content;background-position: center center;background-size: cover;
    cursor: pointer;width: 80%;height: 650px;border-radius: 10px;margin: auto;}
iframe {width: 100%;height: 550px !important;border:none;box-shadow: 0px 4px 40px 10px rgba(0, 0, 0, 0.12);}
.vid_col {padding-bottom: 30px; margin-top:60px !important;}
   
   @media screen and (min-width: 768px) {
   .bg_illustration{background: linear-gradient(135deg, #d7eff7, #f0fffe, #dbfff169); padding-top: 10px !important;}
   .bg_illustration1{background: linear-gradient(135deg, #d7eff7, #f0fffe, #dbfff169) !important;}
   .bg_illustration2{background-color: #fff;}
   .bg_illustration3{background-color: #E8F9F3;}
   .bg_illustration:before {content: ""; left: -80px; top: 8%; width: 500px; height: 700px; background: url(../images/illumination/wellnessblue.svg); z-index:0;  position:absolute; background-repeat:no-repeat; background-size: contain !important; }
   .bg_illustration:after {content: ""; right: -40px; top: 46%; width: 400px; height: 700px; background: url(../images/illumination/wellnessgreen.svg); z-index:-1; position: absolute; background-repeat: no-repeat; background-size: contain !important;}
   .footer .container {padding: 150px 20px 50px;max-width: 1240px !important;margin: auto;}
   .off-plan-row {display: flex;flex-wrap:wrap;}
   .panel p{color: #000;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;}
   .rating-aep{display:flex; flex-wrap:wrap;}
   .rating-aep h3{color: #4A4A4A;font-family: Nunito;font-size: 18px;font-style: normal;font-weight: 600; margin: 0px 10px;align-self: center;}
   
   }
   @media screen and (max-width: 767px) {
   .form-section {padding: 0rem;}
   .bg_illustration {position: relative; overflow: hidden; background-image: linear-gradient(#61b5e330, #FFFFFF) !important; z-index: 1;}
   .bg_illustration2{background-color: #fff;}
   .bg_illustration3{background-color: #E8F9F3;}
   .bg_illustration:before {content: ""; left: -80px; top: 8%; width: 500px; height: 700px; background: url(../images/illumination/wellnessblue.svg); z-index:0;  position:absolute; background-repeat:no-repeat; background-size: contain !important; }
   .bg_illustration:after {content: ""; right: -40px; top: 46%; width: 400px; height: 700px; background: url(../images/illumination/wellnessgreen.svg); z-index:-1; position: absolute; background-repeat: no-repeat; background-size: contain !important;} 
   .m-banner{display:block;}
   .aep-head1{color: #191A15;font-family: Nunito;font-size: 22px;font-style: normal;font-weight: 800;line-height: normal;}
   .aep-head{color: #191A15;font-family: Nunito;font-size: 22px;font-style: normal;font-weight: 800;line-height: normal; text-align:center;width: 65%;
    margin: auto;}
   .bg_aep {position: relative;z-index: 1;height: auto;padding-top: 0px;}
   .aep-campaign .star-img img{width: 90%;}
   .aep-para {color: #000;font-family: Nunito;font-size: 16px;font-style: normal;font-weight: 600;line-height: 24px;padding: 20px 0px !important;}
   .service-main { display: none;}
   .footer .container {padding: 70px 15px 30px;}
   .rating-aep h3{color: #4A4A4A;font-family: Nunito;font-size: 15px;font-style: normal;font-weight: 600; margin: 10px 0px;align-self: center;}
    .accordion_card {background: #F9FDFF;display: inline-block;width: 100%;margin-bottom: 18px;border-radius: 8px;border-bottom: 1px solid #E4E8EE;}
   .bg_illustration1{padding:0px !important;}
   .banner-head{margin-top:0px !important;}
   .form-section {padding-left: 0rem !important; margin-top: 20px !important;}
   .form-head {font-size: 25px;text-align: left !important;}
   .star-img {width: 30% !important;}

   .assist-enrollment h2 {font-size: 22px;line-height: 28px;width: 60%;margin: auto; text-align: center;}

   .assist-img{width: 100% !important;height: 200px !important;object-fit: cover;border-radius: 10px;}
   .plan-img {width: 800px;}
   .plan-col{overflow:scroll;}
   .off-plan-row {display: flex;overflow: scroll;}
   .planser {flex: 0 0 80%;max-width: 80%;}
   .plancard {background-color: #E4F8F1;border-radius: 15px;min-height: 400px;margin-bottom: 30px;height: 420px;}

   .aep-faq {width: 100%;margin: auto;}
   .accordion{font-size:15px;}
   .bg_illustration-ptrn9 {left: 0px;width: 100%;background: url(https://allcare4u.com/assets/images/footerback-mobile.webp);z-index: 0;background-repeat: no-repeat;}
   .footer .title {color: #000;margin-bottom: 20px;font-size: 20px;}
   .assist-enrollment a {width: 100%;}
    .aep-img{display:none;}
   lite-youtube {width: 100%;height: 210px;}
   iframe {width: 100%;height: 250px;}
   .vid_col {padding: 0px; margin-top:0px !important;}
   }

   @media screen and (min-width: 1025px) {
      .form-section {padding-left: 8rem; margin-top: 60px;}
      .assist-enrollment img{width:550px; height:auto;}
   }
   @media screen and (max-width: 1024px) {
      .form-section {padding-left: 2rem; margin-top: 60px;}
      .assist-enrollment img {width: 100%;height: auto;}
   }

</style>

   </head>
   <body>
   <div class="container-fluid bg_illustration1 p-0 pt-3 pb-3 d-block d-lg-none d-md-none">
   <div class="container mt-3 mb-3">
      <div class="row">
         <div class="col-3">
            <a class="navbar-brand mr-5" href="<?=BASE_URL ?>"><img src="<?=IMG_BASE_URL ?>logo.png" alt="All Care logo" class="logo" width="" height=""></a>
         </div>
      </div>
   </div>
   <div class="m-banner">
      <img src="https://demo.allcare4u.com/assets/images/home/banner-slider/aep-banner.png" width="100%" height="auto" alt="aep banner">
   </div>
</div>
<div class="container-fluid aep-campaign bg_aep bg_illustration">
   <!-- Section 1 -->
   <div class="container banner-head mt-4 mb-4">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 order-sm-2 order-md-1 p-0">
         <a class="navbar-brand mr-5" href="<?=BASE_URL ?>"><img src="<?=IMG_BASE_URL ?>logo.png" alt="All Care logo" class="logo d-none d-lg-block d-md-block pb-5" width="" height=""></a>
            <h2 class="aep-head1 pb-3">At All Care, we are focused on you and provide comprehensive care tailored to you.</h2>
            <img src="<?= IMG_BASE_URL ?>home/banner-slider/aep-banner.png" width="100%" height="auto" alt="aep banner" class="aep-img">
            <div class="rating-aep">
         <img src="<?= IMG_BASE_URL ?>aep-images/star-Image.svg" class="star-img" width="" height="auto" alt="aep banner">
         <h3>5-Star Member Experience Rating</h3>
         </div>
            
            <div class="d-none d-lg-block d-md-block">
               <p class="aep-para pt-4">Being fully dedicated to Medicare recipients, we guide you through Medicare Advantage Plans, covering fees and medications, while our experienced providers ensure timely follow-ups, pharmacy coordination, and 24/7 availability.</p>
               <p class="aep-para">For emergencies, we're connected to hospitals for seamless care. Our personalized wellness program addresses all your unique health needs – from nutrition and exercise to stress management and social support.</p>
            </div>
         </div>
         <div class="form-section col-lg-6 col-md-6 col-sm-12 order-sm-1 order-md-2 pr-0">
            <?php include 'partial/aep-form.php'; ?>
         </div>
         <div class="d-block d-lg-none d-md-none">
            <p class="aep-para pt-4">Being fully dedicated to Medicare recipients, we guide you through Medicare Advantage Plans, covering fees and medications, while our experienced providers ensure timely follow-ups, pharmacy coordination, and 24/7 availability.<br>
               For emergencies, we're connected to hospitals for seamless care. Our personalized wellness program addresses all your unique health needs – from nutrition and exercise to stress management and social support.
            </p>
         </div>
      </div>
   </div>
   <div class="vid_col col-12 mb-3 mb-md-0 pl-lg-0 text-center">
                <lite-youtube embedcode="https://www.youtube.com/embed/PVfU8ht77Jw?autoplay=1&mute=1"></lite-youtube>
	</div>
   <!-- Section 1 end -->
   <!-- Section 2 -->
   <div class="container mt-4 mb-4 p-0">
      <div class="row pt-4 pb-4 service-main">
         <div class="col-lg-2 col-md-2 col-sm-12 order-sm-2 service-details order-md-1 p-0">
            <img src="<?= IMG_BASE_URL ?>aep-images/ser-icon1.svg" width="60px" height="auto" alt="aep banner">
         </div>
         <div class="col-lg-8 col-md-10 col-sm-12 order-sm-1 order-md-2 pl-4">
            <h3>What is AEP (Annual Enrollment Period)?</h3>
            <p>Annual Enrollment Period (AEP) in the United States, is the time for the existing Medicare Insurance Plan beneficiaries to review, renew, or make adjustments to their health insurance plans.
               People over the age of 65 or those below 65, but with long-term disabilities can modify their health insurance coverage for the next year.
            </p>
         </div>
      </div>
      <div class="row pt-2 pb-2 service-main">
         <div class="col-lg-2 col-md-2 col-sm-12 order-sm-2 service-details order-md-1 p-0">
            <img src="<?= IMG_BASE_URL ?>aep-images/ser-icon2.svg" width="60px" height="auto" alt="aep banner">
         </div>
         <div class="col-lg-8 col-md-10 col-sm-12 order-sm-1 order-md-2 pl-4">
            <h3>Types of Medicare Insurance Plans</h3>
            <p>Medicare beneficiaries can opt for either of the two:</p>
            <ul>
               <li>Traditional Medicare</li>
               <li>Medicare Advantage plans like HMOs and PPOs.</li>
            </ul>
         </div>
      </div>
      <div class="row pt-2 pb-2 service-main">
         <div class="col-lg-2 col-md-2 col-sm-12 order-sm-2 service-details order-md-1 p-0">
            <img src="<?= IMG_BASE_URL ?>aep-images/ser-icon3.svg" width="60px" height="auto" alt="aep banner">
         </div>
         <div class="col-lg-8 col-md-10 col-sm-12 order-sm-1 order-md-2 pl-4">
            <h3>Which To Pick?</h3>
            <ul>
               <li>Traditional Medicare users can get Medicare Part D for prescriptions and consider supplemental insurance if needed.</li>
               <li>Medicare Advantage offers various plans covering Parts A and B, often including Part D drug coverage.</li>
            </ul>
         </div>
      </div>

      <div class="row d-block d-lg-none d-md-none">
         <div class="col-lg-12 col-md-12 col-sm-12 p-0">
            <div class="accordion_card">
               <button class="accordion"> 
               <div class="d-flex align-items-center">
               <img src="<?= IMG_BASE_URL ?>aep-images/ser-icon1.svg" width="60px" height="auto" alt="aep banner"> What is AEP (Annual Enrollment Period)?
               </div>
               </button>
               <div class="panel">
                  <p>Annual Enrollment Period (AEP) in the United States, is the time for the existing Medicare Insurance Plan beneficiaries to review, renew, or make adjustments to their health insurance plans.
               People over the age of 65 or those below 65, but with long-term disabilities can modify their health insurance coverage for the next year.</p>
               </div>
            </div>
            <div class="accordion_card">
               <button class="accordion">
               <div class="d-flex align-items-center">
               <img src="<?= IMG_BASE_URL ?>aep-images/ser-icon2.svg" width="60px" height="auto" alt="aep banner"> Types of Medicare Insurance Plans
               </div>
               </button>
               <div class="panel">
                  <p>Medicare beneficiaries can opt for either of the two:</p>
            <ul>
               <li>Traditional Medicare</li>
               <li>Medicare Advantage plans like HMOs and PPOs.</li>
            </ul>
               </div>
            </div>
            <div class="accordion_card">
               <button class="accordion"> 
               <div class="d-flex align-items-center">
               <img src="<?= IMG_BASE_URL ?>aep-images/ser-icon3.svg" width="60px" height="auto" alt="aep banner"> Which To Pick?
               </div>
               </button>
               <div class="panel">
                  <ul>
               <li>Traditional Medicare users can get Medicare Part D for prescriptions and consider supplemental insurance if needed.</li>
               <li>Medicare Advantage offers various plans covering Parts A and B, often including Part D drug coverage.</li>
            </ul>
               </div>
            </div>
         </div>
      </div>


   </div>
</div>
</div>
<div class="container-fluid plans-offered bg_illustration2 p-0">
   <!-- Section 2 end -->
   <!-- Section 3 -->
   <div class="container mt-5 mb-5">
      <div class="row mt-5">
         <div class="col-12 p-0 text-center">
            <h2 class="aep-head">Types of Plans Offered by All Care</h2>
         </div>
      </div>
      <div class="mt-4">
         <div class="col-12 p-0 plan-col">
            <img src="<?= IMG_BASE_URL ?>aep-images/plans-offered.svg" class="plan-img" height="auto" alt="aep banner">
         </div>
      </div>
      <div class="row mt-5">
         <div class="col-12 pt-2 pb-2 text-center">
            <a href="#contact-form" class="btn btn-primary">Request a callback</a>
         </div>
      </div>
      <div class="off-plan-row mt-5">
         <?php include 'partial/plancards.php'; ?>
      </div>
      <!-- Section 3 end -->
   </div>
</div>
<!-- Section 4 -->
<div class="container-fluid enrollment-period bg_illustration3 p-0">
   <div class="container pt-4 pb-4">
      <div class="row mt-4">
         <div class="col-12 p-0 text-center">
            <h2 class="aep-head pb-3">Do's and Don'ts of Enrollment Period</h2>
         </div>
      </div>
      <div class="row pt-2 pb-4">
         <div class="col-lg-6 col-md-6 col-sm-12">
            <ul class="aep-donot-list">
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/right.svg" width="30px" height="auto" alt="aep">
                  <p>Do review your current health insurance plan to ensure it still meets your needs.</p>
               </li>
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/right.svg" width="30px" height="auto" alt="aep">
                  <p>Do compare different plans, including premiums, deductibles, and coverage options.</p>
               </li>
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/right.svg" width="30px" height="auto" alt="aep">
                  <p>Do make sure to enrol or renew your coverage during the designated Enrollment Period to avoid gaps in coverage.</p>
               </li>
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/right.svg" width="30px" height="auto" alt="aep">
                  <p>Do seek help from insurance experts or navigators if you have questions or need assistance.</p>
               </li>
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/right.svg" width="30px" height="auto" alt="aep">
                  <p>Do check if you qualify for any subsidies or financial assistance.</p>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
            <ul class="aep-donot-list">
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/cross.svg" width="30px" height="auto" alt="aep">
                  <p>Don't miss the Enrollment Period deadline, as you may have to wait for the next Enrollment Period.</p>
               </li>
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/cross.svg" width="30px" height="auto" alt="aep">
                  <p>Don't assume your current plan will automatically renew; review and confirm your choices.</p>
               </li>
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/cross.svg" width="30px" height="auto" alt="aep">
                  <p>Don't overlook changes in your healthcare needs or prescription medications; update your plan accordingly.</p>
               </li>
               <li>
                  <img src="<?= IMG_BASE_URL ?>aep-images/cross.svg" width="30px" height="auto" alt="aep">
                  <p>Don't forget to consider all out-of-pocket costs when comparing plans, not just premiums.</p>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Section 4 end -->
<!-- Section 5 -->
<div class="container-fluid assist-enrollment bg_illustration2 p-0">
   <div class="container pt-4 pb-4">
      <div class="row pt-4 pb-4 m-0">
         <div class="col-lg-6 col-md-6 col-sm-12 p-0">
            <h2 class="pb-3">Tips to Assist with Enrollment Period:</h2>
            <img src="<?= IMG_BASE_URL ?>aep-images/enrollment-period.png" class="assist-img d-block d-lg-none d-md-none" width="" height="auto" alt="Enrollment Period">
            <ul class="p-3">
               <li>Plan Ahead: Start your research well in advance before the Enrollment Period and make informed decisions.</li>
               <li>Make a Checklist: Create a list of your healthcare needs and priorities to guide your plan selection.</li>
               <li>Seek Guidance: Consult insurance experts, agents, or online tools to compare plans.</li>
               <li>Review Your Medications: Check if your prescriptions are covered under your chosen plan.</li>
               <li>Consider Life Changes: Major life events, like marriage or retirement, can impact your coverage needs. Pick a plan accordingly.</li>
            </ul>
            <div class="mt-3">
               <a href="#contact-form" class="btn btn-primary">Request a callback</a>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 text-right">
            <img src="<?= IMG_BASE_URL ?>aep-images/enrollment-period.png" class="assist-img d-none d-lg-block d-md-block" width="" height="auto" alt="Enrollment Period">
         </div>
      </div>
   </div>
</div>
<!-- Section 5 end -->
<!-- Section 6 -->
<div class="container-fluid date-enrollment bg_illustration3 p-0">
   <div class="container pt-4 pb-4">
      <div class="row pt-4 pb-4">
         <div class="col-lg-4 col-md-5 col-sm-12">
            <h2 class="aep-head pb-3">Important Dates of the Enrollment Period</h2>
         </div>
         <div class="col-lg-8 col-md-7 col-sm-12">
            <p>While the exact dates for Annual Enrollment Period may vary, they are usually as follows:</p>
            <ul>
               <li>Starts: October 15th</li>
               <li>Ends: December 7th</li>
            </ul>
            <p>During this time, you can enrol in, or make changes to your Medicare Advantage and Medicare Prescription Drug Coverage.</p>
            <p>These changes apply from January 1st of the following year.</p>
            <p>⚠️ NOTE:  For Affordable Care Act (ACA) health plans, the Enrollment Period usually runs from November 1st through December 15th.</p>
         </div>
      </div>
   </div>
</div>
<!-- Section 6 end -->
<!-- Section 7 -->
<div class="container-fluid aep-faq bg_illustration2 p-0">
   <div class="container mt-5 mb-5">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="aep-head pb-3 text-center">Frequently Asked Questions</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="accordion_card">
               <button class="accordion">What happens if I miss the Enrollment Period deadline?</button>
               <div class="panel">
                  <p>Missing the Enrollment Period deadline may limit your ability to enroll in or change your plan. You may need to wait until the next Enrollment Period unless you qualify for a Special Enrollment Period (SEP).</p>
               </div>
            </div>
            <div class="accordion_card">
               <button class="accordion">Can I change my plan outside of the Enrollment Period?</button>
               <div class="panel">
                  <p>Yes, certain life events, like marriage, childbirth, or relocation, can trigger a Special Enrollment Period (SEP) allowing you to change your plan outside of Enrollment Period.</p>
               </div>
            </div>
            <div class="accordion_card">
               <button class="accordion">Do I have to enroll every year during the Enrollment Period?</button>
               <div class="panel">
                  <p>While it's a good practice to review your plan annually, you are not obligated to make changes if your current plan still meets your needs.</p>
               </div>
            </div>
            <div class="accordion_card">
               <button class="accordion">Are there financial assistance options available during the Enrollment Period?</button>
               <div class="panel">
                  <p>Yes, depending on your income and eligibility, you may qualify for subsidies and financial assistance through the Health Insurance Marketplace or Medicare.</p>
               </div>
            </div>
            <div class="accordion_card">
               <button class="accordion">Can I switch between Medicare Advantage and Original Medicare during Enrollment Period?</button>
               <div class="panel">
                  <p>Yes, Enrollment Period is the time when you can make this switch, as well as adjust your Medicare Part D prescription drug coverage.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-12 pt-2 pb-2 text-center">
            <a href="#contact-form" class="btn btn-primary">Request a callback</a>
         </div>
      </div>
   </div>
</div>
<!-- Section 7 end -->
<script>
   // JavaScript to toggle the accordion
   var accordions = document.querySelectorAll(".accordion");
   for (var i = 0; i < accordions.length; i++) {
       accordions[i].addEventListener("click", function() {
           this.classList.toggle("active");
           var panel = this.nextElementSibling;
           if (panel.style.display === "block") {
               panel.style.display = "none";
           } else {
               panel.style.display = "block";
           }
       });
   }
</script>
<div class="footer">
   <div class="container-fluid p-0 bg_illustration-ptrn9">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6">
               <div class="col-12 p-0">
                  <a class="navbar-brand mr-5" href="<?=BASE_URL ?>"><img src="<?=IMG_BASE_URL ?>logo.png" alt="All Care logo" class="logo" width="140px" height=""></a>
                  <p class="pt-2">
                     Copyright © <script>document.write(/\d{4}/.exec(Date())[0])</script> All Care Medical Consultants.
                  </p>
               </div>
            </div>
            <div class="col-12 col-md-6">
               <div class="row">
                  <div class="col-12">
                     <div class="d-none d-lg-block d-md-block">
                        <ul class="nav social_icon mt-4 mb-4 justify-content-end">
                           <li class="nav-item">
                              <a class="nav-link" href="https://www.facebook.com/allcarehealthcenter" target="new" aria-label="Go to the Facebook"><img src="<?=IMG_BASE_URL ?>facebook.svg" alt="allcare facebook" width="25px" height=""></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="https://www.instagram.com/allcare4U" target="new" aria-label="Go to the Instagram"><img src="<?=IMG_BASE_URL ?>instagram.svg" alt="allcare Instagram" width="25px" height=""></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="https://www.linkedin.com/company/all-care-medical-consultants-p-a-" target="new" aria-label="Go to the Linkedin"><img src="<?=IMG_BASE_URL ?>linkedin.svg" alt="allcare linkedin" width="25px" height=""></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="https://www.youtube.com/channel/UC9839f6lgwcMlH0JpRoX8qw" target="new" aria-label="Go to the Youtube"><img src="<?=IMG_BASE_URL ?>youtube.svg" alt="allcare youtube" width="25px" height=""></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md mt-4 d-block d-lg-none d-md-none">
               <h3 class="title">Social Media</h3>
               <ul class="nav social_icon">
                  <li class="nav-item">
                     <a class="nav-link" href="https://www.facebook.com/allcarehealthcenter" target="new" aria-label="Go to the Facebook"><img src="<?=IMG_BASE_URL ?>facebook.svg" alt="allcare facebook" width="25px" height=""></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://www.instagram.com/allcare4U" target="new" aria-label="Go to the Instagram"><img src="<?=IMG_BASE_URL ?>instagram.svg" alt="allcare Instagram" width="25px" height=""></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://www.linkedin.com/company/all-care-medical-consultants-p-a-" target="new" aria-label="Go to the Linkedin"><img src="<?=IMG_BASE_URL ?>linkedin.svg" alt="allcare linkedin" width="25px" height=""></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://www.youtube.com/channel/UC9839f6lgwcMlH0JpRoX8qw" target="new" aria-label="Go to the Youtube"><img src="<?=IMG_BASE_URL ?>youtube.svg" alt="allcare youtube" width="25px" height=""></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div style="background-color:#1AAFE6; padding:25px;"></div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/assets/js/jquery-3.5.1.min.js?v1.0" ></script>
<script src="/assets/js/popper.min.js?v1.0"></script>
<script src="/assets/js/bootstrap.min.js?v1.0"></script>
<!-- <script src="https://kit.fontawesome.com/e219e08fc6.js" ></script> -->
<script src="https://kit.fontawesome.com/bb092895f3.js?v1.0" crossorigin="anonymous" async></script>
<script>
   var anchorLinks = document.querySelectorAll('a[href^="#"]');
   anchorLinks.forEach(function(anchorLink) {
     anchorLink.addEventListener('click', function(event) {
       event.preventDefault();
       var targetId = this.getAttribute('href').substr(1); 
       var targetElement = document.getElementById(targetId);
       if (targetElement) {
   
         targetElement.scrollIntoView({
           behavior: 'smooth'
         });
   
         history.replaceState(null, null, window.location.pathname + window.location.search);
       }
     });
   });
</script>
<script>
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
   var acc = document.getElementsByClassName("accordion");
   var i;
   
   for (i = 0; i < acc.length; i++) {
     acc[i].addEventListener("click", function() {
       this.classList.toggle("active_ac");
       var panel = this.nextElementSibling;
       if (panel.style.maxHeight) {
         panel.style.maxHeight = null;
       } else {
         panel.style.maxHeight = panel.scrollHeight + "px";
       } 
     });
   }
</script>

<script src="assets/js/lite-yt-embed.js?v1.0"></script>
<script src="https://www.youtube.com/iframe_api?v1.0"></script>

<script async>
  // This function creates an <iframe> (and YouTube player)
  let player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('liteyoutube-player', {
      height: '460px',
      width: '100%',
      videoId: 'WdMzILprpmU',
      playerVars: {
        'autoplay': 1, // Autoplay the video
        'mute': 1,     // Mute the video
      },
    });
  }
</script>
</body>