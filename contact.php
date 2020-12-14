<?php include("header.php");?>
	<!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Get in Touch</h2>
			<p align="justify"> Feel free to visit our office to discuss further, we will be happy to partner with with you. Our office space is located at Vidya Nagar, Near Kattamaisamma temple. If you are using google maps, just type “Introspections Architects” and it will guide you to our office. Incase you are stuck, please call us at 9849656289 for help.</p>
			
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form class="contactform">                  
                    <p class="comment-form-author">
                      <label for="author">Name <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="author">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Subject</label>
                      <input type="text" name="subject">  
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Message</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                    </p>                
                    <p class="form-submit">
                      <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                  <div id="map" style="height:400px"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->


 <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var myLatLng = {lat: 17.402723, lng: 78.508042};
        var map = new google.maps.Map(mapDiv, {
            center: myLatLng,
            zoom: 12
        });
        var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Here We Are'
    });
    marker.set(map);
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyANaaY_a5Z9lXccOBERdOQOvgTqDtH3kXM">
    </script>
<?php include("footer.php");?>