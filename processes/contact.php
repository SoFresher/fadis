<?php
session_start();
include '../inc/general.php';
include '../inc/functions.php';
$referer_pg = $_SERVER['HTTP_REFERER'];

if (isset($_POST['send'])) {
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['msg'] = $_POST['msg'];
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg']) ) {
		$msg = $_POST['msg'];
		$email = $_POST['email'];
        $name = $_POST['name'];
        $subject = 'Contact from Fadis.';
        $admin_email = 'info@zeemproject.com';
        
        if (send_mail($admin_email, $subject, $msg)) {
           $suc_msg[] = 'Thank you for contacting us, your message has been sent to the admin.';
        }else{
            $err_msg[] = 'Email not sent.';
        }
	}else{
		$err_msg[] = 'Fill the required field';
	}
	$_SESSION['err_msg'] = $err_msg;
	$_SESSION['suc_msg'] = $suc_msg;
}
if (isset($_SESSION)) {
	header("Location:".$referer_pg);
}

?>