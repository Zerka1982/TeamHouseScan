<?php
	include_once "../php/session.php";
	include_once "src/header.php";
?>

 <div id="landing-user"></div>

  <script type="text/babel">
  
   function Jumbotron() {
      return (
        
          <div className="jumbotron">
            <div className="space"> </div>
            <div className="jumbotronHome">
              <div className="decore"></div>
              <div className="textJ">
                <h1 >House Scan </h1>
                <p>As locals, we check that the house or room that you chose is real &amp; provide essential information about it.</p>        
                <a href="#">Get in touch</a>        
              </div>
            </div>
          </div>
        
)}
    function BestHosts(){
      return (        
            <div className="bestHosts">
              <h1>Best Hosts</h1>
              <p> Meet high rated host</p>
              <div className="clear"></div>
              <div className="host1">
                <div className="hostShadowB">
                  <div className="point1">
                    <h2>Jim Smith</h2>
                    <h3>Stockholm</h3> 
                  </div>
                </div>
              </div>
              <div className="host2">
                <div className="hostShadowB">
                  <div className="point2"> 
                    <h2>Maria Bolin</h2>
                    <h3>Stockholm</h3>
                    </div>
                </div>
              </div>
              <div className="clear"></div>
            </div>
    
          )
        }

          
  function HostMenu(){
  return (
          <div className="hostMenu">
            <h1> Hosts</h1>
            <p> Find more hosts</p>
            <div className="hosts">
              <div className="host">
                <div className="hostShadow">
                  <img src="images/profile1.jpg" alt="host1"  width="210" height="250"/>
                </div>
              </div>
              <div className="host">
                <div className="hostShadow">
                  <img src="images/profile2.jpg" alt="host1"  width="210" height="250"/>
                </div>
              </div>
              <div className="host">
                <div className="hostShadow">
                  <img src="images/profile3.jpg" alt="host1"  width="210" height="250"/>
                </div>
              </div>
              <div className="host">
                <div className="hostShadow">
                  <img src="images/profile4.jpg" alt="host1"  width="210" height="250"/>
                </div>
              </div>
              <div className="host">
                <div className="hostShadow">
                  <img src="images/profile1.jpg" alt="host1"  width="210" height="250"/>
                </div>
              </div>
              <div className="host">
                <div className="hostShadow">
                  <img src="images/profile1.jpg" alt="host1"  width="210" height="250"/>
                </div>
              </div>            
              </div>
              <div className="clear"></div>
            </div>
            
            )
          }

            
  function AccoMenu(){
        return (
            <div className="accoMenu">
              <h1> Accommodation</h1>
              <p> Recommened house</p>
              <div className="accommo">
                <div className="acco">
                  <div className="hostShadow">
                    <img src="images/place1.jpg" alt="place1"  width="210" height="250"/>
                  </div>
                </div>
                <div className="acco">
                  <div className="hostShadow">
                    <img src="images/place2.jpg" alt="place2"  width="210" height="250"/>
                  </div>
                </div>
                <div className="acco">
                  <div className="hostShadow">
                    <img src="images/place3.jpg" alt="place3"  width="210" height="250"/>
                  </div>
                </div>
                <div className="acco">
                  <div className="hostShadow">
                    <img src="images/place4.jpg" alt="place1"  width="210" height="250"/>
                  </div>
                </div>
                <div className="acco">
                  <div className="hostShadow">
                    <img src="images/place1.jpg" alt="place1"  width="210" height="250"/>
                  </div>
                </div>
                <div className="acco">
                  <div className="hostShadow">
                    <img src="images/place1.jpg" alt="place1"  width="210" height="250"/>
                  </div>
                </div>            
              </div>
            </div>
            )
          }
        function HomePage(){
          return (
          <div>
            <Jumbotron />
            <BestHosts />
            <HostMenu />
            <AccoMenu />
          </div>
          )
      }
               ReactDOM.render(<HomePage/>, document.getElementById('landing-user'));
	</script>

	<script>
		console.log( "Session status (NONE: 1, ACTIVE: 2): " + '<?php echo( session_status() ); ?>' );
		console.log( "user_id: " + '<?php echo( $_SESSION[ 'user_id' ]) ?>' );
	</script>

<!-- footer
   ================================================== -->
 <?php 
  include "src/footer.php";
 ?>