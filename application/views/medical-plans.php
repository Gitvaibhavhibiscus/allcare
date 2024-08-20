
<?php include 'partial/header.php';?>
<style>
	.head_banner .banner_img {width: 100%; height: 539px; object-fit: cover; object-position: top;}
    .head_banner .bg_circle h1 {position: absolute;  top: 26%; left: 48%; font-size: 40px; font-weight: 400;}
    .medical_plan h2 {font-family: inherit; font-weight: 600;}
    .medical_plan li {font-weight: 600; font-size: 15px; line-height: 26px; color: #2870D1;}
    .medical_plan li i {font-size: 6px; position: relative; top: -2px;}
    .medical_plan {position: relative; overflow: hidden;}
    .medical_plan:before {content: ""; left: -190px; top: -100px; width: 800px; height: 1200px;
        background: url(/assets/images/illumination/blue_logo_icon.png); z-index: -1;
        position: absolute; background-repeat: no-repeat; background-size: contain !important;
        transform: matrix(0.91, -0.42, 0.42, 0.91, 0, 0);}
    .medical_plan:after {content: ""; right: -120px; top: 64%; width: 500px; height: 1200px;
        background: url(/assets/images/illumination/green_logo_icon.png); z-index: -1; position: absolute;
        background-repeat: no-repeat; background-size: contain !important;}
	
    @media (max-width: 767.98px) {
		.head_banner .banner_img {height: auto !important; object-fit: contain !important; object-position: center;}
		.head_banner .bottom_card {right: 2%; width: 40%;}
		.head_banner .bg_circle h1, .banner_2 .bg_circle h1{font-size: 18px;}
		.head_banner .bg_circle h1 {left: 45%;}
	}

    @media (min-width: 767.98px){
        .w-md-60 {width: 60% !important;}
    }
</style>
<div class="container-fluid p-0">
	<div class="head_banner col-12 p-0">
		<img src="<?=IMG_BASE_URL ?>banners/medical-plans.png" alt="Medicak Plan Banner" class="banner_img" />
		<div class="bottom_card">
			<div class="bg_circle">
				<img src="<?=IMG_BASE_URL ?>illumination/banner_head.png" alt="allcare4u illustration" class="w-100" />
				<h1 class="m-0 text-white font-primary">Medical<br/>Plans</h1>
			</div>
		</div>
	</div>
    <div class="row medical_plan">
		<div class="w-75 m-auto pb-5">
			<div class="row d-block mb-4">
                <h2 class="mt-5 mb-4 pb-2 font-weight-bold">Managed Care Plans</h2>
                <div class="d-md-flex justify-content-between align-items-between w-100 w-md-50">
                    <ul class="pl-0">
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>BCBS HMO</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Careplus</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Freedom</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Humana Gold</li>
                    </ul>
                    <ul class="pl-0">
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Optimum </li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Ultimate</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Wellcare</li>
                        
                    </ul>
                </div>
                <hr style="border: none;border-bottom: 0.5px solid #f5f5f5;margin: 0;">
                <h2 class="mt-5 mb-4 pb-2 font-weight-bold">Medicare & Medicare Advantage Plans</h2>
                <div class="d-md-flex justify-content-between align-items-between w-100 w-md-60">
                    <ul class="pl-0">
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Baycare Plus </li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>AARP Medicare Complete</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Aetna Medicare</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Allwell by Sunshine</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>BCBS Medicare PPO</li>
                    </ul>
                    <ul class="pl-0">
                        <li class="d-block"><i class="fa fa-circle mr-1"></i><b>Medicare</b></li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Multiplan FL Complete Care</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Railroad Medicare</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>United Healthcare Medicare</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i><b>Wellmed HMO & PPO</b></li>
                    </ul>
                </div>
                <hr style="border: none;border-bottom: 0.5px solid #f5f5f5;margin: 0;">
                <h2 class="mt-4 mb-2 py-2">Medicaid HMO Plans</h2>
                <p class="card-text h6 mb-1 w-100 pb-3" style="font-weight: 600; padding-left: 3px;">Any other Medicaid plans will only be accepted as secondary coverage</p>
                <div class="d-md-flex justify-content-between align-items-between w-100 w-md-50">
                    <ul class="pl-0" style="padding-left: 3px;">
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Humana (Healthy Horizons)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Sunshine (Children's Medical)</li>
                       
                    </ul>
                </div>
                <hr style="border: none;border-bottom: 0.5px solid #f5f5f5;margin: 0;">
                <h2 class="mt-4 mb-4 py-2">Commercial Plans & Networks</h2>
                <div class="d-md-flex justify-content-between align-items-between w-100 w-md-60">
                    <ul class="pl-0">
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Aetna (Aetna X)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Allegiance</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>All Savers</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Ambetter (Marketplace)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Assurant</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>AvMed</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>BCBS (No Blue Select or My Blue)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Beech Street </li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Cigna (No Local or Connect)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Emblem Health </li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>First Health</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>GEHA</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>GHI</li>

                    </ul>
                    <ul class="pl-0">
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Golden Rule (All Commercial)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>GPA</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Humana (All Commercial)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Meritain</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Medi-Share</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Multiplan</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Oscar Health (Marketplace)</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Oxford</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Tricare</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>UMR</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Unicare</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>United Healthcare</li>
                        <li class="d-block"><i class="fa fa-circle mr-1"></i>Web TPA</li>
                    </ul>
                    
                </div>
                <hr style="border: 1px solid #ccc; border-bottom: 0.5px solid #f5f5f5;margin: 0; margin-top:20px; margin-bottom:40px;">
                
                <div class="col-12 f-w-700 pl-0">
                    <p>We do not accept Workman’s Comp. Cases under any circumstance. </p>
                    <p>We will only file Personal Injury Claims on behalf of Managed Care Patients.</p>
                    <p>We will accept any out of state BCBS plan that can be filed to our Local BCBS.</p>
                </div>
			</div>
        </div>
    </div>
</div>
<?php include 'partial/footer.php';?>


