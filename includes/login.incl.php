<?php

  if(isset($_POST['submit'])){
  	require 'databaseconn.php';

  	$userEmail = $_POST['email'];
  	$userPassword = $_POST['password'];

  	if (empty($userEmail) || empty($userPassword)){
  		header("Location: ../login.php?error=emptyfields");
  		exit();
  	}

  	else{
  		$sql = "SELECT * FROM users WHERE userEmail=?;";
  		$stmt = mysqli_stmt_init($conn);
  		if(!mysqli_stmt_prepare($stmt, $sql)){
  			header("Location: ../login.php?error=sqlerror");
  			exit();
  		}else{
  			mysqli_stmt_bind_param($stmt, "s", $userEmail);
  			mysqli_stmt_execute($stmt);
  			$result = mysqli_stmt_get_result($stmt);
  			if($row= mysqli_fetch_assoc($result)){
  				$pascheck = password_verify($userPassword, $row['userPwd']);
  				if($pascheck == false){
  					header("Location: ../login.php?error=wrongpassword");
  					exit();
  				}elseif($pascheck == true){
  					session_start();
  					$_SESSION['userId'] = $row['userId'];
  					$_SESSION['userName'] = $row['userName'];
  					$_SESSION['userEmail'] = $row['userEmail'];

  					header("Location: ../moreinfo.php");
  					exit();
  				}
  			}else{
  				header("Location: ../login.php?error=nouser");
  				exit();
  			}
  		}
  	}

  }else{
  	header("Location: ../login.php");
	exit();
  }
