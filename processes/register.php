<?php
/*
Proccesses carried out when registeration form is submitted.

Variables & indices used
========================
s_name  =>    surmame
f_name  =>    first name
m_name  =>    middle name
dob     =>    date of birth
err_msg =>    error message
suc_msg =>    success message

@athour: fresher
@date: 16/03/2019
*/
$referer_pg = $_SERVER['HTTP_REFERER'];
include '../inc/general.php';
include '../inc/functions.php';

if (isset($_POST['reg'])) {
    // Session variable for input data
	$_SESSION['s_name'] = $_POST['s_name'];
	$_SESSION['f_name'] = $_POST['f_name'];
	$_SESSION['m_name'] = $_POST['m_name'];
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['dob'] = $_POST['dob'];
	$_SESSION['nysc'] = $_POST['nysc'];

    // Check if required field are not empty, if empty set error message.
 	if (!empty($_POST['s_name']) && !empty($_POST['f_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['nysc'])) {

        // Set error message if terms & condition not checked
 		if ($_POST['terms'] != 'on') {
 			$err_msg[] = 'You must accept the terms and conditions.';
 		}else{
	 		$surname = $_POST['s_name'];
	 		$firstname = $_POST['f_name'];
	 		$middlename = $_POST['m_name'];
	 		$phone = $_POST['phone'];
	 		$email = $_POST['email'];
	 		$api_key = 'sMn2ptEASbqDQ2bS5zBbag==';
	 		$dob = $_POST['dob'];
            
            // Set nysc_status' value
	 		if ($_POST['nysc'] == 'yes') {
	 			$nysc_status = 1;
	 		}else{
	 			$nysc_status = 0;
	 		}
           
            // Registeration Query
            $query = "INSERT INTO `users`(`surname`, `firstname`, `middlename`, `phone`, `email`, `dob`, `deg_cert`, `passport`, `nysc_status`, `nysc_cert`) VALUES ('$surname','$firstname','$middlename','$phone','$email','$dob','$deg_cert_url','$pass_p_url','$nysc_status','$nysc_cert_url')";

	 		// Reject email if exists in db, else, run query.
            if (email_exists($email, $conn)) {
	 			$err_msg[] = 'Email already exists.';
	 		}else{
                
                // If passport upload is successfull, set success message else, set error message
                if (upload_file('pass_p', '/var/www/html/fadis/uploads/passport/')) {
                    $suc_msg[] = "Your passport " . basename($_SESSION['filename']) . " has been uploaded";
                    $pass_p_url = 'uploads/passport/'. basename($_SESSION['filename']);
                }else{
                    $err_msg = $_SESSION['err_msg'];
                }

                // If degree certificate upload is successfull, set success message else, set error message
                if (upload_file('deg_cert', '/var/www/html/fadis/uploads/degree certificate/')) {
                    $suc_msg[] = "Your Degree Certificate " . basename($_SESSION['filename']) . " has been uploaded";
                    $deg_cert_url = 'uploads/degree certificate/'. basename($_SESSION['filename']);
                }else{
                    $err_msg = $_SESSION['err_msg'];
                }

                // If nysc certificate upload is successfull, set success message else, set error message
                if (upload_file('nysc_cert', '/var/www/html/fadis/uploads/nysc certificate/')) {
                    $suc_msg[] = "Your NYSC Certificate " . basename($_SESSION['filename']) . " has been uploaded";
                    $nysc_cert_url = 'uploads/nysc certificate/'. basename($_SESSION['filename']);
                }else{
                    $err_msg = $_SESSION['err_msg'];
                }

                // Registeration Query
                $query = "INSERT INTO `users`(`surname`, `firstname`, `middlename`, `phone`, `email`, `dob`, `deg_cert`, `passport`, `nysc_status`, `nysc_cert`) VALUES ('$surname','$firstname','$middlename','$phone','$email','$dob','$deg_cert_url','$pass_p_url','$nysc_status','$nysc_cert_url')";

                // Running query
	 			if (mysqli_query($conn, $query)) {
			        $msg = str_replace(' ', '%20', 'Hello '.$firstname.' '.$surname.'You have been successfully registered as a member of "FADIS".For more enquiries do not hesitate to contact 012345667');

			        // Send Email
                    if (send_mail($email,'FADIS Registeration', $msg)) {
			        	$suc_msg[] = 'Email sent.';
			        }else{
			        	$err_msg[] = 'Email not sent.';
			        }
                    
                    // Registeration completed, send sms.
                    if (send_sms($phone, $msg)) {
                    	$suc_msg[] = 'You have been successfully registered as a member of "FADIS" and sms sent to.'.$phone;
                    }else{
                    	$suc_msg[] = 'You have been successfully registered as a member of "FADIS"';
                    	$err_msg[] = 'SMS not sent';
                        $err_msg[] = $_SESSION['err_msg'];
                    }
			    }else{
				    $err_msg[] = mysqli_error($conn);
			    }
			}
		}
	}
	else{
	   $err_msg[] = 'Fill the required field';
	}

    // Make err_msg & suc_msg global by storing into a session variable.
    if (isset($err_msg)) {
    	$_SESSION['err_msg'] = $err_msg;
    }
    if (isset($suc_msg)) {
        $_SESSION['suc_msg'] = $suc_msg;
    }

	header("Location:".$referer_pg);
    // print_r($_SESSION);
}

?>