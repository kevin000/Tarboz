<?php 
  	include "../../config.php";
	require_once BUSINESS_DIR_USER . 'UserManager.php';
    require_once BUSINESS_DIR_USER. 'User.php';

    session_start();
    $userManager = new UserManager();
    $Users = $userManager->getAllUsers();
    
    if (intval( $_GET["id"])){
        
        $userId = intval( $_GET["id"]);
        $singleUser = $userManager->getUserByUserId($userId);
        
    }

    $userCount = count($singleUser); 
    if ($userCount > 0) {
      foreach ($singleUser as $users) {

                       $fname = $users->getFirstName();
                $lname = $users->getLastName();
                $email = $users->getEmail();
                $language = $users->getUserLanguage();
                $regdate = $users->getRegistrationDate();
                $location = $users->getLocation();
                $mediaid = $users->getMediaId();
                $ratingid = $users->getUserRatingId();
    ?>   
     <div><b>Name: </b><?php echo "".$fname."".$lname  ?></div> 
	 <div><b>Email: </b><?php echo "".$email.""  ?></div> 
	 <div><b>Language: </b><?php echo "".$language."" ?></div>
    <?php 
      } // end of foreach loop
    } // end of if statement
    else {
//         header("Location: http://localhost/tarboz/");
    }
    ?>