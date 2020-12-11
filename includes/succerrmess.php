<?php
if (isset($_GET['error'])){
	if ($_GET['error'] == "emptyfields"){
		echo '<p style="fontsize:10px; color:#E1C2B7; padding:0px;">Fill in all the fields!</p>';
	}
	elseif ($_GET['error'] == "invalidemail"){
		echo '<p style="fontsize:10px; color:#E1C2B7; padding:0px;">Email input is invalid!</p>';
	}
	elseif ($_GET['error'] == "invalidname"){
		echo '<p style="fontsize:10px; color:#E1C2B7; padding:0px;">Name input is invalid!</p>';
	}
	elseif ($_GET['error'] == "passnotmatch"){
		echo '<p style="fontsize:10px; color:#E1C2B7; padding:0px;">The psswords do not match!</p>';
	}
	elseif ($_GET['error'] == "emailtaken"){
		echo '<p style="fontsize:10px; color:#E1C2B7; padding:0px;">Email account already exists!</p>';
	}
	elseif ($_GET['error'] == "wrongpassword"){
		echo '<p style="fontsize:10px; color:#E1C2B7; padding:0px;">Wrong password!</p>';
	}
}