<?php
	include("include/include.php");
	include("include/indo.php");
	if(isset($_POST['token'])){
		$token = decr($_POST['token'], "123123");
		if($token=='seaLogin'){
			if(isset($_POST['username']) && isset($_POST['password'])){
				$un = $_POST['username'];
				$pas = $_POST['password'];
				$q=$db->prepare("select * from tblmemberlogin where memberID='$un' and password='$pas'");
				$q->execute();
				$r = $q->rowCount();
				if($r < 1){
					echo "Login Failed, Please check mobile / Password";
				}else{
					$d = $q->fetch();
					$status = $d['memberstatus'];
					if($status == '0'){
						$_SESSION['loginMember']=$d['memberlogin_id'];
						$_SESSION['memberID']=$d['memberID'];
						$_SESSION['memberrole']=$d['memberrole'];
						echo '0';
					}else{
						echo "Your login is Not Active, Contact Administrator";
					}
				}
			}else{
				echo "Please fill username and password input!";
			}
		}else{
			echo "Token invalid, please try again one minutes";
		}
	}else{
		echo "Sorry, Token invalid";
	}
?>