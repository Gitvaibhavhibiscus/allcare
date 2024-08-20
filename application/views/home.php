<?php include 'partial/header.php'; ?>
<h1 class="d-none">Medical and Wellness Care Services</h1>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
   </ol>
   <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="<?= IMG_BASE_URL ?>home/banner-slider/Value-based-Care.jpg" alt="Award Winner">
         <div class="d-flex align-item-center">
         <div class="carousel-caption align-self-center text-left">
            <h5 class="awrdbnerhead" style="padding-bottom: 0px;">Value-based Health Care</h5>
            <p class="awrdbnerpara pb-2">Our healthcare team works with you to manage your overall health, keeping your personal health goals in mind.</span></p>
            <a href="<?= BASE_URL ?>about-us" class="btn btn-primary">Know more</a>
         </div>
         </div>
      </div>
       <div class="carousel-item">
         <img src="<?= IMG_BASE_URL ?>home/banner-slider/award-banner.webp" alt="Award Winner">
         <div class="carousel-caption align-self-center text-left aep-camp">
            <h5 class="awrdbnerhead" style="padding-bottom: 0px;">Dr. Yamani</h5>
            <p class="awrdbnerpara">and his clinical team are delighted to announce our <span>5-star 2023 Member Experience Rating.</span></p>
            <p class="awrdbnerpara">Thank you for trusting us with your health journey!</p>
            <a href="<?= BASE_URL ?>Dr-MI-Yamani" class="btn btn-primary">Know more about Dr. Yamani</a></div>
      </div> 
       <div class="carousel-item">
         <img src="<?= IMG_BASE_URL ?>home/banner-slider/Wellbeing-through-Health.jpg" alt="Award Winner">
         <div class="carousel-caption align-self-center text-left aep-camp">
            <h5 class="awrdbnerhead" style="padding-bottom: 0px;">Primary Care</h5>
            <p class="awrdbnerpara">Experience personalized health care that is focused on<br> your overall wellbeing.</span></p>
            <a href="<?= BASE_URL ?>medical-care" class="btn btn-primary">Know more</a>
         </div>
      </div>
       <div class="carousel-item">
         <img src="<?= IMG_BASE_URL ?>home/banner-slider/Larrytestimonial.jpg" alt="Award Winner">
         <div class="carousel-caption align-self-center text-left aep-camp">
            <h5 class="awrdbnerhead" style="padding-bottom: 0px;">"Dr. Yamani and the Wellness team are</br>
               very supportive, and I truly appreciate<br>
               what All Care has done for me.”
            </h5>
            <p class="awrdbnerpara">Larry recounts his 6 plus years as a patient at All Care, including his experience in our Cardiac Rehabilitation program, tailored to his needs.</p>
            <a href="<?= BASE_URL ?>clinical-wellness" class="btn btn-primary">View our Wellness Program</a>
         </div>
      </div>
       <div class="carousel-item">
         <img src="<?= IMG_BASE_URL ?>home/banner-slider/LifestyleMedicine.jpg" alt="All Care Providers">
         <div class="carousel-caption align-self-center text-left">
            <h5 class="text-black">Lifestyle Medicine</h5>
            <p class="awrdbnerpara">Using evidence-based interventions, such as nutrition, exercise, stress  management, and social support, to treat chronic conditions and improve your quality of life.</p>
            <a href="<?= BASE_URL ?>lifestyle-medicine" class="btn btn-primary">Learn more</a>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid home p-0">
   <section class="section2 bg-white">
      <div class="container ourservice_sec">
         <h3 class="mb-4 font-primary">Our Services</h3>
         <div class="row bg-white pr-3 pl-3 pt-0">
            <a href="<?=BASE_URL ?>medical-care" class="col-12 col-sm p-0 card_sec">
               <img src="<?=IMG_BASE_URL ?>home/medical-care.webp" alt="Fitness Center">
               <h3 class="text-uppercase text-center">Medical Care</h3>
            </a>
            <a href="<?=BASE_URL ?>clinical-wellness" class="col-12 col-sm p-0 card_sec">
               <img src="<?=IMG_BASE_URL ?>home/wellnesscare-2-2.webp" alt="Our Center">
               <h3 class="text-uppercase text-center">WELLNESS Care</h3>
            </a>
         </div>
      </div>
   </section>
   <section class="section2">
      <div class="container-fluid p-0 bg_illustration-ptrn2">
         <div class="container about_sec">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <img src="https://allcare4u.com/assets/images/home/group-providers.webp" class="rounded h_about_img" alt="Group Providers" loading="lazy">
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                  <p class="haboutsec-para text-left mt-3 mt-lg-0 ">Assembled by M.I. Yamani, M.D. (All Care’s Medical Director and Chief Executive Officer), our team has been serving communities for more than a decade with proven results. Between our technology, evidence-based solutions and a passion to provide, we’re here to deliver the best in healthcare services and procedures.</p>
                  <a href="<?= BASE_URL ?>providers" class="btn btn-primary">View All Providers</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <div class="container">
         <div class="d-flex justify-content-between mb-3">
            <h3 class="font-primary">Testimonials</h3>
            <a href="<?= BASE_URL ?>blogs" class="text-black"></a>
         </div>
         <div>
            <?php include 'partial/testimonial_model_box.php'; ?>
         </div>
      </div>
   </section>
   <div class="container-fluid p-0 bg_illustration">
      <section class="section2">
         <div class="container news-blog_sec">
            <div class="d-flex justify-content-between">
               <h3 class="mb-0 font-primary">Life at All Care</h3>
               <a href="<?= BASE_URL ?>blogs" class="btn btn-primary">View All</a>
            </div>
            <div class="row" style="flex-wrap:inherit;">
               <?php include 'partial/news-blog-tabs.php'; ?>
            </div>
         </div>
      </section>
   </div>
   <div class="container">
      <section class="brandlogos logo_images section7">
         <div class="col-12">
            <h3 class="mb-5 font-primary text-center">We accept most insurances</h3>
            <ul>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/careplus.png" class="logo_1" alt="A4M Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/wellcare.png" class="logo_2" alt="AAPL Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/humana.png" class="logo_2" alt="ACP Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/unitedhealthcare.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/aetna.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/medicare.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/optimum.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/freedomhealth.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/meritainhealth.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/ghi.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/goldenrule.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
               <li>
                  <img src="https://allcare4u.com/assets/images/insurances-partner/sunshinehealth.png" class="logo_2" alt="PCMA Logo" loading="lazy" width="80px" height="auto">
               </li>
            </ul>
         </div>
         <div class="text-center mt-5">
            <a href="<?= BASE_URL ?>patient-resources/#insurancelist" class="btn btn-primary">View all accepted insurances</a>
         </div>
      </section>
   </div>
   <!-- <section class="section3">
      <div class="container subscribe_our_newsletter">
         <h3 class="mb-0 font-primary">Subscribe to our newsletter</h3>
         <div class="col-12">
            <form class="row">
               <div class="form-group col-12 col-sm-5 col-5 pl-lg-0 pt-3">
                  <lable class="mb-4 required">First Name</lable>
                  <input type="text" class="form-control mt-2" id="exampleInputName" placeholder="Name" required="">
               </div>
               <div class="form-group col-12 col-sm-5 pt-3">
                  <lable class="mb-4 required">Email address</lable>
                  <input type="email" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required="">
               </div>
               <div class="subcribe-sub col-12 col-sm-2 text-lg-left text-center align-self-center">
                  <button type="submit" class="btn btn-primary w-100">Subscribe</button>
               </div>
            </form>
         </div>
      </div>
      </section> -->
</div>
<?php include 'partial/footer.php'; ?>