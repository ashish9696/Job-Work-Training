<?php 
$myObj = new \stdClass();
if(isset($_POST['sign_up'])){
			
			$myObj->name = $_POST['u_name'];
			$myObj->pass = $_POST['u_pass'];
			$myObj->email = $_POST['u_email'];
			$myObj->country = $_POST['u_country'];
			$myObj->gender = $_POST['u_gender'];
			$myObj->b_day = $_POST['u_birthday'];
			$myObj->status = "unverified";
			$myObj->posts = "No";
			
			$str = file_get_contents('logins.json',TRUE); // Save contents of file into a variable


            $myJSON = json_decode($str, true); // decode the data and set it to recieve data asynchronosly - store in $json
			$myJSON[] = $myObj;
			file_put_contents('logins.json', json_encode($myJSON));
			echo "<script>alert('Addition Successful!')</script>";			
			
			
			
		}
?>

