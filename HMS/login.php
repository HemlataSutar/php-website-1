<?php
ini_set('display_errors', 0);
// if(isset($_POST)) {
//         $_POST = array();
//     header('location: ' . $_SERVER['PHP_SELF']);
//     die();
// }
$servername="localhost";
$username="root";
$password="";
$database_name="dragonhousedb";
$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['save']))
{
$email = $_POST['email'] or "";
$password = $_POST['password'] or "";

$something_went_wrong = true;

//For inserting the values to mysql database 
// var_dump($password);
$sql_query = "select * from users where email = '$email'";
$res = mysqli_query($conn, $sql_query);
if ($res)
{ 
    if( $res->num_rows == 0) {
        echo "<h1> wrong email </h1>"; 
        $something_went_wrong = true;
    // return;
}else {
    $row = $res->fetch_assoc();
    if($row['password'] != $password) {
        echo "<h1> wrong password </h1>";
        $something_went_wrong = true;
    }
    $something_went_wrong=false;
}
    
   
// "New Details Entry inserted successfully !";
}
else
     {
		echo "Error: " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
if(!$something_went_wrong) {
    setcookie("email_signed_in", $email, time() + (86400 * 30), "/"); // 86400 * 30 = 1 month
    // header('location: /');
    // $url = "./booking.php";
}


?>
<html><head><title>login form</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="form-area">
<center><h3>LOGIN HERE </h3><br></center>
<form id="login" method="post" action="./login.php">
<p>Email</p>
<input type="text" name="email" id="" placeholder="Enter your email id">
<p> Password </p>
<input type="password" name="password" id="" placeholder="Enter your password"><br><br>
<input type="hidden" name="save" id="save" value="a">
<input type="submit" value="SUBMIT">
<a id="reg" href="/"> Back</a>

 
</form>

</div>

</body>
</html>
