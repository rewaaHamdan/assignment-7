<!DOCTYPE html>
<html>
<head>
	<title>sign-up </title>
    <style>
 h1,form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: 0 auto;
  background : #f5f5f5;
}

fieldset{
    border: 2px solid #000000;
    border-radius : 5px;
    padding: 10px;
    margin-bottom : 20px ;
}


label {
  margin-top: 5px;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
 {
  padding: 8px;
  width: 100%;
  border: 1px solid #fff;
  border-radius: 5px;
}

input[type="checkbox"] {
  margin-left: 10px;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 5px;
}

button[type="submit"]:hover {
  background-color: green;
}
        </style>
</head>
<body>
	<h1>Sign Up</h1>
    
	<form  method="post" enctype="multipart/form-data">
    <fieldset>
      
		<label for="name">Name  :</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="email">Email  :</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>

		<label for="gender">Gender:</label>
		<input type="radio" id="male" name="gender" value="male" required>
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br><br>

		<label for="image">Image (max 1MB):</label>
		<input type="file" id="image" name="image" accept="image/*" required><br><br>

		<input type="checkbox" id="remember" name="remember" value="1">
		<label for="remember">Remember Me</label><br><br>

		<button type="submit" >Sign Up</button>
</fieldset>
	</form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$remember = isset($_POST['remember']) ? true : false;

	$hash = password_hash($password, PASSWORD_DEFAULT);

	$host = "localhost";
	$username="root";
	$pass="";
	$dbname="web2";
	

	$conn = new mysqli($host,$username,$pass,$dbname);

	if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
	}else{
		echo "connected successsfully"."<br>";
	} 


    $stmt = $conn->prepare("INSERT INTO users (name, email, password, gender) VALUES (?, ?, ?, ?)");
	 $stmt->bind_param("ssssi", $name, $email, $hash, $gender,$remember);

	  if ($stmt->execute()) {
		 echo "New record was inserted"."<br>"; 
		} else {
			 echo "Error: " . $sql . $conn->error; }

			  $stmt->close();
			   $conn->close();

	

	if (empty($name)) {
		echo "Please enter your name";
		exit;
	}

	
	if (empty($email)) {
		echo "Please enter your email";
		exit;
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format";
		exit;
	}

	
	if (empty($password)) {
		echo "Please enter a password";
		exit;
	} else if (strlen($password) < 8) {
		echo "Password must be at least 8 characters long";
		exit;
	}

	
	if (empty($gender)) {
		echo "Please select your gender";
		exit;
	}

	
	if ($_FILES['image']['size'] > 1000000) {
		echo "Image size must be less than 1MB";
		exit;
	}

	
	$image_name = $_FILES['image']['name'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$image_size = $_FILES['image']['size'];
	$image_folder = 'images/';

	move_uploaded_file($image_tmp_name, $image_folder . $image_name);

	
	echo "Thank you for signing up!";
}
?>