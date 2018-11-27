<?php
	class SingUp extends CI_Model{


		function setSignUpData($arr){
			$connection = mysqli_connect('localhost','root','','android');
			$username = $arr['uname'];
			$password = $arr['password'];
			$email = $arr['email'];
			$query = "INSERT INTO signup(uname,password,email) VALUES ('$username','$password','$email')";

			//echo $query;

			$query = mysqli_query($connection,$query);

			if($query){
				echo "Recorded successfully";
			}else{
				echo "Something went wrong";
			}
		}

		function setSignInData($arr){
			$connection = mysqli_connect('localhost','root','','android');
			$username = $arr['uname'];
			$password = $arr['password'];
			$email = $arr['email'];
			$query = "SELECT * FROM signup WHERE uname = '$username' AND password = '$password'";

			echo "errr";

			$query = mysqli_query($connection,$query);

			if(mysqli_num_rows($query)>0){
				return "true";
			}else{
				return "false";
			}
		}
	}
?>