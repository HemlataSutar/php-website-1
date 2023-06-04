<?php
if(isset($_COOKIE['email_signed_in'])) {
    echo "<h1>" . $_COOKIE['email_signed_in'] . " has signed in </h1>";
}
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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$number = $_POST['number'];
$Gender = $_POST['Gender'];

//For inserting the values to mysql database 
$sql_query = "INSERT INTO users (first_name,last_name,email,password,address,number,gender)
VALUES ('$first_name','$last_name','$email','$password','$address','$number','$Gender')";
if (mysqli_query($conn, $sql_query))
{
    echo '<script type="text/javascript">
	window.onload = function () { alert(" Welcome "); } 
</script>';
header('location: /login.php');
// "New Details Entry inserted successfully !";
}
else
     {
		echo "Error: " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<html><head><title>sign up</title>
<link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div class="signup">
<form id="signup" method="post" action="./signup.php">
<h2>SIGN UP</h2>
<p>First Name</p>
<input required type="text" name="first_name" id="fn" placeholder="Enter your name here"><br><br>
<p>Last Name</p>
<input required type="text" name="last_name" id="ln" placeholder="Enter your last name here"><br><br>
<p>Email ID</P>
<input required type="email" name="email" id="em" placeholder="Enter your email id here"><br><br>
<p>Password</P>
<input required type="password" name="password" id="ps" placeholder="Enter your password here"><br><br>
<p>Location</P>
<input required type="text" name="address" id="ad" placeholder="Enter your location here"><br><br>
<p>Mobile number</p>
<select id="num">
<option>+ 91</option>
<option>+ 92</option>
<option>+ 93</option>
<option>+ 94</option>
<option>+ 95</option>
</select>
<input required type="text" name="number" id="number" placeholder="Enter your mobile number here"><br><br>
<p>Gender</P>
<input required type="radio" id="ma" name="Gender" value="Male"><span id="ma">&nbsp; Male</span>&nbsp
<input required type="radio" id="fe" name="Gender" value="Female"><span id="fe">&nbsp; Female</span><br><br>
<input type="checkbox" id="check" name="save"><span id="check"> I agree all the terms and conditions.</span><br><br>
<button type="submit" id="sub"> Submit </button>
</form>
</div>
</body>
</html>

