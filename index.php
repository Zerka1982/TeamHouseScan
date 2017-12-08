<!--  *******Header*******  -->
<?php 
	include "src/header.php";
 ?>

  <!--  *******Jumbotron*******  -->
  <div class="jumbotron">
    <div class="space"> </div>
    <div class="jumbotronHome">
      <div class="shadow">
        <div class="decore"></div>
        <div class="textJ">
          <h1 >House Scan <br>Service</h1>
          <p>As locals, we check that the house or room that you chose is real &amp; provide essential information about it.</p>        
          <a href="#">Get in touch</a>        
        </div>
      </div>
    </div>
  </div>
    
  <!--  *******How it works*******  -->
  <section class="works">
    <div class="inner">
      <div class="content">
        <h1 id="blue" class="wow zoomIn">How it works?</h1>
        <p class="wow fadeInDown">House scanner is a service provided for the<br> international students and new arrivals who intend to move to Stockholm<br> but has no local friend who would make sure if the shosen room or apartment is real.</p>
        <i id="circle" class="fa fa-user wow rotateInDownLeft" data-wow-delay="0.5s" aria-hidden="true" style="font-size: 110px; color: #fff;"></i> 
        <hr class="style1">
        <i id="circle" class="fa fa-home wow jackInTheBox" data-wow-delay="0s" aria-hidden="true" style="font-size: 110px; color: #7BCABB; background: transparent;"></i>
        <hr class="style1">
        <i id="circle" class="fa fa-user wow rotateInUpRight" data-wow-delay="1s" aria-hidden="true" style="font-size: 110px; color: #fff"></i>
      </div>

      <div class="container">
        <video  id="sampleMovie" class="sampleMovie"  preload controls="controls" poster="images/poster.png">
          <source src="video/landing_video.mp4" type='video/mp4' />
          <source src="video/landing_video.webm" type='video/webm' />
        </video>
        <a onclick="displayVideo()"><i id="circlePlay" class="fa fa-play-circle" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>
    
  <!--  *******Our team*******  -->
  <div class="site">
      <h1>Our team</h1>
      <P>Trustful people are going to check the house for you</p>
  <div class="item one">
    <div class="point1">
      <h2>Jim Smith</h2>
      <h3>Stockholm</h3> 
    </div>
  </div>
  
  <div class="item three"> 
    <div class="point2"> 
      <h2>Maria Bolin</h2>
      <h3>Stockholm</h3>
    </div>
  </div>
  <div class="clear"></div>
</div>

  <!--  *******Comment*******  -->
  <section class="comment">
    <div class="decoretwo"></div> 
    <div class="part1 wow zoomIn">
      <blockquote><h1><br>I'm 100% <br>satisfied with <br>this service</h1></blockquote>
      <p>Anna, <br> KTH student, Stockholm</p>
    </div>
    <div class="part2"> 
      <img class="photo wow zoomIn" src="images/review.jpg" >
      <div class="text wow zoomIn">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including... </p>
      </div>
    </div>
    <div class="clear"></div>
  </section>

  
     <div class="question-container">
          <h1>Do you need more information?</h1>
          <a href="contact.html">Contact us</a>
      </div>
  
  <!-- footer
   ================================================== -->
	<?php 
  	include "src/footer.php";
	?>
