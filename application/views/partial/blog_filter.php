<div class="row blog_filter">
	<?php if(isset($categories) && !empty($categories)) :?>
	<div class="col-auto categories_sec">
		<div class="dropdown">
		  <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    <span>Categories</span> <i class="fas fa-chevron-down"></i>
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<?php
					foreach($categories as $category){
						echo '<span class="dropdown-item" data-id="'.$category.'">'.ucwords(str_replace('-', ' ', $category)).'</span>';
					} 
				?>
		  </div>
		</div>
	</div>
	<?php endif;?>
	<?php if(isset($months) && !empty($months)) :?>

	<div class="col-auto ml-auto archives_sec">
		<div class="dropdown">
		  <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    <span>Archives</span> <i class="fas fa-chevron-down"></i>
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		  <?php
					foreach($months as $month){
						echo '<span class="dropdown-item" data-id="'.$month.'">'.$month.'</span>';
					} 
				?>
		  </div>
		</div>
	</div>
	<?php endif;?>
</div>
