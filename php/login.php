
<?php

print_r ($_REQUEST);

// session_start();

require_once "connection.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$user_email_login = $_REQUEST['user_email_login'];
	$user_email = mysqli_real_escape_string($conn, $user_email_login);
	$user_password_login = $_REQUEST['user_password_login'];
	$user_password = mysqli_real_escape_string($conn, $user_password_login);



	$sql = "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '". md5($user_password)  ."' ";
	$result = mysqli_query($conn, $sql) or die(mysql_error());
	$rows = mysqli_num_rows($result);

    if ($rows == 1) {
		echo "Inside If";
		$data = [ 'status' => 'success', 'message' => "Email Already Register!" ];
        // $_SESSION["login"] = "All Done";

	} else {
		echo "Inside Else";
        $data = [ 'status' => 'error', 'message' => "Error! Mail or Pass Was Incorrect" ];
	}
	
	header('Content-type: application/json');
	echo json_encode( $data );
}


?>
