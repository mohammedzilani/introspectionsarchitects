<?php include("header.php");?>

<div style="background-color: #e1dad2">
   <h2 class="p-title">Projects</h2>
    <p class="project-desc"> Firm - Introspections has been established by venkat yerramilli in the year 2008, dealing in architectural and interior services, in due course, Introspections has successfully completed more than 120 projects, including independant houses, apartments, offices, restaurants, commercial and semi public spaces.</p>
</div>
<!-- start of row 1 -->
<div class="row" style="background-color: #e1dad2">
  <div class="col-md-4 project-img-div">
    <p class="AR project_title">Adarsh Residence</p>
    <img class="AR tumbnail-img" src="assets/img/projects/list/Adarsh Residence/MP.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="AW project_title">Apartment at warangal</p>
    <img class="AW tumbnail-img" src="assets/img/projects/list/Apartment at warangal/MP.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="AAI project_title">Aurobindo ashram interiors</p>
    <img class="AAI tumbnail-img" src="assets/img/projects/list/Aurobindo ashram interiors/MP.jpg">
  </div>
</div>
<!-- end of image row 1 -->
<!-- start of row 2 -->

<div class="row" style="background-color: #e1dad2">

<div class="col-md-4 project-img-div">
    <p class="TCH project_title">The Cent Hotel</p>
    <img class="TCH tumbnail-img" src="assets/img/projects/list/The Cent Hotel/MP.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="CF project_title">Cafe</p>
    <img class="CF tumbnail-img" src="assets/img/projects/list/Cafe/MP.jpg">
  </div>

  <div class="col-md-4 project-img-div">
    <p class="TCR project_title">The Cent Restaurant</p>
    <img class="TCR tumbnail-img" src="assets/img/projects/list/The Cent Restaurant/MP.jpg">
  </div>

</div>

<div class="row" style="background-color: #e1dad2">
  <div class="col-md-4 project-img-div">
    <p class="EA project_title">Engala Apartment</p>
    <img class="EA tumbnail-img" src="assets/img/projects/list/Engala Apartment/MP.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="JA project_title">Jaipal Apartment</p>
    <img class="JA tumbnail-img" src="assets/img/projects/list/Jaipal Apartment/MP.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="LVI project_title">Lahari Villas</p>
    <img class="LVI tumbnail-img" src="assets/img/projects/list/Lahari Villas/MP.jpg">
  </div>
</div>

<div class="row" style="background-color: #e1dad2">
  <div class="col-md-4 project-img-div">
    <p class="RAT project_title">Residence at attapur</p>
    <img class="RAT tumbnail-img" src="assets/img/projects/list/Residence at attapur/MP.jpg">
  </div>

  <div class="col-md-4 project-img-div">
    <p class="VS project_title">Villas at Saketh</p>
    <img class="VS tumbnail-img" src="assets/img/projects/list/Villas at Saketh/MP.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="CBL project_title">Commercial building at lakdikapool</p>
    <img class="CBL tumbnail-img" src="assets/img/projects/list/Commercial building at lakdikapool/MP.jpg">
  </div>
</div>

<div class="row" style="background-color: #e1dad2">
  <div class="col-md-4 project-img-div">
    <p class="LV project_title">Legend villa</p>
    <img class="LV tumbnail-img" src="assets/img/projects/list/Legend villa/MP.jpg">
  </div>
  <div class="col-md-4 project-img-div">
    <p class="VT project_title">Votarytech Office</p>
    <img class="VT tumbnail-img" src="assets/img/projects/list/Votarytech Office/MP.jpg">
  </div>

  <div class="col-md-4 project-img-div">
    <p class="RU project_title">Residence in uppal</p>
    <img class="RU tumbnail-img" src="assets/img/projects/list/Residence in uppal/MP.jpg">
  </div>

</div>

<div class="row" style="background-color: #e1dad2">
  <div class="col-md-4 project-img-div">
    <p class="MR project_title">Murali Residence</p>
    <img class="MR tumbnail-img" src="assets/img/projects/list/Murali Residence/MP.jpg">
  </div>
   
  <div class="col-md-4 project-img-div">
    <p class="ET project_title">Eden Towers</p>
    <img class="ET tumbnail-img" src="assets/img/projects/list/Eden Towers/MP.jpg">
  </div>
  
  <div class="col-md-4 project-img-div">
    <p class="RA project_title">Residence at alkapuri</p>
    <img class="RA tumbnail-img" src="assets/img/projects/list/Residence at alkapuri/MP.jpg">
  </div>
</div>

<!-- end of image row 2-->

<!-- popup divisions -->
<!-- 1 -->
<div id="AR-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Adarsh Residence/";
        $images = glob($dirname."*AR*.jpg");
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
<div id="AW-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Apartment at warangal/";
        $images = glob($dirname."*AW*.jpg");
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
<div id="AAI-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Aurobindo ashram interiors/";
        $images = glob($dirname."*AAI*.jpg");
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
<div id="CF-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Cafe/";
        $images = glob($dirname."*CF*.jpg");
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
<div id="CBL-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Commercial building at lakdikapool/";
        $images = glob($dirname."*CBL*.jpg");
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
<div id="ET-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Eden Towers/";
        $images = glob($dirname."*ET*.jpg");
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
<!-- 7-->
<div id="EA-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Engala Apartment/";
        $images = glob($dirname."*EA*.jpg");
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
<!--  end of 7-->
<!-- 8-->
<div id="JA-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Jaipal Apartment/";
        $images = glob($dirname."*JA*.jpg");
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
<!--  end of 8-->
<!-- 9-->
<div id="LVI-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Lahari Villas/";
        $images = glob($dirname."*LVI*.jpg");
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
<!--  end of 9-->
<!-- 10-->
<div id="LV-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Legend villa/";
        $images = glob($dirname."*LV*.jpg");
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
<!--  end of 10-->
<!-- 11-->
<div id="MR-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Murali Residence/";
        $images = glob($dirname."*MR*.jpg");
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
<!--  end of 11-->
<!-- 12-->
<div id="RA-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Residence at alkapuri/";
        $images = glob($dirname."*RA*.jpg");
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
<!--  end of 12-->
<!-- 13-->
<div id="RAT-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Residence at attapur/";
        $images = glob($dirname."*RAT*.jpg");
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
<!--  end of 13-->
<!-- 14-->
<div id="RU-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Residence in uppal/";
        $images = glob($dirname."*RU*.jpg");
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
<!--  end of 14-->
<!-- 15-->
<div id="TCH-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/The Cent Hotel/";
        $images = glob($dirname."*TCH*.jpg");
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
<!--  end of 15-->
<!-- 16-->
<div id="TCR-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/The Cent Restaurant/";
        $images = glob($dirname."*TCR*.jpg");
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
<!--  end of 16-->
<!-- 17-->
<div id="VS-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Villas at Saketh/";
        $images = glob($dirname."*VS*.jpg");
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
<!--  end of 17-->
<!-- 18-->
<div id="VT-popup" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="swiper-container">
    <div class="swiper-wrapper">        
      <?php 
        $dirname = "assets/img/projects/list/Votarytech Office/";
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
<!--  end of 18-->
<!-- end of popup divsions -->
      


<?php include("footer.php")?>