<?php include 'partial/header.php';?>
<style>
    .bg-text {
        background-color: #20bf55;
        background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%);
        color: white;
        font-weight: bold;
        z-index: 2;
        width: 100%;
        padding: 4em;
        text-align: center;
    }
    .row.contact_us_page_form p {
        font-size: 25px;
        line-height: 32px;
    }
    .section-title {
        font-size: 36px;
        color: #212121;
        line-height: 52px;
        padding-bottom: 20px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin-bottom: 15px;
    }
    .section-title:before, .section-title:after, .countdown-timer .headline:before, .countdown-timer .headline:after {
        left: 50%;
        margin-left: -45px;
    }
    .section-title:before, .countdown-timer .headline:before {
        position: absolute;
        content: '';
        margin-right: 15px;
        bottom: 8px;
        width: 48px;
        height: 1px;
        background-color: #8cc73f;
    }
    .section-title:after, .countdown-timer .headline:after {
        margin-left: -30px;
    }
    .section-title:after, .countdown-timer .headline:after {
        position: absolute;
        content: '';
        bottom: 2px;
        width: 48px;
        height: 1px;
        background-color: #8cc73f;
    }
    #form-event {
        background-color: #fff;
        padding: 56px 56px 42px;
        box-shadow: 0 0 20px rgb(0 0 0 / 20%);
    }
    .emoji {
        display: none;
        padding: 1rem;
    }

    .emoji span {
        font-size: 4rem;
        padding: 0 .5rem;
    }
    .countdown-timer .headline h1 {
        font-size: 40px;
        color: #212121;
        text-transform: uppercase;
        line-height: 48px;
    }
    #countdown {
        margin: 35px 0 50px 0;
    }
    .time-entry:first-child {
        border-left: none;
    }
    .time-entry {
        display: inline-block;
        width: 120px;
        margin: 15px;
        height: 120px;
        padding: 20px;
        box-shadow: 1px 10px 20px rgb(0 0 0 / 20%);
        border-radius: 4px;
        background: #fff;
        text-align: center;
        font-weight: 400;
        color: #212121;
        font-size: 16px;
        text-transform: uppercase;
        line-height: 22px;
    }
    .time-entry span {
        font-size: 45px;
        line-height: 45px;
        font-weight: 700;
        display: block;
        color: #212121;
        margin-bottom: 10px;
    }
    .countdown-timer .headline:before {
        top: 58px;
        bottom: 0;
    }
    .countdown-timer .headline:after {
        top: 64px;
        bottom: 0;
    }
    .counter-section .counter .icon i {
        font-size: 50px;
        color: #fff;
        margin-bottom: 1.2rem;
    }
    .counter-section .counter p {
        font-size: 22px;
        margin: 10px 0;
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;
    }
    .counter-section .counter span {
        color: #fefefe;
        font-size: 14px;
        line-height: 25px;
        font-weight: 400;
        display: block;
        text-transform: uppercase;
    }
</style>
<section id="show_signup">
    <div class="bg-text">
        <p class="text-white font-jose m-auto pb-4" style="visibility: visible;-webkit-animation-delay: .6s;-moz-animation-delay: .6s;animation-delay: .6s;font-size: 1.8rem;line-height: 3rem;">All Care Event</p>
        <p class="text-white font-jose m-auto pb-4" style="visibility: visible;-webkit-animation-delay: .6s;-moz-animation-delay: .6s;animation-delay: .6s;font-size: 2.8rem;line-height: 3rem;"><?php echo (isset($event['name']) && !empty($event['name'])) ? $event['name'] : ''; ?></p>
        <h1 class="text-white font-jose pt-2 pb-4" style="visibility: visible;-webkit-animation-delay: .4s;-moz-animation-delay: .4s;animation-delay: .4s;font-size: 3rem;line-height: 3rem;"><?php echo (isset($event['eventSubTitle'])) ? $event['eventSubTitle'] : '';?></h1>
        <p class="text-white font-jose mb-0" style="visibility: visible;-webkit-animation-delay: .6s;-moz-animation-delay: .6s;animation-delay: .6s;font-size: 1.8rem;line-height: 3rem;"><?php echo (isset($event['hostedByText'])) ? $event['hostedByText'] : 'Sponsored by';?></p>
        <?php if(isset($event['hostedByImage'])) :?>
            <img src="<?php echo $event['hostedByImage']; ?>" width="200" class="mt-3 event-logo">
        <?php endif;?>
    </div>
    <div class="container-fluid contact_us p-0">
        <div class="container-fluid p-md-0 bg_illustration mt-5">
            <div class="container text-center countdown-timer mt-3">
                <h1 id="headline" class="headline font-jose position-relative w-md-50 m-auto w-100">EVENT WILL START IN</h1>
                <div id="countdown">
                    <ul class="d-flex justify-content-center align-items-center pl-0">
                        <li class="time-entry days"><span id="days"></span>days</li>
                        <li class="time-entry hours"><span id="hours"></span>Hours</li>
                        <li class="time-entry minutes"><span id="minutes"></span>Minutes</li>
                        <li class="time-entry seconds"><span id="seconds"></span>Seconds</li>
                    </ul>
                </div>
                <div id="content" class="emoji">
                    <span>☹️</span>
                    <span>🥺</span>
                </div>
            </div>
            <script>
                (function () {
                    const second = 1000,
                        minute = second * 60,
                        hour = minute * 60,
                        day = hour * 24;

                    let birthday = "<?php echo date("M d, Y H:i:s", strtotime($event['eventDate']));?>"/* "May 26, 2021 00:00:00" */,
                        countDown = new Date(birthday).getTime(),
                        x = setInterval(function () {
                        let now = new Date().getTime(),
                            distance = countDown - now;

                        (document.getElementById("days").innerText = Math.floor(distance / day)),
                            (document.getElementById("hours").innerText = Math.floor(
                            (distance % day) / hour
                            )),
                            (document.getElementById("minutes").innerText = Math.floor(
                            (distance % hour) / minute
                            )),
                            (document.getElementById("seconds").innerText = Math.floor(
                            (distance % minute) / second
                            ));

                        //do something later when date is reached
                        if (distance < 0) {
                            let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("content");

                            headline.innerText = "Registrations are closed! We'll come soon with another event!";
                            countdown.style.display = "none";
                            content.style.display = "block";

                            clearInterval(x);
                        }
                        //seconds
                        }, 0);
                    })();

            </script>
            <section class="bg-light py-5">
                <div class="row contact_us_page_form w-50 m-auto">
                    <div class="w-100 m-auto text-center">
                        <?php echo (isset($event['description']) && !empty($event['description'])) ? $event['description'] : ''; ?>
                    </div>
                </div>
            </section>
            <section style="height: 450px;">
                <?php if(isset($event['map']) && !empty($event['map'])) :?>
                    <iframe src="<?php echo $event['map']?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <?php endif;?>
            </section>
            <section class="py-5 counter-section" style="background: #81b204;">
                <div class="row col-md-9 col-sm-12 m-auto py-4">
                    
                    <?php
                        if(!empty($event['eventPlace'])) :
                    ?>
                        <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                            <div class="counter text-white" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="icon"><i class="fa fa-map"></i></div>
                                <?php echo $event['eventPlace']?>
                                <?php
                                    /* foreach(explode(',', $event['eventPlace']) as $k=>$place){
                                        if($k==0){
                                            echo '<p>'.$place.'</p>';
                                        }else{
                                            echo '<span>'.$place.'</span>';
                                        }
                                    } */
                                ?>
                            </div>
                        </div>
                    <?php endif;?>

                    <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                        <div class="counter text-white" style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                            <div class="icon"><i class="fa fa-clock"></i></div>
                            <p><?php echo (isset($event['eventDate']) && !empty($event['eventDate'])) ? date("M d, Y", strtotime($event['eventDate'])) : ''; ?></p>
                            <span><?php echo (isset($event['eventTime']) && !empty($event['eventTime'])) ? $event['eventTime'] : ''; ?></span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center available-bags-div">
                        <div class="counter text-white" style="visibility: visible;-webkit-animation-delay: 0.9s; -moz-animation-delay: 0.9s; animation-delay: 0.9s;">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <p><?php echo (isset($event['availableSeats']) && !empty($event['availableSeats'])) ? $event['availableSeats'] : ''; ?> Available Bags</p>
                            <span>Only a few bags are left.</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                        <div class="counter text-white" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                            <div class="icon"><i class="fa fa-coffee"></i></div>
                            <?php echo (isset($event['remarks']) && !empty($event['remarks'])) ? $event['remarks'] : ''; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php if( isset($event['eventDate']) && (strtotime(date('now')) < strtotime($event['eventDate'])) && ($event['availableSeats'] > 0)) :?>
                <div class="container">
                    <div class="w-100 w-md-85 m-auto pt-5">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="section-title-header text-center">
                                    <h1 class="section-title font-jose" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">Register</h1>
                                    <p class="pt-2 mb-0" style="visibility: visible;-webkit-animation-delay: .6s;-moz-animation-delay: .6s;animation-delay: .6s;">All Care Event</p>
                                    <p class="pt-2 mb-0" style="visibility: visible;-webkit-animation-delay: .6s;-moz-animation-delay: .6s;animation-delay: .6s;"><?php echo $event['name']; ?></p>
                                    <h1 class="pt-2 mb-0" style="visibility: visible;-webkit-animation-delay: .4s; -moz-animation-delay: .4s; animation-delay: .4s;font-size: 1rem;"><?php echo (isset($event['eventSubTitle'])) ? $event['eventSubTitle'] : '';?></h1>
                                    <p class="pt-2 mb-0" style="visibility: visible;-webkit-animation-delay: .6s;-moz-animation-delay: .6s;animation-delay: .6s;"><?php echo (isset($event['hostedByText'])) ? $event['hostedByText'] : 'Sponsored by';?></p>
                                    <?php if(isset($event['hostedByImage'])) :?>
                                        <img src="<?php echo $event['hostedByImage']; ?>" width="100" class="mt-2 event-form-logo">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-xs-12 my-5">
                                <form id="form-event" class="w-100 text-center" onsubmit="return ac4u_event_form_submit()">
                                    <div class="text-left d-md-flex justify-content-center">
                                        <div class="form-row col-md-6 com-sm-12 mx-0 mt-0 mb-3 p-0">
                                            <div class="col m-0 px-0 pl-0 pr-md-4 mb-3 mb-md-0">
                                                <label for="exampleInputEmail1" class="f-w-00 f-w-500 text-black h6 ">Full Name  <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="validationDefault01" name="fname" placeholder="First Name" required="">
                                                <input type="hidden" class="form-control" id="validationDefault01" name="eventId" value="<?php echo $event['id'] ?>">
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
                                    </div>
                                    <div class="text-left">
                                        <div class="g-recaptcha" data-callback="ac4u_event_captcha_callback" data-expired-callback="ac4u_event_captcha_expired_callback" data-sitekey="<?=RECAPTCHA_SITE_KEY ?>"></div>
                                        <div class="form-row">
                                            <div class="form-check ml-2 mt-4">
                                                <small>
                                                <input class="form-check-input" type="checkbox" value="Agreed" name="consent" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1" style="color: #8e949a;margin-top: 2px;">You're email will be used for notifying you about future events!</label>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary f-w-00 f-w-500 text-white h6 py-3 px-5 mt-5 w-50" id="formBtn" type="submit" disabled="">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
<section class="px-4 py-5 position-fixed bg-white w-100 d-none align-items-center" id="show_signupmsg" style="top: 100px;z-index: 1;height: calc(100% - 100px);">
	<div class="container my-4 px-0">
        <div class="row align-items-center text-center">
            <div class="col-sm-12 justify-content-center m-auto">
                <i class="fa fa-check border rounded-circle mb-4" style="font-size: 5rem;border: 10px solid !important;padding: 1.2rem;border-color: #8cc73f !important;z-index: 11111111;color: #8cc73f !important;"></i>
                <h1 class="font-weight-bold font-jose my-3" style="color: #8cc73f; font-size: 4rem;">Thank you!</h1>
                <p class="w-75 m-auto m-p msg-already pt-4" style="font-size: 20px;line-height: 2.5rem;">You have already registered for AllCare <?php echo $event['name'] ?> Event and signed up for the future event updates.</p>
                <p class="w-75 m-auto m-p msg-new" style="font-size: 20px;line-height: 2.5rem;">You have successfully registered for AllCare <?php echo $event['name'] ?> Event and signed up for the future event updates.</p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
	$(".address_header h3[location]").click(function(){

		let location = $(this).attr('location');	
		$('.google-map-iframe').hide();
		$('.google-map-iframe[location="'+location+'"]').show();
	
	});
	
	function ac4u_event_captcha_callback(){
		console.log("Event: Captcha Passed.");
		$('#form-event [type="submit"]').attr("disabled",false);
	}
	function ac4u_event_captcha_expired_callback(){
		console.log("Event: Captcha Expired.");
		$('#form-event [type="submit"]').attr("disabled",true);
	}


	function ac4u_event_form_submit(){
		console.log("Event: Registation Completed.");
		let data = $('#form-event').serializeArray();
		$.ajax({
			url : "<?=BASE_URL.'api/event-form' ?>",
			type: "POST",
			data: data,
			beforeSend: function(){
				$('#form-event [type="submit"]').attr("disabled",true).html('Processing <i class="fa fa-spin fa-spinner"></i>');
			},
			success: function(response){
				let data = $.parseJSON(response);
				if(data.status){
                    if(data.status == 1){
                        $('.msg-new').removeClass('d-none');
                        $('.msg-already').addClass('d-none');
                    }else{
                        $('.msg-new').addClass('d-none');
                        $('.msg-already').removeClass('d-none');
                    }
                    $('#form-event')[0].reset();
                    // $('#form-event div[form-messages]').html(data.message);
                    // $('#contact-msg').css('display', 'block');
                    $('#show_signupmsg').addClass('d-flex');
                    $('#show_signupmsg').removeClass('d-none');
                    $('#show_signup').addClass('d-none');
                    setTimeout(function(){
                        $('#show_signupmsg').removeClass('d-flex');
                        $('#show_signupmsg').addClass('d-none');
                        $('#show_signup').removeClass('d-none');
                    },4000);
                }else{
                    let entries = Object.entries(data.errors);
                    for(const [name, value] of entries){
                        $('#form-event').find('[name="' + name + '"]').closest('.form-group').addClass('error').attr('error-text',value);
                    }
                } 
			},
			complete: function(){
				$('#form-event [type="submit"]').attr("disabled",false).html('Submit');
				setTimeout(function(){
                    $('#show_signupmsg').removeClass('d-flex');
                    $('#show_signupmsg').addClass('d-none');
                    $('#show_signup').removeClass('d-none');
					$('#form-event div[form-messages]').html("");
				},4000);
			},
			error: function(response){
				console.log(response);
				let data = $.parseJSON(response);
				$('#form-event div[form-messages]').html('<p class="text-danger">Unable to Process Request. Please Try Again.</p>');
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

        $('input[name=consent]').change(function(){
            if($(this).prop('checked')){
                $('#formBtn').prop('disabled', false);
            }else{
                $('#formBtn').prop('disabled', true);
            }
        });

	});
</script>

<?php include 'partial/footer.php';?>
