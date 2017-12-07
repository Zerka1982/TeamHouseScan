<!--  *******Header*******  -->
<?php 
include "src/header.php";
 ?> 

  <section class="container-contact">
    <div class="bg-contact">
      <div class="content"><br>
        <h1>Contact us</h1>
        <form id="contact-form" action="" name="myForm" onsubmit="return validateForm()">
          <div class="contentform">
            <div class="leftcontact">     
              <div class="form-group">
                <input type="text" name="firstName" id="firstName" placeholder="First name"/>             
              </div>
            </div>
            <div class="rightcontact">  
              <div class="form-group">
                <input type="text" name="lastName" id="lastName" placeholder="Last name" />  
              </div>  
            </div>  
            <div class="form-group">
              <input type="email" name="email" id="email" placeholder="Your email address" />                
            </div>
            <div class="form-group">    
              <textarea name="message" id="message" rows="14" placeholder="Type your message here..." ></textarea>
            </div> 
            <div class="form-group">
            <input class="primary-contact-button wow zoomIn" type="submit" value="Send" />
            </div>
          </div> 
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </section>

  <section class="map wow zoomIn">
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2033.9904944044308!2d18.068475916073133!3d59.34980648166603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f779d96ed48cb%3A0xb1366ae00b879b4a!2sKungliga+Tekniska+H%C3%B6gskolan!5e0!3m2!1sen!2sfi!4v1502953690576" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <!-- footer
   ================================================== -->
 <?php 
  include "src/footer.php";
 ?>

