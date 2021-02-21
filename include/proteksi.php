<?php 

class Proteksi{

	public function logged_in () {
		return(isset($_SESSION['id_user'])) ? true : false;
	}

	public function logged_in_protect() {
		if ($this->logged_in() === true) {
			header('Location:index.php');
			exit();		
		}
	}
	 
	public function logged_out_protect() {
		if ($this->logged_in() === false) {
			header('Location:login.php?please');
			exit();
		}	
	}
}