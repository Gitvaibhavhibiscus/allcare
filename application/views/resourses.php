<?php include 'partial/header.php';?>

<script src="/assets/owl/jquery.min.js"></script>
<div class="container-fluid blog p-0 ">

	<?php include 'partial/blog_banner.php';?>

	<div class="container-fluid p-0 bg_illustration">
		<div class="container mt-5 mb-5 pt-4 pb-4 pl-md-0 pr-md-0">
			<?php include 'partial/blog_filter.php';?>

			<div class="blog-list-container">
			</div>
			
			<div class="col-12 text-center pt-5 blog-list-btn">
				<input type="hidden" name="page_num" id="page_num" value="0">
				<a id="more_blog">View more <i class="fas fa-chevron-right pl-1"></i></a>
			</div>
		</div>
	</div>
</div>
<script>
	moreBlogs();
	$('#more_blog').click(function(){
		moreBlogs();
	});
	function moreBlogs(reset=null){
		if($('.categories_sec #dropdownMenuButton ').text().trim() == "Categories"){
			var cat = '';
		}else{
			var cat = $('.categories_sec #dropdownMenuButton').text().trim();
		}
		if($('.archives_sec #dropdownMenuButton').text().trim() == "Archives"){
			var archive = '';
		}else{
			var archive = $('.archives_sec #dropdownMenuButton').text().trim();
		}
		$.ajax({
			url: "<?=BASE_URL.'/api/blog-list' ?>",
			type: "POST",
			data: {page: $('#page_num').val(), category: cat, archive: archive},
			success: function(response){
				var res = JSON.parse(response);
				$('#page_num').val(parseInt($('#page_num').val())+1);
				if(res.length > 0){
					var count = 0, html = '';
					$.each(res, function(i, e){
						if(count == 3){
							html += '</div><div class="row mt-4 pt-1">';
						}
						if(count < 3){
							html += `
								<article class="col-12 col-md-4 mb-4 mb-md-0">
									<div class="card" style="overflow:hidden">
										<a href="<?=BASE_URL ?>blog/${e.slug}" class="thumbnail_1" style="background-image: url(${e.img.replace('images/blogs/', 'images/blogs/thumbnails/')});"></a>
										<div class="des_cont p-3">
											<a href="<?=BASE_URL ?>blog/${e.slug}" class="h5 d-block">${e.title}</a>
											<p>
												${stripHtml(e.blog).substr(0,140)}
											</p>
											<a href="<?=BASE_URL ?>blog/${e.slug}" class="read_more text-silver f-w-500">Read More</a>
										</div>
									</div>
								</article>`;
						}else{
							html += `
							<article class="col-12 col-md-4 mb-4 mb-md-0">
									<div class="card" style="overflow:hidden">
										<a href="<?=BASE_URL ?>blog/${e.slug}" class="thumbnail_1" style="background-image: url(${e.img.replace('images/blogs/', 'images/blogs/thumbnails/')});"></a>
										<div class="des_cont p-3">
											<a href="<?=BASE_URL ?>blog/${e.slug}" class="h5 d-block">${e.title}</a>
											<p>
												${stripHtml(e.blog).substr(0,140)}
											</p>
											<a href="<?=BASE_URL ?>blog/${e.slug}" class="read_more text-silver f-w-500">Read More</a>
										</div>
									</div>
								</article>
							`;
						}
						
						if(count<5){
							count++;
						}else{
							count = 0;
						}
					});
					if($('#page_num').val() == 0){
						$('.blog-list-container').html('<div class="row">' + html + '</div>');
					}else{
						if(reset == true){
							$('.blog-list-container').html('<div class="row mt-4 pt-1">' + html + '</div>');
						}else{
							$('.blog-list-container').append('<div class="row mt-4 pt-1">' + html + '</div>');
						}
					}
					if(res.length < 5){
						$('.blog-list-btn').hide();
					}else{
						$('.blog-list-btn').show();
					}
				}else{
					if(reset == true){
						$('.blog-list-container').html('<div class="row mt-4 pt-4"><p class="w-100 text-center h4">No more blog post found..</p></div>');
					}else{
						$('.blog-list-container').append('<div class="row mt-4 pt-4"><p class="w-100 text-center h4">No more blog post found..</p></div>');
					}
					$('.blog-list-btn').hide();
				}
			}
		});
	}
	function stripHtml(html){
		// Create a new div element
		var temporalDivElement = document.createElement("div");
		// Set the HTML content with the providen
		temporalDivElement.innerHTML = html;
		// Retrieve the text property of the element (cross-browser support)
		return temporalDivElement.textContent || temporalDivElement.innerText || "";
	}
	$('.dropdown-item').click(function(){
		$(this).parents('.dropdown').children('#dropdownMenuButton').children('span').text(ucwords($(this).attr('data-id').replace('-', ' ')));
		$('#page_num').val(0);
		$('.blog-list-btn').show();
		setTimeout(() => {
			moreBlogs(true);
		}, 700);
	});
	function ucwords (str) {
		return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
			return $1.toUpperCase();
		});
	}
</script>


<?php include 'partial/footer.php';?>
