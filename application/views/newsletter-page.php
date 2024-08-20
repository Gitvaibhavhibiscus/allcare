
<?php include 'partial/header.php';?>
<style>
    .box {
        background-color: transparent;
        border-radius: 3px;
        color: #000;
        width: 500px;
        height: 300px;
        transform-style: PRESERVE-3D;
        transition: 0.4s;
        text-align: center;
    }
    .box:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top: 20px solid #80b402;
        border-left: 20px solid #80b402;
        box-sizing: border-box;
    }
    .box:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-bottom: 20px solid #80b402;
        border-right: 20px solid #80b402;
        box-sizing: border-box;
    }
    .box .fas {
        font-size: 25px;
        height: 50px;
        width: 50px;
        line-height: 50px !important;
        background-color: #81b204;
    }
    .box .fa2 {
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 1;
    }
    .box .text {
        position: absolute;
        top: 30px;
        left: -30px;
        width: calc(100% + 60px);
        height: calc(100% - 60px);
        background-color: #f3f9ec;
        border-radius: 3px;
        transition: 0.4s;
    }
    .box .text .fa1 {
        position: absolute;
        top: 0;
        left: 0;
    }
    .box .text div {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        text-align: left;
        width: 100%;
        padding: 30px 60px;
        line-height: 1.5;
        box-sizing: border-box;
    }
    .box .text div h3 {
        font-size: 30px;
        margin-bottom: 5px;
    }
    .box .text div p {
        font-size: 15px;
    }
    .box:hover {
        transform: rotateY(-20deg) skewY(3deg);
    }
    .box:hover .text {
        transform: rotateY(20deg) skewY(-3deg);
    }
</style>
<div class="container-fluid blog p-0 ">
	<div class="container-fluid p-0 bg_illustration">
		<div class="container mb-5 pb-4">
			<div class="row mt-3 mb-3">
                <div class="col-12 col-md-8 m-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-auto col-md post_back mt-0">
                            <span><a rel="nofollow" href="/newsletters" class="text-black">Back</a></span>
                        </div>

                        <div class="col col-md-8 post_title text-center">
                            <h2 class="mt-0 text-green"><?=$blog['title'] ?></h2>
                            <!-- <p><small><?=date('F d, Y',strtotime($blog['dated'])) ?></small></p> -->
                        </div>

                        <div class="col-auto col-md text-right post_share mt-0">
                            <!-- AddToAny BEGIN -->
                            <a class="a2a_dd" href="https://www.addtoany.com/share"><img src="<?=IMG_BASE_URL ?>/icons/share.svg" alt="Share" class="share_img"></a>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->
                        </div>
                    </div>
                </div>
			</div>

			<div class="thumbnail col-12 col-md-8 p-0 mb-5 m-auto">
				<img src="<?=$blog['img'] ?>" class="w-100">
			</div>

			<article class="row post-single-cnt my-5">
				

				<div class="col-12 col-md-8 m-auto">
					<?= $blog['blog'] ?>
				</div>
			</article>

		</div>
	</div>
</div>
<?php include 'partial/footer.php';?>