<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
} 

// LOGIN USER
// if (isset($_POST['login_user'])) {
 // $username = mysqli_real_escape_string($db, $_POST['username']);
  //$password = mysqli_real_escape_string($db, $_POST['password']);

  //if (empty($username)) {
   // array_push($errors, "Username is required");
  //}
  //if (empty($password)) {
    //array_push($errors, "Password is required");
  //}

  //if (count($errors) == 0) {
    //$password = md5($password);
    //$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    //$results = mysqli_query($db, $query);
    //if (mysqli_num_rows($results) == 1) {
      //$_SESSION['username'] = $username;
      //$_SESSION['success'] = "You are now logged in";
      //header('location: index.php');
    //}else {
      //array_push($errors, "Wrong username/password combination");
    //}
  //}
//}

if (isset($_POST['login_user'])){
$connect=mysqli_connect('localhost','root','') or die(mysqli_error($connect));
mysqli_select_db($connect,'registration');
$pwd=$_POST['password'];
$username=$_POST['username'];
$query="SELECT * FROM users WHERE username like '$username' ";
$res=mysqli_query($connect,$query);
if (mysqli_num_rows($res) ==1){
	// session_start();
	$user=mysqli_fetch_array($res);
	$mdp=$user['password'];
	if (md5($pwd)==$mdp){
      header('location: index11.php?successLOGIN');

	}else {
			array_push($errors, "Wrong password");

	}

}else{
	$sql_username="SELECT * FROM users where username like '$username'";
	$res_username=mysqli_query($connect, $sql_username);
	$count_username=mysqli_num_rows( $res_username);
	$sql_password="SELECT * FROM users where username='$username' ";
	$res_pass=mysqli_query($connect, $sql_password);
	$p=mysqli_fetch_array($res_pass);
	if($count_username==0){
		//	header('location: index.php?NOTfound');
			array_push($errors, "Wrong username");

	}else if($count_username==1){
		if(md5($pwd)!=$p[0]){
		//	header('location: index.php?ERROR_PSW');
			array_push($errors, "Wrong password");

		}
	}else{
		//	header('location: index.php?NOTfount');
			array_push($errors, "Wrong username");
		}

}
}


?>
