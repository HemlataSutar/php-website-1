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
$message = $_POST['subject'];

//For inserting the values to mysql database 
$sql_query = "INSERT INTO contactus (first_name,last_name,email,message)
VALUES ('$first_name','$last_name','$email','$message')";
if (mysqli_query($conn, $sql_query))
{
    echo '<script type="text/javascript">
	window.onload = function () { alert("thank you for your valuable feedback"); } 
</script>';
// "Your response is inserted successfully !";
}
else
     {
		echo "Error: " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<html><head><title>Contact Us</title>
<link rel="stylesheet" href="css/contactus.css">
</head>
<body>
<!-- <h2>BOOKING HERE</h2><br> -->
<div class="container">
<div class="title">
<div class="text-center"><h2> CONTACT US </h2></div>
<form id="contactus" method="post" name="contactus" class="contactus" action="./contactus.php">
<table>
      <tr>
        <td><p><label for="fname">First Name</label></p></td>
        <td><input type="text" id="fname" name="first_name" placeholder="Your first name.."><br></td>
      </tr>
	   <tr>
        <td><p><label for="lname">Last Name</label></p></td>
        <td><input type="text" id="lname" name="last_name" placeholder="Your last name.."><br></td>
      </tr>
      <tr>
        <td><p><label for="email">Mail Id</label> </p></td>
        <td><input type="email" id="email" name="email" placeholder="Your mail id.."><br></td>
      </tr>
      <tr>
        <td><p><label for="country">Country</label> </p></td>
        <td>
        <select id="country" name="country">
            <option value="Select country">Select Country</option>
            <option value="australia">Australia</option>    
            <option value="canada">Canada</option>    
            <option value="usa">USA</option>    
            <option value="russia">Russia</option>    
            <option value="japan">Japan</option>    
            <option value="india">India</option>    
            <option value="china">China</option> 
          </select><br><br>
        </td>
      </tr>
		    <td>
           <p><label for="feed_back">Message</label></p></td>
        <td><textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea></td>
	    <tr>
          <td><input type="checkbox" id="check" name="save"><span id="check"> I agree with my statements.</span><br></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" class="row" id="sub" value="Submit" /></td>
      </tr>
    </table>
</form>
</div>
</body>
</html>

