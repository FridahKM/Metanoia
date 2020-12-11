<?php

  if(isset($_POST['submit'])){
  	require 'databaseconn.php';

  	$userName = $_POST['fname'];
  	$userEmail = $_POST['email'];
  	$userPassword = $_POST['password'];
  	$passwordRepeat = $_POST['confirm'];

  	if (empty($userName) || empty($userEmail) || empty($userPassword) || empty($passwordRepeat)){
  		header("Location: ../signup.php?error=emptyfields");
  		exit();
  	}

  	else if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
  		header("Location: ../signup.php?error=invalidemail");
  		exit();
  	}

  	else if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
  		header("Location: ../signup.php?error=invalidname");
  		exit();
  	}

  	else if ($userPassword !== $passwordRepeat){
  		header("Location: ../signup.php?error=passnotmatch");
  		exit();
  	}

  	else {
  		$sql = "SELECT userEmail FROM users WHERE userEmail=?";
  		$stmt = mysqli_stmt_init($conn);
  		
      if(!mysqli_stmt_prepare($stmt, $sql)){
  			header("Location: ../signup.php?error=sqlerror");
  			exit();
  		}else{
  			mysqli_stmt_bind_param($stmt, "s", $userEmail);
  			mysqli_stmt_execute($stmt);
  			mysqli_stmt_store_result($stmt);
        $result = mysqli_stmt_num_rows($stmt);
  			
        if($result > 0){
  				header("Location: ../signup.php?error=emailtaken");
          exit();
  		  }else{
  				$sql = "INSERT INTO users (userName, userEmail, userPwd) VALUES (?, ?, ?);";
  				$stmt = mysqli_stmt_init($conn);
  				
          if(!mysqli_stmt_prepare($stmt, $sql)){
		  			header("Location: ../signup.php?error=sqlerror");
		   			exit();
		  		}
		  		else {
		  			$hashpass = password_hash($userPassword, PASSWORD_DEFAULT);

		  			mysqli_stmt_bind_param($stmt, "sss", $userName, $userEmail, $hashpass);
		  			mysqli_stmt_execute($stmt);
		  			header("Location: ../moreinfo.php");
		  			exit();
				  }
  			}
  		}
  	}
  	mysqli_stmt_close($stmt);
  	mysqli_close($conn);
  }

  else{
  	header("Location: ../signup.php");
	exit();
  }