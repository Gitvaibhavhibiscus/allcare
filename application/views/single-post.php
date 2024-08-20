<?php include 'partial/header.php';?>
<div class="container-fluid blog p-0 ">
   <?php /*include 'partial/blog_banner.php';*/?>
   <div class="container-fluid p-0 bg_illustration-ptrn10">
      <div class="container mt-0 mt-md-5 mb-5 pt-4 pb-4">
         <?php include 'partial/blog_filter.php';?>
         <div class="row mb-3">
            <div class="col-auto col-md post_back">
               <span><a href="/blogs" class="text-black">Back</a></span>
            </div>
         </div>
         <div class="row mb-3">
            <div class="col col-md-8 post_title">
               <h2 class="mt-0 text-black"><?=$blog['title'] ?></h2>
               <p><small><?=date('F d, Y',strtotime($blog['dated'])) ?></small></p>
            </div>
            <div class="col-auto col-md text-right post_share">
               <!-- AddToAny BEGIN -->
               <a class="a2a_dd" href="https://www.addtoany.com/share"><img src="<?=IMG_BASE_URL ?>/icons/share2.svg" class="share_img" alt="Social Share Icon"></a>
               <script async src="https://static.addtoany.com/menu/page.js"></script>
               <!-- AddToAny END -->
            </div>
         </div>
         <div class="thumbnail col-12 p-0 mb-5">
            <img src="<?=$blog['img'] ?>" class="w-100">
         </div>
         <article class="row post-single-cnt">
            <div class="col-12 col-md-8">
               <?= $blog['blog'] ?>
            </div>
            <div class="col-12 col-md-4">
               <h3 class="text-start text-black mb-3">Related</h3>
               <?php foreach ($related as $key => $row) { ?>

               <article class="col-12 col-md-12 mb-4 mb-md-4 p-0">
    <div class="card">
        <div class="row m-0">
           
               <span class="col-12 col-md-4 thumbnail_2" style="background-image: url('<?=$row['img'] ?>');"></span>
            
            <div class="col-12 col-md-8 des_cont p-3 align-self-center">
                <a href="/blog/<?=$row['slug'] ?>" class="h5"><?=character_limiter(strip_tags($row['title']), 20) ?></a>
              <p><?= character_limiter(strip_tags($row['blog']), 40) ?></p>
                <!--<a href="/blog/<?=$row['slug'] ?>" class="read_more text-silver f-w-500">Read More</a>-->
            </div>
        </div>
    </div>
</article>


            <!-- <article class="col-12 col-md-12 mb-4 mb-md-0">
								<div class="card">
									<div class="row m-0">
                           <div>
										<a href="/blog/<?=$row['slug'] ?>" class="col-12 col-md-4 thumbnail_2" style="background-image: url('<?=$row['img'] ?>');"></a></div>
										 <div class="des_cont p-0">
										<div class="col-12 col-md-8 des_cont p-3 align-self-center">
											<a href="/blog/<?=$row['slug'] ?>" class="h5"><?=$row['title'] ?></a>
											<?= character_limiter(strip_tags($row['blog']),40) ?>
											<a href="/blog/<?=$row['slug'] ?>" class="read_more text-silver f-w-500">Read More</a>
										</div>
										</div>
									</div>
								</div>
							</article> -->
               <?php } ?>
            </div>
            <!-- <div class="col-12 col-md-4 mt-5 mt-md-0">
               <div id="fb-root"></div>
               <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=118577664988341&autoLogAppEvents=1" nonce="ChjICRTx"></script>
               
               <h5>Comments</h5>
               <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width=""></div>
               </div> -->
         </article>
      </div>
   </div>
</div>
<?php include 'partial/footer.php';?>