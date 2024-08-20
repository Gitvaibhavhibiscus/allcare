<?php include 'partial/header.php';?>
<div class="container-fluid stress-management p-0">
   <div class="main-provider">
      <div class="mt-2">
         <div class="container tab-card-header mt-4">
            <ul class="nav nav-tabs card-header-tabs" id="providerTab">
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0 "  href="<?=BASE_URL ?>exercise-and-physical-activity">Exercise and Physical Activity</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0" href="<?=BASE_URL ?>lifestyle-medicine">Lifestyle Medicine</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0 active" href="<?=BASE_URL ?>stress-management">Stress Management</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link pl-0 pr-0" href="<?=BASE_URL ?>nutrition-and-weight-management">Nutrition and Weight Management</a>
               </li>
            </ul>
         </div>
         <div class="container banner_2 col-12 p-0 mt-4 mb-4">
            <div class="container p-0">
               <img src="<?=IMG_BASE_URL ?>banners/stress-management.webp" alt="Stress Management" class="w-100" />
            </div>
         </div>
         <div class="tab-content mt-3 bg_illustration" id="providerTabContent">
            <div class="tab-pane fade show active" id="Stress Management">
               <div class="container">
                  <div class="row">
                     <div class="col-12 mt-3 mb-4">
                        <p class="mt-3 mb-5">Join the All Care Medical and Wellness teams in the following programs designed for stress management.</p>
                        <div class="row">
                           <div class="col-12 col-sm mb-4">
                              <h5 class="mb-4">Counseling</h5>
                              <ul class="p-0 pl-3">
                                 <li>Work with our LMHC through our 25 minute and 50 minute sessions</li>
                                 <li><a href="/contact-us#schedule-appointment">Get Your Dose of Calmness</a></li>
                              </ul>
                           </div>
                           <div class="col-12 col-sm mb-4">
                              <h5 class="mb-4">Group Exercise</h5>
                              <ul class="p-0 pl-3">
                                 <li>Participate in our Silver Sneaker group exercise programs</li>
                                 <ul>
                                    <li>Classic, Circuit and Stability classes</li>
                                    <li>Yoga and Tai Chi</li>
                                 </ul>
                              </ul>
                           </div>
                           <div class="col-12 col-sm mb-4">
                              <h5 class="mb-4"><a href="<?=BASE_URL ?>lifestyle-medicine">Wellbeing Through Health</a></h5>
                              <ul class="p-0 pl-3">
                                 <li>Join us on the third Wednesday of each month for our 4-hour lifestyle medicine event with the Wellness Team</li>
                              </ul>
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
