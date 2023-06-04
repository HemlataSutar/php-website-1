<?php
if(isset($_COOKIE['email_signed_in'])) {
    setcookie('email_signed_in', "", time() - 36000);
    // echo "<h1> Signed out :) </h1>";
    header('location: /');
} 
else {
    header('location: /login.php');
}
?>