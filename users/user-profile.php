<?php
	include_once "../php/session.php";
	
	require_once '../php/user_retrieve.php';	
	user_retrieve();

	include "src/header.php";
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
          <img className="profile_pic" src="images/logo_globuzzer.png" alt="profile picture" width="100" height="100"/>
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
         <label htmlFor="fname">First name</label>
          <input className="first_name_input" type="text" id="fname" name="first_name" placeholder="First name" defaultValue="<?php echo $_SESSION[ 'fname' ]; ?>" />
         <label htmlFor="sname">Surname</label>
          <input className="last_name_input" type="text" id="sname" name="last_name" placeholder="Last name" defaultValue="<?php echo $_SESSION[ 'lname' ]; ?>" />
         <label htmlFor="sex">Sex</label>
         <select className="sex_option" name="sex">
          <option value="Unspecified">Unspecified</option>
          <option value="Male"<?php if($_SESSION['sex']=='Male'){echo ' selected';} ?>>Male</option>
          <option value="Female"<?php if($_SESSION['sex']=='Female'){echo ' selected';} ?>>Female</option>
         </select>

         <label htmlFor="birthday">Birthday</label>
          <input className="birthday_input" type="date" id="birthday" name="birthday" defaultValue="<?php echo $_SESSION[ 'birthday' ]; ?>" />
         <label htmlFor="email">E-mail</label>
           <input className="email_input" type="email" id="email" name="email" placeholder="E-mail" defaultValue="<?php echo $_SESSION[ 'email' ]; ?>" />
         <label htmlFor="mobile">Mobile</label>
           <input className="mobile_input" type="tel" id="mobile" name="mobile" placeholder="Number" defaultValue="<?php echo $_SESSION[ 'phone' ]; ?>" />
       </div>
        <div className="grey_line"></div>
     </div>
  )}

  function Optional() {
   return (
     <div className="optional">
       <div className="optional_text">Optional</div>
       <div className="input_location">
          <label htmlFor="location">Location</label>
           <input className="location_input" type="text" id="location" name="location" placeholder="Location" defaultValue="<?php echo $_SESSION[ 'location' ]; ?>" />
          <label htmlFor="country">Country</label>
           <input className="country_input" type="text" id="country" name="country" placeholder="Country" defaultValue="<?php echo $_SESSION[ 'country' ]; ?>" />
          <label htmlFor="introduce">Introduction</label>
           <textarea className="introduce_text" rows="6" cols="50" name="introduction" placeholder="Tell us about more yourself.." defaultValue="<?php echo $_SESSION[ 'introduction' ]; ?>" >
           </textarea>
       </div>
     </div>
   )}
	
	function UserProfileForm() {
		return (
			<div className="info">
				<form className="input_form" method='post' action='../php/user_update.php'>
					<Information />
					<Optional />
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
           <div className="userProfileFormContainer">
						<UserProfileForm />
           </div>
         </div>
       </div>
         )
     }
              ReactDOM.render(<HomePage/>, document.getElementById('user-profile'));
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