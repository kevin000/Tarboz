
<?php 
  	include "../../config.php";
    include "../Shared/header.php";
	require_once BUSINESS_DIR_USER . 'UserManager.php';    
    require_once BUSINESS_DIR_USER. 'User.php';
    session_start();
    $userManager = new UserManager();
    $Users = $userManager->getAllUsers();

     $user_logged_in = true;

      if (isset($_SESSION['user'])) {
          $user = $_SESSION['user'];
          $user_id = $user->getUserId();
          $User_Login = $userManager->getUserByUserId($user_id);
          
              foreach ($User_Login as $users) {

                $fname = $users->getFirstName();
                $lname = $users->getLastName();
                $email = $users->getEmail();
                $language = $users->getUserLanguage();
                $regdate = $users->getRegistrationDate();
                $location = $users->getLocation();
                $mediaid = $users->getMediaId();
                $ratingid = $users->getUserRatingId();
                  
             }
        
?>
    <div class="profile_top_pannel">
        <div style=" width: 300px; border-style: solid; height:80px; ">test</div>
        <div style=" width: 300px; border-style: solid; height:80px; display: inline; ">test</div>
    </div>
<?php
      } else {
        $user_logged_in = false;
        //redirect to homepage
        header("Location: http://localhost/tarboz/");
      }
    echo "<br/><br/><br/><b>See All Users</b><br>";
    $userCount = count($Users); 
    if ($userCount > 0) {
      foreach ($Users as $users) {

        $uid = $users->getUserId();
        $fname = $users->getFirstName();
        $lname = $users->getLastName();
        $pwd = $users->getPassword();
        $loginid = $users->getLogin();
        $email = $users->getEmail();
        $dob = $users->getDOB();
        $language = $users->getUserLanguage();
        $usertype = $users->getUserType();
        $regdate = $users->getRegistrationDate();
        $location = $users->getLocation();
        $mediaid = $users->getMediaId();
        $ratingid = $users->getUserRatingId();
        $emailsub = $users->getEmailSub();
?>   
     <div><a href="userview.php?id=<?php echo $uid ?>&name=<?php echo $fname ?>"><?php echo "".$fname."".$lname  ?></a></div> 

    <?php 
      } // end of foreach loop
    } // end of if statement
    ?>