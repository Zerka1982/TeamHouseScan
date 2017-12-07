<div id="FooterSection"></div>

<script type="text/babel">
  function FooterSection(){
        return (     
          <footer>
            <div className="footer-part1">
              <div>
          		  <img className="globe-logo" src="images/logo.svg" width="150" height="30"/>
          		</div>
            </div>

          	<div className="footer">
              <ul className="footer-list">
                <li className="footer-item"><a href="index">Home</a></li>
                <li className="footer-item"><a href="about">About</a></li>
                <li className="footer-item"><a href="contact">Contact</a></li>
              </ul>              

              <div className="brand">            
              </div>
          	</div>
          </footer>
      )
    }
    ReactDOM.render(<FooterSection/>
                    , document.getElementById('FooterSection')
                  );
 </script>
   <!-- Java Script
   ================================================== --> 
      <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/main.js"></script>  

</body>

</html>