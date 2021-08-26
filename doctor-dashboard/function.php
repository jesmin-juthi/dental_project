<?php 

/**
 * 
 */
class allclass
{
	
  public $conn;
  // public $date;


function __construct() {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admindaboard";

// Create connection
return $this->conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($this->conn->connect_error) {
die("Connection failed: " . $this->conn->connect_error);
} 




}




function adminLogin($email,$pass){

$email = $this->check($email);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo  $emailErr = '<center style="color:red;">Invalid email format</center>';
 return false;
}else{

$email_s = htmlspecialchars($this->check($email));
$pass_hash = base64_encode($pass);



$sql = "SELECT * FROM admin WHERE email='$email_s' AND pass='$pass_hash' ";

$result = $this->conn->query($sql);

if ($result->num_rows > 0) {

session_start();

$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();
$_SESSION['admina'] = $email_s;


header("location: dashboard");


}else{
 return false;

}


}
}





function check($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
















}