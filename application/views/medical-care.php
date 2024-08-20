<?php include 'partial/header.php';?>
<div class="container-fluid medical-care p-0">
	<div class="banner_2 col-12 p-0" style="background-image: url('<?=IMG_BASE_URL ?>medical-care/medicalcarebanner.webp');">
		<div class="bg_circle">
			<img src="<?=IMG_BASE_URL ?>illumination/banner_head.png" alt="allcare4u illustration" class="w-100 banner_img" />
			<h1 class="m-0 text-white font-primary">Medical <br/>Care</h1>
		</div>
	</div>
<div class="container-fluid p-0 bg_illustration-ptrn5">
	<div class="container mt-5">
		<p>At All Care, we do not believe in medical treatment, but Medical Care. Through our team of expert doctors and professionals, we provide the best care to our patients which is necessary for the health and welfare of each individual. </p>

		<p>Other than restoring health, we believe in a holistic approach, which includes maintaining the individual's health through treatment, wellness exercises, and other care, supervision. Medical care for us is much more than just treating our patients, it is about ensuring that we establish a friendly relationship with our customers, where they can share their health problems with us and we can comfort and heal them with our services.</p>  

		<p>All Care is your Health Guidance expert, always available to serve you.</p>
	</div>

	<div class="container mt-5 mb-5">
      <div class="row">
         <div class="nutrisec col-md-12 pt-2 pb-4">
            <div class="nutri_tab">
               <button class="tablinks" onclick="opensupplements(event, 'Congestive_Heart_Failure')" id="defaultOpen">Congestive Heart Failure</button>
               <button class="tablinks" onclick="opensupplements(event, 'COPD/Emphysema')">COPD/Emphysema</button>
               <button class="tablinks" onclick="opensupplements(event, 'Diabetes_Treatment')">Diabetes Treatment</button>
               <button class="tablinks" onclick="opensupplements(event, 'Acute_Pain')">Acute Pain</button>
               <button class="tablinks" onclick="opensupplements(event, 'High Blood_Pressure')">High Blood Pressure</button>
               <button class="tablinks" onclick="opensupplements(event, 'Womens_Health')">Women's Health</button>
               <button class="tablinks" onclick="opensupplements(event, 'Depression')">Depression</button>
               <button class="tablinks" onclick="opensupplements(event, 'Asthma')">Asthma</button>
               <button class="tablinks" onclick="opensupplements(event, 'High_Cholesterol')">High Cholesterol</button>
               <button class="tablinks" onclick="opensupplements(event, 'Obesity_Treatment')">Obesity Treatment</button>
               <button class="tablinks" onclick="opensupplements(event, 'Skin_Procedure')">Skin Procedure</button>
               <button class="tablinks" onclick="opensupplements(event, 'Osteopathic_Manipulative_Treatment')">Osteopathic Manipulative Treatment</button>
            </div>
            <div id="Congestive_Heart_Failure" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Congestive Heart Failure</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Heart disease is the leading cause of death for men, women, and people of most 
                     racial and ethnic groups in the United States. About 655,000 Americans die from 
                     heart disease each year—that’s 1 in every 4 deaths.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us#meeting-link" target="_blank" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>congestive-heart-failure"><p class="readmore-link mt-5">Learn more about Congestive Heart Failure</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/heart-failure.webp" alt="heart failure" >
                  </div>
               </div>
            </div>
            <div id="COPD/Emphysema" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>COPD/Emphysema</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>An estimated 16 million adults have COPD in the United States. 
                     The American Lung Association (ALA) thinks there may be as many as 
                     24 million American adults living with COPD. Rates of COPD are highest 
                     in the Southeast and Midwest states.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>copd-emphysema"><p class="readmore-link mt-5">Learn more about COPD/Emphysemae</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/copd.webp" alt="copd" >
                  </div>
               </div>
            </div>
            <div id="Diabetes_Treatment" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Diabetes Treatment</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Diabetes mellitus, or simply diabetes, is a group of metabolic diseases 
                     in which a person has high blood sugar, either because the pancreas does not 
                     produce enough insulin or because cells do not respond to the insulin that is 
                     produced. There are three main types of diabetes: type 1, type 2, and gestational.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>diabetes-treatment"><p class="readmore-link mt-5">Learn more about Diabetes Treatment</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/diabetes.webp" alt="diabetes" >
                  </div>
               </div>
            </div>
            <div id="Acute_Pain" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Acute Pain</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Everyone has been in pain at some point in their life. It’s an uncomfortable or 
                     unpleasant feeling or sensation in the body. The feeling of pain is typically an 
                     indication that something is wrong and can come on suddenly or gradually. Each 
                     person is adept at judging their level of pain, which can include feelings ranging 
                     from mild and infrequent to severe and constant.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>acute-pain"><p class="readmore-link mt-5">Learn more about Acute Pain</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/acute-pain.webp" alt="acute pain" >
                  </div>
               </div>
            </div>
            <div id="High Blood_Pressure" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>High Blood Pressure</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>High blood pressure (hypertension) is one of the most prevalent health conditions 
                     that Americans face. 1 in every 3 U.S. adults – has high blood pressure, and nearly 
                     20 percent do not know they have it.
                     </p>
                    <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                    <a href="<?= BASE_URL ?>high-blood-pressure"><p class="readmore-link mt-5">Learn more about High Blood Pressure</p></a>
                    </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/high-blood-pressure.webp" alt="high blood pressure" >
                  </div>
               </div>
            </div>
            <div id="Womens_Health" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Women's Health</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Women generally live long and healthy lives in the United States, as compared to 
                     other less developed countries, but they still face many health issues involving 
                     cancer, disease, mental health, and fertility. In 2017, heart disease and cancer 
                     were the leading causes of death among women in the U.S., accounting for a combined 
                     43 percent of all female deaths.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>womens-health"><p class="readmore-link mt-5">Learn more about Women's Health</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/womens-health.webp" alt="womens health" >
                  </div>
               </div>
            </div>
            <div id="Depression" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Depression</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Anxiety disorders are the most common mental illness in the U.S., affecting 40 
                     million adults in the United States age 18 and older, or 18.1% of the population 
                     every year. Anxiety disorders are highly treatable, yet only 36.9% of those 
                     suffering receive treatment.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>depression"><p class="readmore-link mt-5">Learn more about Depression</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/depression.webp" alt="depression" >
                  </div>
               </div>
            </div>
            <div id="Asthma" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Asthma</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>According to the Centers for Disease Control and Prevention (CDC), 1 in 13 people 
                     have asthma. More than 25 million Americans have asthma. This is 7.7 percent of 
                     adults and 8.4 percent of children.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>asthma"><p class="readmore-link mt-5">Learn more about Asthma</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/asthama.webp" alt="asthama.webp" >
                  </div>
               </div>
            </div>
            <div id="High_Cholesterol" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>High Cholesterol</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>93 million U.S. adults age 20 or older have total cholesterol levels higher 
                     than 200 mg/dL. Nearly 29 million adult Americans have total cholesterol levels 
                     higher than 240 mg/dL. 7% of U.S. children and adolescents ages 6 to 19 have 
                     high total cholesterol.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>high-cholesterol"><p class="readmore-link mt-5">Learn more about High Cholesterol</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/high-blood-pressure.webp" alt="high blood pressure" >
                  </div>
               </div>
            </div>
            <div id="Obesity_Treatment" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Obesity Treatment</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Over 70 million adults in the U.S. are obese (35 million men and 35 million women). 
                     99 million are overweight (45 million women and 54 million men). Overall two-thirds of 
                     adults in the United States are overweight or obese. Obesity also increases the 
                     risk of dozens of diseases and conditions like type 2 diabetes, heart disease, 
                     stroke, cancer, and many other diseases.
                     </p>
                    <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                    <a href="<?= BASE_URL ?>obesity-treatment"><p class="readmore-link mt-5">Learn more about Obesity Treatment</p></a>
                    </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/obesity.webp" alt="obesity" >
                  </div>
               </div>
            </div>
            <div id="Skin_Procedure" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Skin Procedure</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Our skin is constantly protecting us, it acts as a layer that keeps our body free 
                     from infection and keeps you from getting sick. Taking care of your skin helps your 
                     skin in doing the job right and helps in preventing future problems, like wrinkles 
                     and even skin cancer.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>skin-procedure"><p class="readmore-link mt-5">Learn more about Skin Procedure</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/skin-procedure.webp" alt="skin-procedure.webp" >
                  </div>
               </div>
            </div>
            <div id="Osteopathic_Manipulative_Treatment" class="nutri_tabcontent">
               <div class="nutricard">
                  <div class="nutricard-content">
                     <div class="nutriprc d-flex pb-3">
                        <h3>Osteopathic Manipulative Treatment</h3>
                     </div>
                     <div class="all-tabs-details">
                     <p>Osteopathic Manipulative Treatment or OMT, is a set of hands-on techniques used by 
                     osteopathic physicians (DOs) to diagnose, treat, and prevent illness or injury. 
                     Using OMT, a DO moves a patient's muscles and joints using techniques that include 
                     stretching, gentle pressure and resistance.
                     </p>
                     <a href="<?= BASE_URL ?>contact-us" class="btn btn-primary mt-3">Schedule an appointment</a>
                     <a href="<?= BASE_URL ?>osteopathic-manipulative-treatment"><p class="readmore-link mt-5">Learn more about Osteopathic Manipulative Treatment</p></a>
                     </div>
                  </div>
                  <div class="mediacalcare-image">
                     <img src="<?=IMG_BASE_URL ?>medical-disease/osteopathic.webp" alt="osteopathic" >
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</div>
<script>
   function opensupplements(evt, supplementsName) {
     var i, nutri_tabcontent, tablinks;
     nutri_tabcontent = document.getElementsByClassName("nutri_tabcontent");
     for (i = 0; i < nutri_tabcontent.length; i++) {
       nutri_tabcontent[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablinks");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" active", "");
     }
     document.getElementById(supplementsName).style.display = "block";
     evt.currentTarget.className += " active";
   }
   
   // Get the element with id="defaultOpen" and click on it
   document.getElementById("defaultOpen").click();
   
</script>
<script>
   var acc = document.getElementsByClassName("mobile-accordion");
   var i;
   
   for (i = 0; i < acc.length; i++) {
     acc[i].addEventListener("click", function() {
       this.classList.toggle("active");
       var mbpanel = this.nextElementSibling;
       if (mbpanel.style.display === "block") {
         mbpanel.style.display = "none";
       } else {
         mbpanel.style.display = "block";
       }
     });
   }
</script> 

<?php include 'partial/footer.php';?>
