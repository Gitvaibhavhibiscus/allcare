
<?php include 'partial/header.php';?>
<style>
	.blog .thumbnail_1, .blog .thumbnail_2 {
		background-size: cover;
		background-position: top left;
		background-repeat: no-repeat;
	}
	.blog article .card:hover {
		background: #f3f9ec;
		color: #464646;
	}
	a:hover {
		text-decoration: none;
	}
	.blog article .card:hover .read_more {
		color: #1b1b1b;
		text-decoration: none !important;
	}
</style>
<div class="container-fluid blog p-0 ">

	<div class="banner_2 col-12 p-0" style="background-image: url('<?=IMG_BASE_URL ?>blog/banner.png');">
		<div class="bg_circle">
			<img src="<?=IMG_BASE_URL ?>illumination/banner_head.png" alt="allcare4u illustration"  class="w-100" />
			<h1 class="m-0 text-white font-primary">Newsletters</h1>
		</div>
	</div>

	<div class="container-fluid p-0 bg_illustration">
		<div class="container mt-5 mb-5 pt-4 pb-4">
				<?php
					if(!empty($blogs)){
						foreach($blogs as $k=>$blog){
				?>
							<h4 class="m-auto heading" style="border-left: 4px solid #99c04b;">
								<span class="py-2 px-3" style="color: #99c04b;"><?= $k?></span>
							</h4>
							<div class="row my-4 pb-5">
					<?php
								foreach($blog as $row){
									// if(isset($row['featuredBlogId']) && !empty($row['featuredBlogId'])){
						?>
										<a rel="nofollow" class="col-12 col-md-4 mb-4 mb-md-0" href="<?=BASE_URL ?>blog/<?=$row['slug'] ?>">
											<article>
												<div class="card" style="overflow:hidden">
													<div class="thumbnail_1" style="background-image: url('<?= str_replace('images/blogs/', 'images/blogs/thumbnails/', $row['img']) ?>');"></div>
													<div class="des_cont p-3">
														<span class="h5 d-block" style="min-height:2.5em;"><?=$row['title'] ?></span>
														<p>
															<?= substr(strip_tags($row['blog']), 0, 250).'..' ?>
														</p>
														<span class="read_more f-w-500">Read More</span>
													</div>
												</div>
											</article>
										</a>
						<?php
									// }
								}
						?>
							</div>
						<?php
						}
					}
				?>
		</div>
	</div>
</div>


<?php include 'partial/footer.php';?>
