<?php include("header.php");?>

<div>
   <h2 class="p-title">Projects</h2>
    <p class="project-desc"> Firm - Introspections has been established by venkat yerramilli in the year 2008, dealing in architectural and interior services, in due course, Introspections has successfully completed more than 120 projects, including independant houses, apartments, offices, restaurants, commercial and semi public spaces.</p>
</div>
<!-- start of row 1 -->
<div class="row">
  <div class="col-md-4 project-img-div">
    <p class="VT project_title">VOTARYTECH OFFICE</p>
    <img class="VT tumbnail-img" src="assets/img/projects/VT-9.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="AD project_title">ADARSH RESIDENCE</p>
    <img class="AD tumbnail-img" src="assets/img/projects/AD-3.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="KM project_title">MURALI RESIDENCE</p>
    <img class="KM tumbnail-img" src="assets/img/projects/KM-26.jpg">
  </div>
</div>
<!-- end of image row 1 -->
<!-- start of row 2 -->
<div class="row">
  <div class="col-md-4 project-img-div">
    <p class="NK project_title">N K</p>
    <img class="NK tumbnail-img" src="assets/img/projects/NK-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="RG project_title">R G</p>
    <img class="RG tumbnail-img" src="assets/img/projects/RG-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="OM project_title">O M</p>
    <img class="OM tumbnail-img" src="assets/img/projects/OM-1.jpg">
  </div>
</div>

<div class="row">
  <div class="col-md-4 project-img-div">
    <p class="NK project_title">The Cent Hotel Interiors</p>
    <img class="NK tumbnail-img" src="assets/img/projects/TCHI-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="RG project_title">Apartment at warangal</p>
    <img class="RG tumbnail-img" src="assets/img/projects/AAW-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="OM project_title">Aurobindo ashram interiors</p>
    <img class="OM tumbnail-img" src="assets/img/projects/OM-1.jpg">
  </div>
</div>

<div class="row">
  <div class="col-md-4 project-img-div">
    <p class="NK project_title">Cafe</p>
    <img class="NK tumbnail-img" src="assets/img/projects/CAFE-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="RG project_title">Commercial Building At Lakdikapool</p>
    <img class="RG tumbnail-img" src="assets/img/projects/CBAL-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="OM project_title">Legend Villa</p>
    <img class="OM tumbnail-img" src="assets/img/projects/LV-1.jpg">
  </div>
</div>

<div class="row">
  <div class="col-md-4 project-img-div">
    <p class="NK project_title">Residence At Alkapuri</p>
    <img class="NK tumbnail-img" src="assets/img/projects/RAALK-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="RG project_title">Residence At Attapur</p>
    <img class="RG tumbnail-img" src="assets/img/projects/RAATT-1.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="OM project_title">Residence In Uppal</p>
    <img class="OM tumbnail-img" src="assets/img/projects/RIU-1.jpg">
  </div>
</div>

<div class="row">
  
  <div class="col-md-4 project-img-div">
    <p class="RG project_title">Villas At Saketh</p>
    <img class="RG tumbnail-img" src="assets/img/projects/VAS-1.jpg">
  </div>
  <!-- <div class="col-md-4 project-img-div">
    <p class="NK project_title">Anil Kodali Residence Interiors</p>
    <img class="NK tumbnail-img" src="assets/img/projects/AKRI-1.jpg">
  </div> -->
  <!-- <div class="col-md-4 project-img-div">
    <p class="OM project_title">Residence in uppal</p>
    <img class="OM tumbnail-img" src="assets/img/projects/OM-1.jpg">
  </div> -->
</div>






<!-- end of image row 2-->

<!-- popup divisions -->
<!-- 1 -->
<div id="AD-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/";
        $images = glob($dirname."*AD*.jpg");
        foreach($images as $image) { ?>
           <div class="swiper-slide">
              <img class="project-img" alt="img" src="<?php echo $image;?>">
           </div>
      <?php 
        }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
  </div>
</div>
<!--  end of 1-->
<!-- 2 -->
<div id="VT-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/";
        $images = glob($dirname."*VT*.jpg");
        foreach($images as $image) { ?>
           <div class="swiper-slide">
              <img class="project-img" alt="img" src="<?php echo $image;?>">
           </div>
      <?php 
        }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
  </div>
</div>
<!--  end of 2-->
<!-- 3-->
<div id="KM-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/";
        $images = glob($dirname."*KM*.jpg");
        foreach($images as $image) { ?>
           <div class="swiper-slide">
              <img class="project-img" alt="img" src="<?php echo $image;?>">
           </div>
      <?php 
        }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
  </div>
</div>
<!--  end of 3-->
<!-- 4 -->
<div id="NK-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/";
        $images = glob($dirname."*NK*.jpg");
        foreach($images as $image) { ?>
           <div class="swiper-slide">
              <img class="project-img" alt="img" src="<?php echo $image;?>">
           </div>
      <?php 
        }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
  </div>
</div>
<!--  end of 4-->
<!-- 5 -->
<div id="RG-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/";
        $images = glob($dirname."*RG*.jpg");
        foreach($images as $image) { ?>
           <div class="swiper-slide">
              <img class="project-img" alt="img" src="<?php echo $image;?>">
           </div>
      <?php 
        }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
  </div>
</div>
<!--  end of 5-->
<!-- 6-->
<div id="OM-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/";
        $images = glob($dirname."*OM*.jpg");
        foreach($images as $image) { ?>
           <div class="swiper-slide">
              <img class="project-img" alt="img" src="<?php echo $image;?>">
           </div>
      <?php 
        }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
  </div>
</div>
<!--  end of 6-->

<!-- end of popup divsions -->
      


<?php include("footer.php")?>