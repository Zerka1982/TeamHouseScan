<?php
include "src/profile.php";
 ?>

<div id="user-profile"></div>

 <script type="text/babel">

  function Top() {
     return (

       <div className="myprofile">
         <div className="myprofile_text">
            <h2>My Profile</h2>
          </div>
         <a href="user-landing.php" className="button"></a>
       </div>

  )}

  function NavMenu() {
    return (
      <div className="navMenu">
        <div className="white_line"></div>
        <div className="Pic_Name_Location">
          <img className="profile_pic" src="images/globuzzer.png" alt="profile picture" width="100" height="100"/>
          <div className="profile_name">Alexander S</div>
          <div className="profile_location">Los Angeles, US</div>
        </div>
        <div className="white_line"></div>
        <div className="nav_my_request">My Request</div>
        <div className="white_line"></div>
        <div className="nav_message">Message</div>
        <div className="white_line"></div>
      </div>

  )}

  function Information() {
   return (
      <div className="information">
       <div className="info_text">Information</div>
       <div className="input_data">
       <form className="input_form">
         <label htmlFor="fname">First name</label>
          <input className="fname_input" type="text" id="fname" name="firstname" placeholder="First name"/>
         <label htmlFor="sname">Surname</label>
          <input className="sname_input" type="text" id="sname" name="surename" placeholder="Surname"/>
         <label htmlFor="sex">Sex</label>
         <select className="sex_option" name="sex" form="input_form">
          <option value="option">Option</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
         </select>

         <label htmlFor="birthday">Birthday</label>
          <input className="birthday_input" type="date" id="birthday" name="birthday"/>
         <label htmlFor="email">E-mail</label>
           <input className="email_input" type="email" id="email" name="email" placeholder="E-mail"/>
         <label htmlFor="mobile">Mobile</label>
           <input className="mobile_input" type="tel" id="mobile" name="mobil" placeholder="Number"/>
       </form>
       </div>
        <div className="grey_line"></div>
     </div>
  )}

  function Optional() {
   return (
     <div className="optional">
       <div className="optional_text">Optional</div>
         <form className="location_form">
          <label htmlFor="location">Location</label>
           <input className="location_input" type="text" id="location" name="location" placeholder="Location"/>
          <label htmlFor="introduce">Introduce</label>
           <textarea className="introduce_text" rows="6" cols="50" name="intorduction" placeholder="Tell me about more yourself.."></textarea>
           <input className="save" type="submit" value="Save"/>

          </form>
     </div>
   )}

  function HomePage(){
     return (
       <div>
         <div>
           <Top />
         </div>
         <div className="profileBody">
           <div className="navigation">
             <NavMenu />
           </div>
           <div className="info">
             <Information />
             <Optional />
           </div>
         </div>
       </div>
         )
     }
              ReactDOM.render(<HomePage/>, document.getElementById('user-profile'));
</script>
