<?php include "db.php";

function msgBox($message) {
	echo "<script>alert('$message');</script>";
}

function createUser() { 
  if(isset($_POST['register'])) {
    $userName = $_POST['username'];
    $email = $_POST['emails'];
    $userPassword = md5($_POST['password']);

    // $userName = mysqli_real_escape_string($connection, $userName);
    // $userPassword = mysqli_real_escape_string($connection, $userPassword);
    global $connection;

    $query = "INSERT INTO users(username, emails, password)";
    $query .= "VALUES ('$userName', '$email', '$userPassword')";
    $result = mysqli_query($connection, $query);

    if(!$result) {
      die("Query failed..");
    } else {    	
    	echo "<script>alert('Successfully');</script>";
      echo "<script>document.location.href = 'login.php';</script>";
    }
  }
}

function loginUser() {
	if(isset($_POST['login'])) {
		global $connection;
		$userName = $_POST['username'];
		$userPassword = md5($_POST['password']);
		if(is_null($userName) && is_null($userPassword)) {
			msgBox("Bạn cần nhập đầy đủ thông tin.");
		}

		$query = "SELECT * FROM users WHERE username = '$userName' AND password = '$userPassword'";
		$result = mysqli_query($connection, $query);
      
    $count = mysqli_num_rows($result);

    if($count == 1) {
      msgBox("Đăng nhập thành công.");
      header('Location: index.php');
		} else {
			msgBox("Đăng nhập thất bại.");
		}
	}
}



?>
