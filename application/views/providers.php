<?php include 'partial/header.php';?>
<div class="container-fluid providers p-0 ">
<div class="head_banner providers_head_banner col-12 p-0">
   <img src="<?=IMG_BASE_URL ?>banners/providers-banner.webp" class="banner_img" alt="Group Providers" />
   <div class="bottom_card">
      <div class="bg_circle">
         <img src="<?=IMG_BASE_URL ?>illumination/banner_head.png" alt="allcare4u illustration" class="w-100" />
         <h1 class="m-0 text-white font-primary">Providers</h1>
      </div>
   </div>
</div>
<div class="container-fluid p-0 bg_illustration-ptrn4">
   <div class="container mb-5">
      <div class="main-provider col-12">
         <div class="mt-3">
            <div class="tab-card-header mt-5">
               <ul class="nav nav-tabs card-header-tabs" id="providerTab">
                  <li class="nav-item">
                     <a class="nav-link pl-0 pr-0 active" data-toggle="tab" href="#Physicians">Physicians</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link pl-0 pr-0" data-toggle="tab" href="#WellnessTeam">Wellness Team</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link pl-0 pr-0" data-toggle="tab" href="#AdministrativeTeam">Administrative Team</a>
                  </li>
               </ul>
            </div>
            <div class="tab-content mt-3" id="providerTabContent">
               <div class="tab-pane fade p-0 show active" id="Physicians">
                  <p class="mt-4 mb-3">At All Care Medical Consultants, our physicians have diverse backgrounds in numerous areas of health and wellness. With a well-rounded pool of experience, the All Care team provides quality healthcare to both our patients and the community.
                  </p>
                  <p>The physicians at All Care are leaders in the medical and wellness care industry. We focus on innovative techniques and health plans, train with the latest technology and build years of experience in the field — all to provide you with a personalized healthcare experience you deserve.
                  </p>
                  <div class="row">
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>Dr-MI-Yamani">
                           <div class="providercard">
                              <img src="<?=IMG_BASE_URL.'providers/yamani.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Dr. M.I. Yamani, M.D.</h3>
                                 <h4 class="providerdesc">
                                 Internal Medicine & Primary Care
                                 </4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>dr-n-nicholas-engelman">
                           <div class="providercard">
                              <img src="<?=IMG_BASE_URL.'providers/dr-n-nicholas-engelman.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Dr. Nick Engelman, D.O.</h3>
                                 <h4 class="providerdesc">
                                 Primary Care Provider
                                 </4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <!--<div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>Dr-Kenneth-Neifeld">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/dr-kenneth-neifeld.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Dr. Kenneth Neifeld, M.D.</h3>
                                 <h4 class="providerdesc">
                                    Internal Medicine, Primary Care Provider
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>-->
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>Erin-Butler">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/erin-butler.jpg' ?>" class="providercard-img-top ezlazyloaded"> 
                              <div class="card-body">
                                 <h3 class="provider-title">Erin Butler, APRN</h3>
                                 <h4 class="providerdesc">
                                    Primary Care & Wellness Provider
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>Mustapha-Benjouali">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/mustapha.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Mustapha Benjouali, APRN</h3>
                                 <h4 class="providerdesc">
                                    Primary Care Provider
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>allison-portillo">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/Allison.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Allison Portillo, APRN</h3>
                                 <h4 class="providerdesc">
                                    Primary Care Provider
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade p-0" id="WellnessTeam">
                  <p class="mt-4 mb-3">
                     At All Care Wellness, we make physical fitness fun with a great exercise routine, mental fitness easy with Yoga and Medical, and Lifestyle care hassle-free.
                  </p>
                  <p>All this is possible only because of our very healthy and fit trainers, who will provide you the best care and ensure wholesome well being.
                  </p>
                  <div class="row">
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>Dr-MI-Yamani">
                           <div class="providercard">
                              <img src="<?=IMG_BASE_URL.'providers/yamani.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Dr. M.I. Yamani, M.D.</h3>
                                 <h4 class="providerdesc">
                                   Internal Medicine & Primary Care
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>dr-n-nicholas-engelman">
                           <div class="providercard">
                              <img src="<?=IMG_BASE_URL.'providers/dr-n-nicholas-engelman.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Dr. Nick Engelman, D.O.</h3>
                                 <h4 class="providerdesc">
                                 Primary Care Provider
                                 </4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>Erin-Butler">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/erin-butler.jpg' ?>" class="providercard-img-top ezlazyloaded"> 
                              <div class="card-body">
                                 <h3 class="provider-title">Erin Butler, APRN</h3>
                                 <h4 class="providerdesc">
                                    Primary Care & Wellness Provider
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>melissa-georgopolis">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/melissa.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Melissa Georgopolis</h3>
                                 <h4 class="providerdesc">
                                    Licensed Mental Health Counselor
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>charlie-mack">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/charlie-mack.jpg' ?>" class="providercard-img-top ezlazyloaded"> 
                              <div class="card-body">
                                 <h3 class="provider-title">Charlie Mack</h3>
                                 <h4 class="providerdesc">
                                    Exercise Physiologist
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>taylor-temnick">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/taylortemnick.png' ?>" class="providercard-img-top ezlazyloaded"> 
                              <div class="card-body">
                                 <h3 class="provider-title">Taylor Temnick, <br>EdD, LAT, ATC, CES, RYT</h3>
                                 <h4 class="providerdesc">
                                    Director of Wellness
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade p-0" id="AdministrativeTeam">
                  <p class="mt-4 mb-3">
                     While the Physicians and Wellness team is busy doing their work, our support staff acts as a constant backbone, holding the entire All Care team in one big family. Our support staff ensures that both the patients as well as the team stays in sync with the All Care vision and objectives.
                  </p>
                  <div class="row">
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>mussarat-jehan">
                           <div class="providercard">
                              <img src="<?=IMG_BASE_URL.'providers/mussarat-jehan-cfo.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Mussarat Jehan</h3>
                                 <h4 class="providerdesc">
                                    Chief Financial Operator
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>todd-phillips">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/todd.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Todd Phillips</h3>
                                 <h4 class="providerdesc">
                                    Chief Operating Officer
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>caroline-mcLaughlin">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/caroline-mclaughlin-managed-care-director.jpg' ?>" class="providercard-img-top ezlazyloaded"> 
                              <div class="card-body">
                                 <h3 class="provider-title">Caroline McLaughlin</h3>
                                 <h4 class="providerdesc">
                                    Managed Care Director
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>moneak-reid">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/moneak-reid-referral-coordinator.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Moneak Reid</h3>
                                 <h4 class="providerdesc">
                                    Referrals Supervisor
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>cassandra-cruz">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/Cassandra.jpg' ?>" class="providercard-img-top ezlazyloaded">
                              <div class="card-body">
                                 <h3 class="provider-title">Cassandra Cruz</h3>
                                 <h4 class="providerdesc">
                                    Lead Certified Medical Assistant and Palm Harbor Office Supervisor
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-lg-3 col-md-4">
                        <a href="<?= BASE_URL ?>stephanie-taramona">
                           <div class="providercard">
                              <img decoding="async" src="<?=IMG_BASE_URL.'providers/Stephanie_T.jpg' ?>" class="providercard-img-top ezlazyloaded"> 
                              <div class="card-body">
                                 <h3 class="provider-title">Stephanie Taramona</h3>
                                 <h4 class="providerdesc">
                                    Administrative Supervisor
                                 </h4>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="brandlogos logo_images section7">
      <div class="col-12">
       <h3 class="mb-5 font-primary text-center">Our Partners</h3>
         <ul>
            <li>
               <a href="http://www.a4m.com/" target="new"><img src="https://allcare4u.com/assets/images/home/a4m.png" class="logo_1" alt="A4M Logo" loading="lazy" width="100px" height="auto"></a>
            </li>
            <li>
               <a href="http://www.physicianleaders.org/" target="new"><img src="https://allcare4u.com/assets/images/home/aapl.png" class="logo_2" alt="AAPL Logo" loading="lazy" width="100px" height="auto"></a>
            </li>
            <li>
               <a href="https://www.acponline.org/" target="new"><img src="https://allcare4u.com/assets/images/home/acp.png" class="logo_2" alt="ACP Logo" loading="lazy" width="100px" height="auto"></a>
            </li>
            <li>
               <a href="http://pinellascma.org/" target="new"><img src="https://allcare4u.com/assets/images/home/acm-pcma.png" class="logo_3" alt="PCMA Logo" loading="lazy" width="100px" height="auto">
               </a>
            </li>
         </ul>
      </div>
   </section>
<?php //include('partial/modelbox-providers-team.php') ?>
<?php include 'partial/footer.php';?>