<?php include 'partial/header.php';?>
<div class="container-fluid clinical-wellness-community p-0">
   <div class="container">
      <div class="row justify-content-center">
         <div class="mt-5 mb-5">
            <h2 class="mt-3 mb-3 text-center">All Resources</h2>
            <p class="w-75 m-auto text-center">Welcome to our resources page. Here, we've curated a collection of educational materials designed to inform, inspire, and empower you on your journey to success.</p>
         </div>
      </div>
      <div class="main-provider">
         <div class="mt-2">
            <div class="tab-card-header mt-4">
               <ul class="nav nav-tabs card-header-tabs" id="resourseTab">
                  <li class="nav-item">
                     <a class="nav-link pl-0 pr-0 active"  href="<?= BASE_URL ?>Blogs">Blogs</a>
                  </li>
                  <!--<li class="nav-item">
                     <a class="nav-link pl-0 pr-0" href="<?= BASE_URL ?>articles">Articles</a>-->
                  </li>
                  <li class="nav-item">
                     <a class="nav-link pl-0 pr-0" href="<?= BASE_URL ?>media-kit">Media Kit</a>
                  </li>
               </ul>
            </div>
            <div class="tab-content mt-5" id="resourseTabContent">
               <div class="tab-pane fade show active" id="Exercise-and-Physical-Activity">
               <?php include 'partial/all-blogs.php'; ?>
            </div>
                  
                  </div>
               </div>
            </div>
            <div class="tab-pane fade show active" id="Lifestyle-Medicine">
               <div class="location-provider">
               </div>
            </div>
            <div class="tab-pane fade show active" id="Stress Management">
               <div class="location-provider row">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php include 'partial/footer.php';?>