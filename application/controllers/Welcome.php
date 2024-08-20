<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index(){
		$this->load->helper('text');
		$testimonials = $this->welcome->get_testimonials();
		$news = $this->welcome->get_blogs(" AND category != 'newsletter' ORDER BY id DESC LIMIT 2");
		$data['meta_title_text'] = 'Primary Care for all | All Care | Palm Harbor, Seminole & Clearwater';
		$data['meta_keywords'] = 'Medical Care, Wellness Care, Primary Care, Healthcare Professionals';
		$data['meta_description'] = 'Trust All Care for quality primary care in Palm Harbor, Seminole & Clearwater. Schedule an appointment with our experienced team for all your healthcare needs.';
		$this->load->view('home',[
			"testimonials" => $testimonials,
			"news"	=> $news,
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function providers(){

		$physicians = $this->welcome->get_providers(" AND type LIKE '%physicians%'");
		$wellness = $this->welcome->get_providers(" AND type LIKE '%wellness%'");
		$staff = $this->welcome->get_providers(" AND type LIKE '%staff%'");
		$data['meta_title_text'] = 'Meet our experienced physicians providing personalized care | All Care';
		$data['meta_keywords'] = 'Physicians, Wellness Team, Administrative Team, Medical Consultants, Health and Wellness Providers';
		$data['meta_description'] = 'With diverse backgrounds and years of experience, All Care physicians are leaders in providing personalized care plans and innovative health solutions.';

		$this->load->view('providers',[
			"physicians" => $physicians,
			"wellness" => $wellness,
			"staff" => $staff,
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	/* public function enquiry(){
		$this->load->view('enquiry', ['slug' => 'enquiry']);
	} */

	// public function event(){
	// 	$event = $this->welcome->get_event(" ORDER BY id DESC LIMIT 1");
	// 	if(isset($event[0]) && !empty($event)){
	// 		$this->load->view('event-form', ['slug' => 'event', 'event' => $event[0], 'title' => $event[0]['name']]);
	// 	}else{
	// 		$this->load->view('event-form', ['slug' => 'event', 'event' => array(), 'title' => 'Upcoming Event']);
	// 	}
	// }

	// public function event_2(){
	// 	$event = $this->welcome->get_event_2(" ORDER BY id DESC LIMIT 1");
	// 	if(isset($event[0]) && !empty($event)){
	// 		$this->load->view('event-form', ['slug' => 'event', 'event' => $event[0], 'title' => $event[0]['name']]);
	// 	}else{
	// 		$this->load->view('event-form', ['slug' => 'event', 'event' => array(), 'title' => 'Upcoming Event']);
	// 	}
	// }

	// public function newsletters(){
	// 	$months = $this->welcome->get_blogs_monthwise(" AND category='newsletter' GROUP BY MONTH(dated), Year(dated) ORDER BY id DESC");
	// 	if(!empty($months)){
	// 		foreach($months as $month){
	// 			$date = $month['date'];
	// 			$blogs[$month['date']] = $this->welcome->get_blogs(" AND category='newsletter' AND CONCAT(MONTHNAME(dated), ' ', YEAR(dated)) = '$date' ORDER BY id DESC");
	// 		}
	// 	}
	// 	$this->load->view('newsletter', ['slug' => 'event', "blogs"=>$blogs]);
	// }

	public function medical_care(){
		$data['meta_title_text'] = 'Holistic medical care for your complete well-being | All Care';
		$data['meta_keywords'] = 'Expert doctors, Medical professionals, Medical care, Medical treatment, Patients';
		$data['meta_description'] = 'Explore individualized medical care at All Care: holistic approaches, custom plans, wellness exercises, and compassionate support for your overall well-being.';

		$this->load->view('medical-care',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	// public function Resourses(){
	// 	$data['meta_title_text'] = 'Resourses | All Care';
	// 	$data['meta_keywords'] = 'Expert doctors, Medical professionals, Medical care, Medical treatment, Patients';
	// 	$data['meta_description'] = '';

	// 	$this->load->view('resourses',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }

   public function Media_kit(){
		$data['meta_title_text'] = "Explore All Care's Media Kit | Logos, Resources, and More";
		$data['meta_keywords'] = '';
		$data['meta_description'] = 'Explore valuable resources in our Media Kit, including logos for partnerships and promotions. Copyright © 2023 All Care Medical Consultants';

		$this->load->view('media-kit',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}


	public function medical_plans(){
		$data['meta_title_text'] = "All Care's accepted Medical Plans | Tailored healthcare solutions";
		$data['meta_keywords'] = 'All Care medical plans';
		$data['meta_description'] = "Explore All Care's accepted medical plans. Tailored healthcare solutions to match your needs. Empowering your choices, ensuring your health.";

		$this->load->view('medical-plans',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function clinical_wellness(){
		$data['meta_title_text'] = 'Patient-centric health journeys in Clinical Wellness | All Care';
		$data['meta_keywords'] = 'Personalized programs, Wellness communities, Nutrition and Weight Management, Stress Management, Lifestyle Medicine';
		$data['meta_description'] = 'Start a journey to a healthier life with Clinical Wellness at All Care. Our tailored program, guidance & supportive community will lead you on a holistic path.';

		$this->load->view('clinical-wellness',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function blogs($year="",$month="") {
		$this->load->helper('text');
		$category = $this->input->get('category');
		$condition = "";

		if($category != ""){
			$category = $this->db->escape_str($category);
			if($category == "uncategorized"){
				$condition = " AND category IS NULL";
			}else{
				$condition = " AND category LIKE '%$category%'";
			}
		}

		if($year != "" && $month != "" && is_numeric($year) && is_numeric($month)){
			$month = str_pad($month,2,0);
			$condition = " AND dated LIKE '$year-$month%'";
		}

		$blogs = $this->welcome->get_blogs($condition." AND category != 'newsletter' ORDER BY id DESC LIMIT 5");

		$data['meta_title_text'] = 'Expert Medical Tips & Insights | Health and Wellness Blog | All Care';
		$data['meta_keywords'] = 'All Care medical plans';
		$data['meta_description'] = "Begin your journey to well-being with All Care's Health & Wellness blog. Find expert insights on medical care and practical tips you can easily apply.";

		$this->load->view('blog',[
			"year"=>$year,
			"month"=> $month, 
			"blogs"=>$blogs, 
			"categories" => $this->welcome->get_blog_catgories(), 
			"months" => $this->welcome->get_blog_months(),
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function patient_resources() {
		$data['meta_title_text'] = 'Patient Resources - Online forms for your All Care visit';
		$data['meta_keywords'] = 'Patient resources';
		$data['meta_description'] = 'Explore patient resources at All Care! Get ready for your visit with our convenient access to online forms. Review, print, and fill them out at your own pace.';

		$this->load->view('patient-resources',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function contact_us() {
		$data['meta_title_text'] = 'Contact All Care | Expert health guidance & wellness support';
		$data['meta_keywords'] = 'Contact us';
		$data['meta_description'] = 'Contact All Care for personalized health solutions. Expert guidance and overall wellness support await. Reach out today and take a step toward your well-being.';

		$this->load->view('contact-us',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	// public function contact_us_v1() {
	// 	$data['meta_title_text'] = 'Contact us v1 | All Care';
	// 	$data['meta_keywords'] = 'Contact us v1';
	// 	$data['meta_description'] = '';

	// 	$this->load->view('contact-us-v1',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }

	public function high_blood_pressure() {
		$data['meta_title_text'] = 'Hypertension treatment guide - Effective management methods | All Care';
		$data['meta_keywords'] = 'High blood pressure';
		$data['meta_description'] = 'All Care Hypertension Treatment Guide: Know the types of hypertension. Get practical insights for managing hypertension and promoting heart health naturally.'; 

		$this->load->view('high-blood-pressure',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	// public function silver_sneakers_classic() {
	// 	$data['meta_title_text'] = 'Silver Sneakers Classic | All Care';
	// 	$data['meta_keywords'] = 'Silver sneaker';
	// 	$data['meta_description'] = ''; 

	// 	$this->load->view('silver-sneakers-classic',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }

	public function exercise_and_physical_activity() {
		$data['meta_title_text'] = 'Exercise and Physical Activity | All Care';
		$data['meta_keywords'] = 'Exercise and Physical Activity';
		$data['meta_description'] = ''; 

		$this->load->view('exercise-physical-activity',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}


	// public function exercise_physical_activity() {
	// 	$data['meta_title_text'] = 'Exercise Physical Activity | All Care';
	// 	$data['meta_keywords'] = 'Exercise Physical Activity';
	// 	$data['meta_description'] = ''; 

	// 	$this->load->view('exercise-physical-activity',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }

	//  public function weight_loss_programs() {
	// 	$data['meta_title_text'] = 'Weight Loss Programs | All Care';
	// 	$data['meta_keywords'] = '';
	// 	$data['meta_description'] = ''; 

	// 	$this->load->view('weight-loss-programs',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
		
	// } 

	public function detoxification_programs() {
		$data['meta_title_text'] = 'Detoxification Programs | All Care';
		$data['meta_keywords'] = 'Detoxification Programs, Detox Diet Plan, Detox Fitness';
		$data['meta_description'] = ''; 

		$this->load->view('detoxification-programs',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function nutrition_plans() {
		$data['meta_title_text'] = 'Nutrition tailored to your needs | All Care Nutrition Plans';
		$data['meta_keywords'] = 'Best nutrition plan, nutrition speacialists';
		$data['meta_description'] = 'At All Care, we go beyond generic diet plans. Explore our range of Nutrition Plans curated by our specialists, tailored to your body.'; 

		$this->load->view('nutrition-plans',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	//public function hormone_replacement_therapy() {
		//$data['meta_title_text'] = 'Hormone Replacement Therapy | All Care';
		//$data['meta_keywords'] = 'Replacement therapy';
		//$data['meta_description'] = ''; 
		
		//$this->load->view('hormone-replacement-therapy',[
		//	"meta_title" => $data['meta_title_text'],
		//	"meta_data" => $data['meta_keywords'],
		//	"meta_desc" => $data['meta_description']
		//]);
	//}

	/* public function functional_medicine() {
		$this->load->library('user_agent');

		if (in_array($this->agent->platform(), array('iOS', 'Android')))
		{
				$is_mobile = true;
		}
		else
		{
				$is_mobile = false;
		}
		$this->load->view('functional-medicine', ['slug' => 'functional-medicine', 'is_mobile' => $is_mobile]);
	} */

	public function fitness_programs() {
		$data['meta_title_text'] = 'Fitness Programs | All Care';
		$data['meta_keywords'] = 'Fitness Programs';
		$data['meta_description'] = ''; 

		$this->load->view('fitness-programs',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function iv_therapy() {
		$data['meta_title_text'] = 'IV Therapy | All Care';
		$data['meta_keywords'] = 'IV Therapy';
		$data['meta_description'] = ''; 

		$this->load->view('iv-therapy',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	/* public function direct_primary_care() {
		$this->load->view('direct-primary-care');
	} */
	/* public function fitness_schedule() {
		$this->load->view('fitness-schedule');
	} */
	public function about_us() {
		
		$seminole = $this->welcome->get_providers(" AND location LIKE '%semipole%'");
		$palmharbor = $this->welcome->get_providers(" AND location LIKE '%palm-harbor%'");
		$clearwater = $this->welcome->get_providers(" AND location LIKE '%clearwater%'");

		$data['meta_title_text'] = 'About All Care: Tailored wellness & guidance for your health';
		$data['meta_keywords'] = 'About us';
		$data['meta_description'] = 'About All Care: Where Your Health Matters The Most. Experience tailored wellness, expert guidance, and personalized support. Your well-being is our priority.'; 

		$this->load->view('about-us',[
			"seminole" => $seminole,
			"palmharbor" => $palmharbor,
			"clearwater" => $clearwater,
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function privacy_policy() {
		$data['meta_title_text'] = 'All Care Privacy Policy & Terms: Your security, our commitment';
		$data['meta_keywords'] = 'Privacy policyies';
		$data['meta_description'] = 'Read All Care Privacy Policy, Terms and Conditions. We ensure your information is safe with us. Learn about our commitment to your privacy and security.'; 

		$this->load->view('privacy-policy',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function ornish_program() {
		$data['meta_title_text'] = "All Care's Ornish & Cardiac Rehabilitation | Heart health Program";
		$data['meta_keywords'] = 'Ornish program';
		$data['meta_description'] = "Discover a healthier heart with All Care's Ornish Program. It's not just a program. It's a life-changer and scientifically proven to reverse heart disease."; 

		$this->load->view('ornish-program',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function satisfaction_survey() {
		$data['meta_title_text'] = 'Share your experience | All Care Patient Satisfaction Survey';
		$data['meta_keywords'] = 'All Care satisfaction survey';
		$data['meta_description'] = "Visited All Care? Take our Patient Satisfaction Survey and share your experience. Your feedback guides us to ensure the best care tailored to your needs."; 

		$this->load->view('satisfaction-survey',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function congestive_heart_failure() {
		$data['meta_title_text'] = 'Congestive Heart Failure symptoms, causes, treatments | All Care';
		$data['meta_keywords'] = 'Congestive heart failure';
		$data['meta_description'] = 'Get information on congestive heart failure from the experts at All Care. Learn about symptoms, causes, treatments and more to improve your heart health.'; 

		$this->load->view('congestive-heart-failure',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function copd_emphysema() {
		$data['meta_title_text'] = 'COPD & Emphysema Care - Causes, risks & prevention | All Care';
		$data['meta_keywords'] = 'Copd-emphysema';
		$data['meta_description'] = 'COPD and Emphysema Care at All Care: Understand causes, risks, and prevention. Get expert guidance for management and preventive measures.'; 

		$this->load->view('copd-emphysema',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function diabetes_treatment() {
		$data['meta_title_text'] = 'Diabetes Treatment Guide - Manage diabetes & live healthier | All Care';
		$data['meta_keywords'] = 'Diabetes treatment';
		$data['meta_description'] = 'Type 1 Diabetes Treatment Guide: Learn about risks, treatments, and testing. Expert insights from All Care for managing diabetes and leading a healthier life.'; 

		$this->load->view('diabetes-treatment',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function acute_pain() {
		$data['meta_title_text'] = 'Understand & treat Acute Pain Management | All Care ';
		$data['meta_keywords'] = 'Acute pain';
		$data['meta_description'] = 'All Care Acute Pain Management: Understand, treat, and differentiate from chronic pain. Expert guidance for effective relief and a pain-free lifestyle.'; 

		$this->load->view('acute-pain',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function womens_health() {
		$data['meta_title_text'] = "Expert insights on women's health conditions & treatments | All Care";
		$data['meta_keywords'] = "Women's health";
		$data['meta_description'] = "Get All Care's expert insights on various women's health conditions, diagnoses, and treatments. Find information and support specific to women's health."; 

		$this->load->view('womens-health',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function depression() {
		$data['meta_title_text'] = 'Depression treatment guide - Types, diagnosis & management | All Care';
		$data['meta_keywords'] = 'Depression';
		$data['meta_description'] = "Explore All Care's guide to depression treatment. Understand types, diagnoses, treatments and effective strategies for managing this challenging condition."; 

		$this->load->view('depression',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function asthma() {
		$data['meta_title_text'] = 'Effective Asthma Treatment for better breathing | All Care';
		$data['meta_keywords'] = 'Asthma';
		$data['meta_description'] = "All Care's Asthma Treatment Guide: Insights on asthma, causes, and expert-recommended strategies for effective asthma management for better breathing."; 

		$this->load->view('asthma',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function high_cholesterol() {
		$data['meta_title_text'] = 'Managing high cholesterol | Causes & control methods | All Care';
		$data['meta_keywords'] = 'High cholestrol';
		$data['meta_description'] = "Here's your guide to managing high cholesterol. Gain insights on the causes and practical control methods with All Care's High Cholesterol Treatment."; 

		$this->load->view('high-cholesterol',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function obesity_treatment() {
		$data['meta_title_text'] = 'Obesity treatment for lasting wellness | All Care';
		$data['meta_keywords'] = 'Obesity treatment';
		$data['meta_description'] = "All Care's Obesity Treatment: Discover causes, measures, and effective strategies for lasting wellness. Take a step towards a journey to better health."; 

		$this->load->view('obesity-treatment',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	//public function lifestyle_fitness() {
	//	$data['meta_title_text'] = 'Lifestyle Fitness | All Care';
	//	$data['meta_keywords'] = 'Lifestyle fitness';
	//	$data['meta_description'] = ''; 
	//
	//	$this->load->view('lifestyle-fitness',[
	//		"meta_title" => $data['meta_title_text'],
	//		"meta_data" => $data['meta_keywords'],
	//		"meta_desc" => $data['meta_description']
	//	]);
	//}


	public function lifestyle_medicine() {
		$data['meta_title_text'] = "Holistic health journey | All Care's lifestyle medicine";
		$data['meta_keywords'] = 'Lifestyle Medicine';
		$data['meta_description'] = "Choose a holistic health journey with All Care. We treat chronic diseases with lifestyle medicine approaches: nutrition, exercise, sleep and stress management."; 

		$this->load->view('lifestyle-medicine',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	// public function corrective_exercise_and_personal_training() {
	// 	$data['meta_title_text'] = 'Corrective Exercise and Personal Training | All Care';
	// 	$data['meta_keywords'] = 'Corrective Exercise and Personal Training';
	// 	$data['meta_description'] = ''; 

	// 	$this->load->view('corrective-exercise-and-personal-training',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }

	// public function cardiac_rehabilitation() {
	// 	$data['meta_title_text'] = 'Cardiac Rehabilitation Program | All Care';
	// 	$data['meta_keywords'] = 'Cardiac Rehabilitation Program';
	// 	$data['meta_description'] = ''; 

	// 	$this->load->view('cardiac-rehabilitation',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }

	// public function pulmonary_rehabilitation() {
	// 	$data['meta_title_text'] = 'Pulmonary Rehabilitation Program | All Care';
	// 	$data['meta_keywords'] = 'Pulmonary Rehabilitation Program';
	// 	$data['meta_description'] = ''; 

	// 	$this->load->view('pulmonary-rehabilitation',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }


	public function nutrition_and_weight_management() {
		$data['meta_title_text'] = ' Weight Loss Program from nutrition & experts | All Care';
		$data['meta_keywords'] = 'Nutrition and Weight Management';
		$data['meta_description'] = "Ready for healthier weight & wellness? All Care's weight loss program offers personalized nutrition, supplements & expert guidance for your journey."; 

		$this->load->view('nutrition-and-weight-management',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	/* public function fitness() {
		$this->load->view('fitness');
	} */

	public function stress_management() {
		$data['meta_title_text'] = "All Care's stress management programs |Finding balance together";
		$data['meta_keywords'] = 'Stress management';
		$data['meta_description'] = "All Care's Stress Management Programs: From counseling to calming sessions and group exercises, find balance with expert guidance and support."; 

		$this->load->view('stress-management',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function fitness_center() {
		$data['meta_title_text'] = "Wellness redefined at All Care's Fitness center";
		$data['meta_keywords'] = 'Fitness center';
		$data['meta_description'] = "Explore All Care's Fitness Center. Modern equipment, expert-designed classes, and flexible options enhance your wellness journey. Join us for a healthier you!"; 

		$this->load->view('fitness-center',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function blog($slug="") {
		$this->load->helper('url');
		$this->load->helper('text');
		$slug = $this->db->escape_str($slug);
		$condition = " AND slug = '$slug'";
		$blogs = $this->welcome->get_blogs($condition);
		

		if(!isset($blogs[0])){	
			//redirect("/blogs");
			return redirect()->to(base_url('/blogs'));


		}

		if(isset($blogs[0]['category']) && $blogs[0]['category'] == 'newsletter'){
			$this->load->view('newsletter-page',[
				"blog" => $blogs[0]
			]);
		}else{
			$related = $this->welcome->get_blogs(" AND category != 'newsletter' AND id NOT IN (".$blogs[0]['id'].") LIMIT 3");

			$this->load->view('single-post',[
				"blog" => $blogs[0],
				"related" => $related,
				"year"	=> "",
				"month"	=> ""

			]);
		}
	}

	public function search() {
		$this->load->view('search');
	}

	// public function schedule_your_appointment() {
	// 	$data['meta_title_text'] = 'Schedule An Appointment | Your Wellness journey begins here | All Care';
	// 	$data['meta_keywords'] = 'Schedule appointment';
	// 	$data['meta_description'] = "Take the first step towards your well-being. Schedule an Appointment with All Care now. Easy, efficient, and expert care awaits you. Reach out to us today!"; 

	// 	$this->load->view('schedule-your-appointment',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }

	public function error_page() {
		$this->output->set_status_header('404');
		$data['meta_title_text'] = '404 Error | All Care';
		$data['meta_keywords'] = '404 Error';
		$data['meta_description'] = ''; 

		$this->load->view('404',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function osteopathic_manipulative_treatment() {
		$data['meta_title_text'] = 'Osteopathic Manipulative Treatment | All Care';
		$data['meta_keywords'] = 'Osteopathic manipulative treatment';
		$data['meta_description'] = ''; 

		$this->load->view('manipulation-therapy',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function skin_procedure() {
		$data['meta_title_text'] = 'Cryo Therapy for natural healing & wellness | All Care';
		$data['meta_keywords'] = 'Skin procedure';
		$data['meta_description'] = "Cryo therapy at All Care for natural recovery and wellness. Our expert sessions offer a refreshing approach to bringing the cold's healing benefits."; 

		$this->load->view('skin-procedure',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
/* our team */
	public function dr_mi_yamani() {
		$data['meta_title_text'] = 'Dr. M.I. Yamani | Medical Director | All Care';
		$data['meta_keywords'] = 'Dr MI Yamani';
		$data['meta_description'] = "Meet Dr. M.I. Yamani, Medical Director at All Care. Certified in Internal Medicine by the American Board. Bringing years of expertise to your healthcare needs"; 

		$this->load->view('dr-mi-yamani',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function Dr_N_Nicholas_Engelman() {
		$data['meta_title_text'] = 'Dr. N. Nicholas Engelman | Family Practitioner at All Care';
		$data['meta_keywords'] = 'Dr N Nicholas Engelman';
		$data['meta_description'] = "Dr. N. Nicholas Engelman is a board-certified family practitioner who blends surgical expertise with a love of primary care in his practice of medicine."; 

		$this->load->view('dr-n-nicholas-engelman',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}

	public function dr_kenneth_neifeld() {
		$data['meta_title_text'] = 'Dr. Kenneth Neifeld - Family Practitioner at All Care';
		$data['meta_keywords'] = 'Dr_Kenneth Neifeld';
		$data['meta_description'] = "Dr. Kenneth Neifeld, M.D., is a family practitioner who combines decades of expertise with genuine compassion to give you personalized medical care."; 

		$this->load->view('dr-kenneth-neifeld',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function erin_butler() {
		$data['meta_title_text'] = 'Erin Butler APRN | Wellness Provider at All Care | Nutrition & Health';
		$data['meta_keywords'] = 'Erin Butler';
		$data['meta_description'] = "Erin Butler, APRN:  Wellness Provider at All Care. Expert in Nutrition & Healthy Living. Dedicated to preventive care & empowering patients for better health."; 

		$this->load->view('erin-butler',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function mustapha_benjouali() {
		$data['meta_title_text'] = 'Mustapha Benjouali, APRN - Nurse Practitioner | All Care';
		$data['meta_keywords'] = 'Mustapha Benjouali';
		$data['meta_description'] = "Mustapha Benjouali, with experience in family practice, internal medicine, acute care, and orthopaedics, provides primary care as an All Care provider."; 

		$this->load->view('mustapha-benjouali',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	// public function Erin_Cook() {
	// 	$data['meta_title_text'] = 'erin cook | All Care';
	// 	$data['meta_keywords'] = 'erin cook';
	// 	$data['meta_description'] = ''; 

	// 	$this->load->view('erin-cook',[
	// 		"meta_title" => $data['meta_title_text'],
	// 		"meta_data" => $data['meta_keywords'],
	// 		"meta_desc" => $data['meta_description']
	// 	]);
	// }
	public function melissa_georgopolis() {
		$data['meta_title_text'] = 'Melissa |  Mental Health Therapist All Care | Feel Safe and Supported';
		$data['meta_keywords'] = 'Melissa';
		$data['meta_description'] = "Melissa, Mental Health Therapist at All Care. She brings her expertise to help you feel safe and supported as you navigate your health journey."; 

		$this->load->view('melissa-georgopolis',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function Taylor_Temnick() {
		$data['meta_title_text'] = 'Taylor Temnick EdD, LAT, ATC, CES, RYT | Director of Wellness All Care';
		$data['meta_keywords'] = 'Taylor Temnick';
		$data['meta_description'] = "Taylor Temnick, Director of Wellness at All Care, is a NASM Corrective Exercise Specialist who provides emergent,  injury preventative & rehab care."; 

		$this->load->view('taylor-temnick',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function Mussarat_Jehan() {
		$data['meta_title_text'] = 'Mussarat Jehan | Chief Financial Operator at All Care';
		$data['meta_keywords'] = 'Mussarat Jehan';
		$data['meta_description'] = "Mussarat Jehan, Chief Financial Operator at All Care, draws her expertise to lead All Care's financial operations and inform strategic decisions."; 

		$this->load->view('mussarat-jehan',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function Todd_Phillips() {
		$data['meta_title_text'] = 'Todd Phillips | COO at All Care';
		$data['meta_keywords'] = 'Todd Phillips';
		$data['meta_description'] = "Todd Phillips leverages 30+ years of operational expertise to lead as COO at All Care. He oversees strategic planning, resource allocation, and team development."; 

		$this->load->view('todd-phillips',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function caroline_mclaughlin() {
		$data['meta_title_text'] = 'Caroline McLaughlin | Managed Care Director at All Care';
		$data['meta_keywords'] = 'Caroline McLaughlin';
		$data['meta_description'] = "Caroline McLaughlin utilizes her years of experience in the managed care industry to support All Care's providers, facilities, and strategic business goals."; 

		$this->load->view('caroline-mclaughlin',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function Moneak_Reid() {
		$data['meta_title_text'] = 'Moneak Reid | Referrals Supervisor at All Care,';
		$data['meta_keywords'] = 'Moneak Reid';
		$data['meta_description'] = "Moneak Reid, Referrals Supervisor at All Care, brings her expertise to ensure smooth care transitions between All Care's facilities and providers."; 

		$this->load->view('moneak-reid',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function cassandra_cruz() {
		$data['meta_title_text'] = 'Cassandra Cruz | Lead Certified Medical Assistant at All Care';
		$data['meta_keywords'] = 'Cassandra Cruz';
		$data['meta_description'] = "Cassandra Cruz ensures seamless clinic operations at All Care's Palm Harbor office. She leverages her experience to support providers and enhance patient care."; 

		$this->load->view('cassandra-cruz',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function stephanie_taramona() {
		$data['meta_title_text'] = 'Stephanie Taramona | Administrative Supervisor at All Care';
		$data['meta_keywords'] = 'stephanie Taramona';
		$data['meta_description'] = "Stephanie Taramona draws on her organizational and leadership abilities to oversee essential administrative operations and workflow at All Care."; 

		$this->load->view('stephanie-taramona',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function charlie_mack() {
		$data['meta_title_text'] = 'Charlie Mack | Exercise Physiologist at All Care';
		$data['meta_keywords'] = 'Charlie Mack';
		$data['meta_description'] = ""; 

		$this->load->view('charlie-mack',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function clearwater() {
		$data['meta_title_text'] = 'Schedule An Appointment | All Care Clearwater';
		$data['meta_keywords'] = 'clearwater-location';
		$data['meta_description'] = "Schedule an appointment online at All Care's Clearwater location. Our healthcare providers look forward to providing exceptional care at your appointment."; 

		$this->load->view('clearwater',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function palm_harbor() {
		$data['meta_title_text'] = 'Schedule An Appointment | All Care Palm Harbor';
		$data['meta_keywords'] = 'palm harbor';
		$data['meta_description'] = "Schedule an appointment online at All Care's Palm Harbor location. Our healthcare providers look forward to providing exceptional care at your appointment."; 

		$this->load->view('palm-harbor',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function seminole() {
		$data['meta_title_text'] = 'Schedule An Appointment | All Care Seminole';
		$data['meta_keywords'] = 'seminole';
		$data['meta_description'] = "Schedule an appointment online at All Care's Seminole location. Our healthcare providers look forward to providing exceptional care at your appointment."; 

		$this->load->view('seminole',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function aep_appointment() {
		$data['meta_title_text'] = 'AEP Demo | All Care';
		$data['meta_keywords'] = 'AEP Demo';
		$data['meta_description'] = ''; 

		$this->load->view('aep-appointment',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function annual_enrollment_period_aep() {
		$data['meta_title_text'] = 'Your Annual Enrollment Period Guide| Medicare Plans| All Care';
		$data['meta_keywords'] = 'Annual enrollment period';
		$data['meta_description'] = 'Explore our detailed guide on the Annual Enrollment Period. Choose All Care for your healthcare needs, with personalized plans suited to your medical needs.'; 

		$this->load->view('annual-enrollment-period-aep',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
	public function allison_portillo() {
		$data['meta_title_text'] = '';
		$data['meta_keywords'] = 'allison-portillo';
		$data['meta_description'] = ""; 

		$this->load->view('allison-portillo',[
			"meta_title" => $data['meta_title_text'],
			"meta_data" => $data['meta_keywords'],
			"meta_desc" => $data['meta_description']
		]);
	}
}