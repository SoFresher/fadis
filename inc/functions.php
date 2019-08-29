<?php
/*
All programmer defined functions in the system.

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
// require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
// require '/usr/share/php/libphp-phpmailer/class.smtp.php';

function send_sms($phone, $msg){
    $api_key = 'sMn2ptEASbqDQ2bS5zBbag==';
	if (strlen($phone) < 11 ) {
		$err_msg = 'Your phone Number must not be less than 11';
	}
	else if (strlen($phone) > 11) {
	   	$err_msg = 'Your phone Number must not be greater than 11';
	}
	else{
	   	if ($phone[0] == 0) {
	   		$phone = '+234'.substr($phone, 1);
	   		$api_url = "https://platform.clickatell.com/messages/http/send?apiKey=".$api_key."&to=".$phone."&content=".$msg."";
	   	}else{
	   		$phone = '+234'.substr($phone, 1);
			$api_url = "https://platform.clickatell.com/messages/http/send?apiKey=".$api_key."&to=".$phone."&content=".$msg."";
		}
    	$send_sms = file_get_contents($api_url);
    	if ($send_sms) {
    		$array = json_decode($send_sms, true);
    		if ($array['messages'][0]['accepted'] == 1) {
    			return true;
    		}
	    	else{
	    		return false;
	    	}
	    }else{
            $err_msg = 'An unexpected error occur, try again later';
        }
	}
    $_SESSION['err_msg'] = $err_msg;
}

function email_exists($email, $conn){
	$query = "SELECT * FROM `users` WHERE `email` = '$email'";
	if ($query_run = mysqli_query($conn, $query)) {
	    $num_row = mysqli_num_rows($query_run);
	    if ($num_row < 1) {
	  	    return false;;
	    }else{
	        return true;
	    }
	}
}
function send_mail($reciepient, $subject, $msg){
    if (mail($reciepient, $subject, $msg)) {
	    return true;
    }else{
	    return false;
    }
}
function echo_if_exists($name){
	if (isset($_SESSION[$name])) {
		$value = $_SESSION[$name];
	}else{
		$value = '';
	}
	unset($_SESSION[$name]);
	return $value;
}
function checked($name, $value){
	if (isset($_SESSION[$name]) && $_SESSION[$name]== $value){
		echo 'checked';
	}
	unset($_SESSION[$name]);
}
function upload_file($name, $uploadDirectory){
    $currentDir = getcwd();

    $up_err_msg[] = []; // Store all foreseen and unforseen err_msg[] here


    $fileName = $_FILES[$name]['name'];
    $fileSize = $_FILES[$name]['size'];
    $fileTmpName  = $_FILES[$name]['tmp_name'];
    $fileType = $_FILES[$name]['type'];

    if ($name == 'deg_cert') {
        $fileExtensions = ['doc', 'docx', 'pdf']; // Get all the file extensions
        $msg =  "This file extension is not allowed for Degree certificates. Please upload a PDF, DOC or DOCX file.";
        $_SESSION['filename'] = $fileName;
    }
    elseif ($name == 'nysc_cert') {
        $fileExtensions = ['doc', 'docx', 'pdf']; // Get all the file extensions
        $msg =  "This file extension is not allowed for NYSC certificates. Please upload a PDF, DOC or DOCX file.";
        $_SESSION['filename'] = $fileName;
        
    }elseif ($name == 'pass_p'){
    	$fileExtensions = ['jpeg', 'jpg', 'png']; // Get all the file extensions
    	$msg=  "This file extension is not allowed for passport. Please upload a JPEG or PNG file.";
        $_SESSION['filename'] = $fileName;
    }

    $uploadPath = $uploadDirectory. basename($fileName);
    $value = explode(".", $fileName);
    $fileExtension = strtolower(end($value));
    //  = strtolower(end(explode('.',$fileName)));


    if ($fileSize > 2000000) {
        $msg =  "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";

    }
    if (! in_array($fileExtension,$fileExtensions)) {
        $err_msg[] = $msg;
    }


    if (empty($err_msg)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            return true;
        } else {
            return false;
        }
    } 
    $_SESSION['err_msg'] = $err_msg;
}
function active($current_pg, $filename){
    $file = explode('/', $current_pg);

    if ($file[2] == $filename) {
        return 'active';
    }
    // $_SESSION['test'] = $file;
}
?>