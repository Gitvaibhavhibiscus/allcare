<?php include 'partial/header.php';?>
<style>
   .head_banner .banner_img {width: 100%;height: 275px;object-fit: cover; object-position: center;} 
   .footer {position: relative;background-color: #f8fdff;}
</style>
<div class="container-fluid patient_resources p-0">
   <div class="head_banner col-12 p-0">
      <img src="<?=IMG_BASE_URL ?>patient-resources/patientbanner.webp" alt="Patient Resources Banner"class="w-100 thumb banner_img" />
      <div class="bottom_card">
         <div class="bg_circle">
            <img src="<?=IMG_BASE_URL ?>illumination/banner_head.png" alt="allcare4u illustration" class="w-100" />
            <h1 class="m-0 text-white font-primary">Patient <br/>Resources</h1>
         </div>
      </div>
   </div>
   <div class="container-fluid p-0 bg_illustration-ptrn6 ptres-section">
      <div class="container mt-5 mb-5">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <p>At All Care, we are committed to providing our patients with all of the information they need, ahead of time. </p>
               <p>We know that your time is precious which is why we include our information gathering forms here online, giving you the chance to prepare them in advance of your visit, or simply make yourself familiar with the questions that we will be asking. Please take the time to review, print and fill out our forms, at your leisure.</p>
               <div class="row mt-4">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <a href="https://mycw27.eclinicalweb.com/portal2573/jsp/100mp/login_otp.jsp" class="btn btn-primary w-100" target="_blank">Login to your account</a>
                  </div>
               </div>
            </div>
            <div class="patient-listing col-lg-4 col-md-4 col-sm-12">
               <ul class="patient-view w-100 list-unstyled ">
                  <li class="text-decoration-underline"><a href="<?=BASE_URL ?>assets/pdf/updated-pt-paperwork.pdf" target="_blank"><span>Updated Patient Paperwork 2024 </span><img src="<?=IMG_BASE_URL ?>patient-resources/download-icon.svg"></a></li>
                  <li class="text-decoration-underline"><a href="<?=BASE_URL ?>assets/pdf/new-patient-paperwork.pdf" target="_blank"><span>New Patient Paperwork 2024 </span><img src="<?=IMG_BASE_URL ?>patient-resources/download-icon.svg"></a></li>
                  <li class="text-decoration-underline"><a href="<?=BASE_URL ?>satisfaction-survey"><span>Satisfaction Survey Form </span><img src="<?=IMG_BASE_URL ?>patient-resources/arrow-right.svg"></a></li>
              </ul>
            </div>
         </div>
      </div>
   </div>
  <div id="insurancelist" class="container-fluid p-0 bg_illustration-ptrn7">
   <div class="container mt-5 mb-5 bg_illustration-ptrn8">
      <h3 class="mb-3"><img src="<?=IMG_BASE_URL ?>patient-resources/file-shield.webp"> List of insurances we accept</h3>
      <p class="col-12 col-sm-6">We do not accept Workman’s Comp. Cases under any circumstance.
         We will only file Personal Injury Claims on behalf of Managed Care Patients.
         We will accept any out of state BCBS plan that can be filed to our Local BCBS.
      </p>
      <div class="mt-5 mb-2">
         <h5 class="mb-3">Managed Care Plans</h5>
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
      </div>
      <div class="mt-5 mb-2">
         <h5 class="mb-3">Medicare & Medicare Advantage Plans</h5>
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
      </div>
      <div class="mt-5 mb-2">
         <h5 class="mb-3">Commercial Plans & Networks</h5>
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
             <h6 class="mt-3">Disclaimer: To guarantee the coverage offered by your specific insurance plan, please call our billing team so they can verify your benefits!</h6>
      </div>
   </div>
</div>
</div>
<?php include 'partial/footer.php';?>