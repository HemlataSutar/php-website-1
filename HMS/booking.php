<?php
if(!isset($_COOKIE['email_signed_in'])) {
    header('location: /login.php');
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
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$person = $_POST['person'];
$rooms = $_POST['rooms'];
$email = $_COOKIE['email_signed_in'];

//For inserting the values to mysql database 
$sql_query = "INSERT INTO booking (check_in,check_out,person,room,email)
VALUES ('$check_in','$check_out','$person','$rooms','$email')";
if (mysqli_query($conn, $sql_query)) 
{
    echo '<script type="text/javascript">
	window.onload = function () { alert(" Welcome "); } 
</script>';
header('location: /');
// "New Details Entry inserted successfully !";
}
else
     {
		echo "Error: " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<html><head><title>booking</title>
<link rel="stylesheet" href="css/booking.css">
</head>
<body>
<!-- <h2>BOOKING HERE</h2><br> -->
<div class="container">
<div class="title"><h2> BOOKING HERE </h2></div>
<form id="booking" method="post" name="registration" class="registartion-form" action="./booking.php">
<table>
	   <tr>
        <td><p><label for="check_in">Check In:</label></p></td>
        <td><input required type="date" name="check_in" id="fn" placeholder="Enter your arrival date here"><br></td>
      </tr>
      <tr>
        <td><p><label for="check_out">Check Out:</label></p></td>
        <td><input required type="date" name="check_out" id="em" placeholder="Enter your departure date here"><br></td>
      </tr>
      <tr>
        <td><p><label for="person">Person:</label></p></td>
        <td><input required type="number" min="1" name="person" id="ad" placeholder="Enter total person here"><br></td>
      </tr>
      <tr>
        <td><p><label for="Room">Rooms</label></p></td>
        <td>
          <select name="rooms" id="rooms">
            <option value="Select room type">Select Room type</option>
            <option value="Single_Room">Single Room</option>
            <option value="Double_Room">Double Room</option>
            <option value="Luzury_Room">Luzury Room</option>
            <option value="Buisness_Room">Buisness Room</option>
          </select><br><br>
        </td>
      </tr>
		<td>
			<input type="checkbox" id="check" name="save"><span id="check"> I agree all the terms and conditions.<br></span><br>
		</td>
	  <tr>
        <td colspan="2"><input type="submit" class="submit" id="sub" value="Register" /></td>
      </tr>
    </table>
</form>
</div>
</body>
</html>

