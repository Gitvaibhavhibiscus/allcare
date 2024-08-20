<?php include 'partial/header.php';?>
<style>
.main-provider {
    position: relative;
}
.eventdate {
    position: relative;
    width: 100%;
    padding: 1rem 0rem !important;
    border-radius: 15px;
}
.eventdate h3 {
    font-size: 20px;
    margin-top: 5px;
}
.eventdate h2 {
    font-size: 23px;
    color:#1990ff;
    padding-bottom: 15px;
}
.eventdate2 {
    position: relative;
    width: 100%;
    margin-top:20px;
    padding: 1rem 2rem !important;
    border-radius: 0px;
}
.eventdate2 h3 {
    font-size: 20px;
    margin-top: 5px;
}
.eventdate2 h2 {
    font-size: 23px;
    color:#1990ff;
    padding-bottom: 15px;
}
</style>
<div class="container-fluid nutrition-weight p-0">
   <div class="main-provider">
      <div class="mt-2">
         <div class="container tab-card-header mt-4">
            <ul class="nav nav-tabs card-header-tabs" id="providerTab">
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0 "  href="<?=BASE_URL ?>exercise-and-physical-activity">Exercise and Physical Activity</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0 active" href="<?=BASE_URL ?>lifestyle-medicine">Lifestyle Medicine</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0" href="<?=BASE_URL ?>stress-management">Stress Management</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0 " href="<?=BASE_URL ?>nutrition-and-weight-management">Nutrition and Weight Management</a>
               </li>
            </ul>
         </div>
         <div class="container banner_2 col-12 p-0 mt-4 mb-4">
            <div class="container p-0">
               <img src="<?=IMG_BASE_URL ?>banners/lifestyle-medicine.webp" alt="Lifestyle Medicine" class="w-100" />
            </div>
         </div>
         <div class="tab-content mt-5 bg_illustration" id="providerTabContent">
            <div class="tab-pane fade show active" id="Lifestyle-Medicine">
                <div class="location-provider">
                  <div class="container">
                     <div class="row">
                        <div class="col-12 col-md-6 mb-5 d-none d-lg-block d-md-block">
                           <img src="<?=IMG_BASE_URL ?>lifestyle-medicine_1.jpg" alt="Lifestyle Medicine" class="w-100" />
                        <div class="eventdate2 p-5 bg-white">
         <h3>Upcoming</h3>
         <h2>Lifestyle Medicine Events</h2>
         <div class="d-flex"><p style="font-weight: 700;">April 24, 2024</p></div>
         <div class="d-flex"><p style="font-weight: 700;">September 25, 2024</p></div>
         <div class="d-flex"><p style="font-weight: 700;">November 20, 2024</p></div>
         </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                           <h3>What is Lifestyle Medicine?</h3>
                           <p>Lifestyle medicine is a medical specialty that uses therapeutic lifestyle interventions as a primary modality to treat chronic conditions, including but not limited to, cardiovascular disease, type 2 diabetes, and obesity, via the pillars of lifestyle medicine: nutrition, physical activity, restorative sleep, stress management, and mindful connections through social support. Join Dr. Yamani and the Wellness team on your health and wellness journey today!</p>
                           <h5 class="mt-4">Join us for Wellbeing Through Health</h5>
                           <p>When?  The third Wednesday in January, April, September, and November from 12:00-4:00 pm at our Seminole office</p>
                           <p>All Care Medical hosts a four hour interactive event and plant-based lunch, led by Dr. Yamani and the All Care Wellness team, comprised of licensed or certified health and wellness providers to teach and share ways to integrate healthy changes to reverse or alleviate symptoms of chronic disease. The team will address additional lifestyle areas including restorative sleep, psychology and behavior, as well as other health and wellness information, including exercise, nutrition, stress management, and mindful connections. Participants will interact with Dr. Yamani and members of the Wellness team and learn new strategies and tools to implement a healthy lifestyle.</p>
                           <div class="bg_sec" style="background: #74b048; padding: 10px; display: inline-block;  border-radius: 5px;
                              color: #fff;  margin-bottom: 20px;">To attend, RSVP by emailing <a href="mailto:wellness@allcare4u.com" style="color: #fff; font-weight: 700; text-decoration: underline;">wellness@allcare4u.com</a> or call <a href="tel:7275454545" style="color: #fff; font-weight: 700; text-decoration: underline;">727-545-4545</a> and provide your name, a contact number, and number of guests</div>
                           <p>The event costs $35. Contact a front office associate or Wellness team member to see if your insurance provides a discount for the program fee.</p>
                        </div>
                        <div class="col-12 col-md-6 mb-5 d-block d-lg-none d-md-none">
                           <img src="<?=IMG_BASE_URL ?>lifestyle-medicine_1.jpg" alt="Lifestyle Medicine" class="w-100" />
                           <div class="eventdate p-5 bg-white">
         <h3>Upcoming</h3>
         <h2>Lifestyle Medicine Events</h2>
         <div class="d-flex"><p style="font-weight: 700;">April 24, 2024</p></div>
         <div class="d-flex"><p style="font-weight: 700;">September 25, 2024</p></div>
         <div class="d-flex"><p style="font-weight: 700;">November 20, 2024</p></div>
         </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'partial/footer.php';?>