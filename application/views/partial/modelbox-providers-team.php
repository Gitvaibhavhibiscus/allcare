<!-- Modal -->
<div class="modal fade  team_model_box" id="<?=$prefix ?>-<?=$row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
	    <button type="button" class="close font-secondary" data-dismiss="modal" aria-label="Close">
	      <span aria-hidden="true">Back</span>
	    </button>
     	
	    <div class="modal-body">
	    	<div class="container-fluid p-0 bg_illustration">
		        <div class="row m-0">
		        	<div class="col-12 col-md-4 m_left">
		        		<img src="<?=IMG_BASE_URL ?><?=$row['img'] ?>" alt="<?=$row['name'] ?>" class="w-100">
		        	</div>

		        	<div class="col-12 col-md-8 m_right">
		        		<div class="logo_sec">
				     		<img src="<?=IMG_BASE_URL ?>logo.png" alt="All Care logo">
				     	</div>
		        		<h5 class="name"><?=$row["name"] ?></h5>
		        		<h6 class="f-w-300 font-secondary mb-4"><?=$row['designation'] ?></h6>
		        		<?=$row['bio'] ?>
		        	</div>
		        </div>
		    </div>
	    </div>
      
    </div>
  </div>
</div>
