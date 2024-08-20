<?php include 'partial/header.php';?>
<style>
	.head_banner .banner_img {
		width: 100%;
		height: 275px;
		object-fit: cover;
		object-position: center;
	}
</style>
<div class="container-fluid contact_us p-0">
	<div class="container-fluid p-md-0 bg_illustration mt-5">
        <div class="container">
            <div class="row contact_us_page_form w-50 m-auto">
                <div class="w-100 m-auto text-center">
                    <h2 class="pt-md-3 pb-md-4 font-weight-bold w-100 w-md-75 m-auto">Request More Information</h2>
                </div>
                <div class="w-100 w-md-50 m-auto">
                    <div class="row m-0 p-0 mt-0 mb-5">
                        <form id="form-enquiry" class="w-100" onsubmit="return ac4u_appointment_form_submit()">
                            <div class="text-left d-md-flex justify-content-center">
                                <div class="form-row col-md-6 com-sm-12 mx-0 mt-0 mb-3 p-0">
                                    <div class="col m-0 px-0 pl-0 pr-md-4 mb-3 mb-md-0">
                                        <label for="exampleInputEmail1" class="f-w-00 f-w-500 text-black h6 ">Full Name  <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationDefault01" name="fname" placeholder="First Name" required="">
                                    </div>
                                </div>
                                <div class="form-row col-md-6 com-sm-12 mx-0 mt-0 mb-3 p-0">
                                    <div class="col m-0 p-0">
                                        <label for="exampleInputEmail1" class="f-w-00 f-w-500 text-black h6 pb-md-3"></label>
                                        <input type="text" class="form-control" id="validationDefault01" name="lname" placeholder="Last Name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-left d-md-flex justify-content-center">
                                <div class="form-row col-md-6 com-sm-12 mx-0 mt-0 mb-3 p-0">
                                    <div class="col m-0 px-0 pl-0 pr-md-4 mb-3 mb-md-0">
                                        <label for="exampleInputEmail1" class="f-w-00 f-w-500 text-black h6 ">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationDefault01" name="mobile" placeholder="Mobile Number" required="">
                                    </div>
                                </div>
                                <div class="form-row col-md-6 com-sm-12 mx-0 mt-0 mb-3 p-0">
                                    <div class="col m-0 p-0">
                                        <label for="exampleInputEmail1" class="f-w-00 f-w-500 text-black h6 ">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="validationDefault01" name="email" placeholder="Email Address" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="f-w-00 f-w-500 text-black h6 mb-0">Services You Want to Know More About <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col mt-2 mb-3">
                                        <?php
                                            $sernm = array('Weight Loss Program', 'Fitness', 'Nutritional Counselling', 'Stress Management', 'Low Testosterone Clinic', 'Lifestyle Medicine', 'Wellness Community');
                                            foreach($sernm as $nm){
                                                echo '
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="service[]" value="'.$nm.'">
                                                        <label class="form-check-label" for="inlineCheckbox1">'.$nm.'</label>
                                                    </div>
                                                ';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <div class="form-row">
                                    <div class="col mb-4">
                                        <label for="exampleInputEmail1" class="f-w-00 f-w-500 text-black h6 ">Your Message</label>
                                        <textarea name="message" class="form-control" id="validationDefault01" cols="30" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                            </div>
                            <div class="text-left">
                                <div class="g-recaptcha" data-callback="ac4u_appointment_captcha_callback" data-expired-callback="ac4u_appointment_captcha_expired_callback" data-sitekey="<?=RECAPTCHA_SITE_KEY ?>"></div>
                                <div class="form-row">
                                    <div class="form-check ml-2 mt-4">
                                        <input class="form-check-input" type="checkbox" value="Agreed" name="consent" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">**Click here to Subscribe to Our Newsletter. Don't worry, we don't spam!</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary f-w-00 f-w-500 text-white h6  py-3 px-5 mt-4 w-100" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>


</div>

<script type="text/javascript">
	$(".address_header h3[location]").click(function(){

		let location = $(this).attr('location');	
		$('.google-map-iframe').hide();
		$('.google-map-iframe[location="'+location+'"]').show();
	
	});
	
	function ac4u_appointment_captcha_callback(){
		console.log("Event: Captcha Passed.");
		$('#form-enquiry [type="submit"]').attr("disabled",false);
	}
	function ac4u_appointment_captcha_expired_callback(){
		console.log("Event: Captcha Expired.");
		$('#form-enquiry [type="submit"]').attr("disabled",true);
	}


	function ac4u_appointment_form_submit(){
		console.log("Event: Appointment Submited. ");
		let data = $('#form-enquiry').serializeArray();
		$.ajax({
			url : "<?=BASE_URL.'api/enquiry-form' ?>",
			type: "POST",
			data: data,
			beforeSend: function(){
				$('#form-enquiry [type="submit"]').attr("disabled",true).html('Processing <i class="fa fa-spin fa-spinner"></i>');
			},
			success: function(response){
				let data = $.parseJSON(response);
				if(data.status){
                    $('#form-enquiry')[0].reset();
                }
				$('#form-enquiry div[form-messages]').html(data.message);
			},
			complete: function(){
				$('#form-enquiry [type="submit"]').attr("disabled",false).html('Submit');
				setTimeout(function(){
					$('#form-enquiry div[form-messages]').html("");
				},4000);
			},
			error: function(response){
				console.log(response);
				let data = $.parseJSON(response);
				$('#form-enquiry div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
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


<?php include 'partial/footer.php';?>
