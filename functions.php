<?php 


class allclass
{
	
  public $conn;

function __construct() {
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doc";

// Create connection
return $this->conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($this->conn->connect_error) {
die("Connection failed: " . $this->conn->connect_error);
} 


}


// my functions 

// create user page


function createuser($email,$pass,$fname,$lname,$dob,$gender,$dates){

$email = $this->conn->real_escape_string($this->check(htmlspecialchars($email)));
$pass = $this->conn->real_escape_string($this->check(htmlspecialchars($pass)));
$fname = $this->conn->real_escape_string($this->check(htmlspecialchars($fname)));
$lname = $this->conn->real_escape_string($this->check(htmlspecialchars($lname)));
$dob = $this->conn->real_escape_string($this->check(htmlspecialchars($dob)));
$gender = $this->conn->real_escape_string($this->check(htmlspecialchars($gender)));

$sql = "INSERT INTO createuser (email, pass, fname, lname, dob, gender, dates)
VALUES ('$email', '$pass', '$fname', '$lname', '$dob', '$gender', '$dates')";

if ($this->conn->query($sql) === TRUE) {
  return true;
} else {
  return false;
}

}


// join page

function joined($fname, $lname, $specialist, $phone, $zip, $email, $pname,$npi,$dates){

$fname = $this->conn->real_escape_string($this->check(htmlspecialchars($fname)));
$lname = $this->conn->real_escape_string($this->check(htmlspecialchars($lname)));
$specialist = $this->conn->real_escape_string($this->check(htmlspecialchars($specialist)));
$phone = $this->conn->real_escape_string($this->check(htmlspecialchars($phone)));
$zip = $this->conn->real_escape_string($this->check(htmlspecialchars($zip)));
$email = $this->conn->real_escape_string($this->check(htmlspecialchars($email)));
$pname = $this->conn->real_escape_string($this->check(htmlspecialchars($pname)));
$npi = $this->conn->real_escape_string($this->check(htmlspecialchars($npi)));
	
$sql = "INSERT INTO joined (fname, lname, specialist, phone, zip, email, pname, nip, dates)
VALUES ('$fname', '$lname', '$specialist', '$phone', '$zip', '$email', '$pname','$npi', '$dates')";

if ($this->conn->query($sql) === TRUE) {
  return true;
} else {
  return false;
}

}

// user login page

function login($email,$pass){

	$email = $this->conn->real_escape_string($this->check(htmlspecialchars($email)));
	$pass = $this->conn->real_escape_string($this->check(htmlspecialchars($pass)));


	$sql = "SELECT * FROM createuser WHERE email='$email' AND pass='$pass'";
$result = $this->conn->query($sql);

if ($result->num_rows > 0) {
 echo "login success";
 // session create
 $_SESSION["patient"] = $email;
 header('location:dashboard');
} else {
  echo '
  	<div class="alert alert-danger" role="alert">
        Login Failed!
    </div>

  ';
}
}


// admin-login page

function admin($email,$pass){

	$email = $this->conn->real_escape_string($this->check(htmlspecialchars($email)));
	$pass = $this->conn->real_escape_string($this->check(htmlspecialchars($pass)));

		$sql = "SELECT * FROM admin WHERE email='$email' AND pass='$pass'";
		$result = $this->conn->query($sql);

		if ($result->num_rows > 0) {
		 echo "login success";
		 // session create
		 $_SESSION["admin"] = $email;
		 header('location: admin');
		} else {
		  echo "login failed";
		}
}





// doctor register

function docReg($fname,$lname,$email,$pass,$gender,$specialist,$language,$office,$education,$practice,$training,$affiliation,$organization,$npi,$dates){

	$fname = $this->conn->real_escape_string($this->check(htmlspecialchars($fname)));
	$lname = $this->conn->real_escape_string($this->check(htmlspecialchars($lname)));
	$email = $this->conn->real_escape_string($this->check(htmlspecialchars($email)));
	$pass = $this->conn->real_escape_string($this->check(htmlspecialchars($pass)));
	$gender = $this->conn->real_escape_string($this->check(htmlspecialchars($gender)));
	$specialist = $this->conn->real_escape_string($this->check(htmlspecialchars($specialist)));
	$language = $this->conn->real_escape_string($this->check(htmlspecialchars($language)));
	$office = $this->conn->real_escape_string($this->check(htmlspecialchars($office)));
	$education = $this->conn->real_escape_string($this->check(htmlspecialchars($education)));
	$practice = $this->conn->real_escape_string($this->check(htmlspecialchars($practice)));
	$training = $this->conn->real_escape_string($this->check(htmlspecialchars($training)));
	$affiliation = $this->conn->real_escape_string($this->check(htmlspecialchars($affiliation)));
	$organization = $this->conn->real_escape_string($this->check(htmlspecialchars($organization)));
	$npinpi = $this->conn->real_escape_string($this->check(htmlspecialchars($npi)));

	$sql = "INSERT INTO doctor (fname, lname, email, pass,gender,specialist,language,office,education,practice,training,affiliation,organization,npi,dates)
VALUES ('$fname', '$lname', '$email','$pass','$gender','$specialist','$language','$office','$education','$practice','$training','$affiliation','$organization','$npi','$dates')";

if ($this->conn->query($sql) === TRUE) {
  return true;
} else {
  return false;
}
}



// doctor login page

function doctorLogin($email,$pass){

	$email = $this->conn->real_escape_string($this->check(htmlspecialchars($email)));
	$pass = $this->conn->real_escape_string($this->check(htmlspecialchars($pass)));


	$sql = "SELECT * FROM doctor WHERE email='$email' AND pass='$pass'";
$result = $this->conn->query($sql);

if ($result->num_rows > 0) {
 echo "login success";
 // session create
 $_SESSION["doctor"] = $email;
 header('location:doctor-dashboard');
} else {
  echo '
  	<div class="alert alert-danger" role="alert">
        Login Failed!
    </div>

  ';
}
}












function check($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
























}