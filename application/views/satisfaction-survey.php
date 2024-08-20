<?php include 'partial/header.php';?>
<script src="/assets/js/jquery-3.5.1.min.js" ></script>
<link rel="stylesheet" href="/assets/calendar/ui-calendar.css">
<script src="/assets/calendar/ui-calendar.js"></script>
<div class="container-fluid p-0 bg_illustration-ptrn11">
<div class="banner_2 col-12 p-0" style="background-image: url('<?=IMG_BASE_URL ?>banners/high-blood-pressure-hypertension-symptoms_banner.png');">
      <div class="bg_circle">
         <img src="<?=IMG_BASE_URL ?>illumination/banner_head.png" alt="allcare4u illustration" class="w-100" />
         <h1 class="m-0 text-white font-primary">Satisfaction Survey</h1>
      </div>
   </div>
<div class="survey-form">
	<div class="container">
		<div class="col2 mt-5 mb-4 mb-md-5 p-0">
			<h2 class="text-left">Patient Satisfaction Survey</h2>
			<p class="mt-1">Your feedback helps us acknowledge what is working for you, and how we could improve.</p>
		</div>
		<!--<form onsubmit="return ac4u_contact_form_submit()">
                     <iframe data-tally-src="https://tally.so/embed/m67agY?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="100%" height="100" frameborder="0" marginheight="0" marginwidth="0" title="Patient Satisfaction Survey"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script>
                  </form>-->
		<form class="mb-5" id="form-survey" onsubmit="return ac4u_survey_form_submit()">
			<div class="col-12 col-md-12 p-0 mb-2">
				<div class="row">
				  <div class="form-group col-12 col-md">
				  	<label for="" class="f-w-500 required">Full Name</label>
				    <input type="text" name="full_name" class="form-control" id="exampleInputName" placeholder="Full Name">
				  </div>
				</div>
			</div>
			<div class="col-12 col-md-12 p-0 mb-2">
			    <div class="row">
                    <div class="col-12 pb-2">
                        <label for="" class="required">Email Address</label>
                        <input type="email" name="email" pattern="[^@\s]+@[^@\s]+\.[a-zA-Z]{2,14}" class="form-control" placeholder="Your Email" required>
                    </div>
                </div>
			 </div>
			<div class="col-12 col-md-12 p-0 mb-2">
				<div class="row">
				  <div class="form-group col-12 col-md-12">
				  	<label for="" class="f-w-500 required">Date</label>
				    <input type="text" class="form-control" id="datepicker" placeholder="Select the Date of your Appointment">
					<input type="hidden" name="date" id="datepickerAltField">
				  </div>
				</div>
			</div>

			<div class="col-12 col-md-12 p-0">
				<div class="row">
					<div class="col-12 mb-3">
						<label class="f-w-00 f-w-500 text-black h6 mb-3">How was your visit with us?</label>
						<label class="checkcontainer">Excellent
						  <input type="radio" name="visit" value="Excellent" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>

						<label class="checkcontainer">Good
						  <input type="radio" name="visit" value="Good" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>

						<label class="checkcontainer">Poor
						  <input type="radio" name="visit" value="Poor" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>
					</div>

					<div class="col-12 mb-3">
						<label class="f-w-00 f-w-500 text-black h6 mb-3">How was the friendliness of the staff?</label>
						<label class="checkcontainer">Excellent
						  <input type="radio" name="friendliness" value="Excellent" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>

						<label class="checkcontainer">Good
						  <input type="radio" name="friendliness" value="Good" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>

						<label class="checkcontainer">Poor
						  <input type="radio" name="friendliness" value="Poor" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>
					</div>

					<div class="col-12 mb-3">
						<label class="f-w-00 f-w-500 text-black h6 mb-3">How was your wait time with us?</label>
						<label class="checkcontainer">Excellent
						  <input type="radio" name="waittime" value="Excellent" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>

						<label class="checkcontainer">Good
						  <input type="radio" name="waittime" value="Good" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>

						<label class="checkcontainer">Poor
						  <input type="radio" name="waittime" value="Poor" id="radios1">
						  <span class="radiobtn" for="radios1"></span>
						</label>
					</div>

					<div class="col-12 mb-3">
						<label class="f-w-00 f-w-500 text-black h6 mb-3">What was the location of your Appointment?</label>
						<label class="checkcontainer">Clearwater
						  <input type="radio" name="location" value="Clearwater" id="radios4">
						  <span class="radiobtn" for="radios4"></span>
						</label>

						<label class="checkcontainer">Palm Harbor
						  <input type="radio" name="location" value="Palm Harbor" id="radios4">
						  <span class="radiobtn" for="radios4"></span>
						</label>

						<label class="checkcontainer">Seminole
						  <input type="radio" name="location" value="Seminole" id="radios4">
						  <span class="radiobtn" for="radios4"></span>
						</label>
					</div>

					<div class="col-12 mb-3">
						<label class="f-w-00 f-w-500 text-black h6 mb-3">Which Physician(s) did you see today?</label>
						<label class="checkcontainer">Allison Portillo, NP
						  <input type="radio" name="physician" value="Allison Portillo, NP" id="radios5">
						  <span class="radiobtn" for="radios5"></span>
						</label>
						<label class="checkcontainer">Erin Butler, APRN
						  <input type="radio" name="physician" value="Erin Butler, APRN" id="radios5">
						  <span class="radiobtn" for="radios5"></span>
						</label>
						<label class="checkcontainer">Mustapha Benjouali, ARNP
						  <input type="radio" name="physician" value="Mustapha Benjouali, ARNP" id="radios5">
						  <span class="radiobtn" for="radios5"></span>
						</label>
						<label class="checkcontainer">N. Nicholas Engelman, DO
						  <input type="radio" name="physician" value="N. Nicholas Engelman, DO" id="radios5">
						  <span class="radiobtn" for="radios5"></span>
						</label>
						<label class="checkcontainer">Dr. M.I. Yamani
						  <input type="radio" name="physician" value="Dr. M.I. Yamani" id="radios5">
						  <span class="radiobtn" for="radios5"></span>
						</label>
						<label class="checkcontainer">Marc Barasch, DO
						  <input type="radio" name="physician" value="Marc Barasch, DO" id="radios5">
						  <span class="radiobtn" for="radios5"></span>
						</label>	
					</div>

					<div class="col-12">
						<div class="col-12 p-0 mb-3">
							<label class="f-w-00 f-w-500 text-black h6 mb-3">Would you recommend us to your family and friends?</label>
							<label class="checkcontainer">Yes
							  <input type="radio" name="recommendus" value="yes" id="radios6">
							  <span class="radiobtn" for="radios7"></span>
							</label>

							<label class="checkcontainer">No
							  <input type="radio" name="recommendus" value="no" id="radios6">
							  <span class="radiobtn" for="radios7"></span>
							</label>
						</div>
					</div>
				</div>

<div class="col-12 col-md-12 p-0 mb-2">
            <div class="row">
                           <div class="col-12 pb-2">
                              <label class="required">Additional Comments</label>
                              <textarea  name="comment" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Any feedback or suggestions you would like to share?"></textarea>
                           </div>
                        </div>
						</div>
			<div class="col-12 col-md-12 p-0 mb-2">
				<div class="row">
					<div class="col-12 pb-2">
						<div class="g-recaptcha"  
							data-callback="ac4u_survey_captcha_callback"
							data-expired-callback="ac4u_survey_captcha_expired_callback" 
							data-sitekey="<?=RECAPTCHA_SITE_KEY ?>">
						</div>	
						<button type="submit" class="btn btn-primary mt-3" disabled>Submit</button>
					</div>
					<div class="col-12" form-messages></div><br/>
				</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async></script>

<script>
$( "#datepicker" ).datepicker({
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	dateFormat:"dd-M-yy",
	altFormat:'yy-mm-dd',
	altField:'#datepickerAltField',
});

function ac4u_survey_captcha_callback(){
	console.log("Event: Captcha Passed.");
	$('#form-survey [type="submit"]').attr("disabled",false);
}
function ac4u_survey_captcha_expired_callback(){
	console.log("Event: Captcha Expired.");
	$('#form-survey [type="submit"]').attr("disabled",true);
}
function ac4u_survey_form_submit(){
	console.log("Event: Survey Form Submited. ");
	let data = $('#form-survey').serializeArray();
	$.ajax({
		url : "<?=BASE_URL.'api/survey-form' ?>",
		type: "POST",
		data: data,
		beforeSend: function(){
			$('#form-survey [type="submit"]').attr("disabled",true).html('Processing <i class="fa fa-spin fa-spinner"></i>');
		},
		success: function(response){
			console.log(response);
			let data = $.parseJSON(response);
			if(data.status){
				$('#form-survey')[0].reset();
			}
			$('#form-survey div[form-messages]').html(data.message);
		},
		complete: function(){
			$('#form-survey [type="submit"]').attr("disabled",false).html('Submit');
			setTimeout(function(){
				$('#form-survey div[form-messages]').html("");
			},10000);
		},
		error: function(response){
			console.log(response);
			let data = $.parseJSON(response);
			$('#form-survey div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
		}
	})
	return false;
}
</script>



<?php include 'partial/footer.php';?>
