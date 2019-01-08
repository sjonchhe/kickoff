<!-- footer-section-starts-here -->

<div class="footer">
<div class="footer-top">
    <div class="wrap">
      <div class="col-md-4 col-xs-7 col-sm-5 footer-grid">
        <h4 class="footer-head">About Us</h4>
        <p>This is a website that has been developed as a submission project for Aptech by Sandesh Jonchhe.</p>
        <p>Basically it is a football news website that contans features like news about tranfers,fifa,national,etc as well as league tables.</p>
      </div>

      <div class="col-md-5 col-xs-7 col-sm-7 footer-grid">
          <!--START-USING GOOGLE MAPS WITH API KEY-->
              <h4 class="footer-head">Our Office</h4>
                <div id="map" style="height: 200px;width: 90%;"></div>
                <script>
                  function initMap() {
                    var uluru = {lat: 27.737973, lng:  85.328614};
                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 16,
                      center: uluru
                    });
                    var marker = new google.maps.Marker({
                      position: uluru,
                      map: map
                    });
                  }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuRPnMVYQ_WURxAlCwCTRHhS32dKTgBCM&callback=initMap">
                </script>
            <!--END- USING GOOGLE MAP WITH API KEY-->
      </div>
      <div class="col-md-3 col-xs-12 footer-grid">
        <h4 class="footer-head">Contact Us</h4>
        <span class="hq">Office</span>
        <address>
          <ul class="location">
            <li><span class="glyphicon glyphicon-map-marker"></span></li>
            <li>Maharajgunj Kanti Sangam Marg-03</li>
            <div class="clearfix"></div>
          </ul>
          <ul class="location">
            <li><span class="glyphicon glyphicon-phone"></span></li>
            <li>+977 9849128762</li>
            <div class="clearfix"></div>
          </ul>
          <ul class="location">
            <li><span class="glyphicon glyphicon-envelope"></span></li>
            <li><a href="mailto:info@example.com">sjonchhe@outlook.com</a></li>
            <div class="clearfix"></div>
          </ul>
        </address>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="wrap">
      <div class="copyrights col-md-6" >

        <p style="color:white;">&copy<?php echo date('Y');?> All Rights Reserved | Design by  <a href="http://www.sjonchhe.com.np">Sandesh Jonchhe</a>


      </div>
      <div class="footer-social-icons col-md-6">
        <ul>
          <li><a class="facebook" href="#" ></a></li>
          <li><a class="twitter" href="#"></a></li>
          <li><a class="googleplus" href="#"></a></li>
          <li><a class="dribbble" href="#"></a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- footer-section-ends-here -->
