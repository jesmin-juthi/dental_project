<?php include 'header2.php' ?>

<?php

if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['mm'].'-'.$_POST['dd'].'-'.$_POST['yyyy'];
    $gender = $_POST['gender'];
    date_default_timezone_set("Asia/Dhaka");
    $dates = date("d-m-Y");


$status = $all_class->createuser($email,$pass,$fname,$lname,$dob,$gender,$dates);


if ($status !== false) {
    echo'<div class="alert alert-success" role="alert">
  Account Create Successful!
</div>';
}else{
    echo'<div class="alert alert-danger" role="alert">
        Failed to Create Account!
</div>';
}



}

?>

    <section class="form-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="form-content">
                        <h1>Create an account</h1>
                        <a href="#">Already have one? Log in.</a>
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Enter your email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="confirmemail" class="form-label">Confirm your email</label>
                                <input type="email" class="form-control" id="confirmemail" name="cemail" aria-describedby="confirmemail">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Create a password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="At least 8 characters long" name="pass">
                            </div>
                            <span></span>
                            <div class="rules">
                                <h6>Password rules</h6>
                                <ul>
                                    <li>Has at least 8 characters</li>
                                    <li>Has letters, numbers, and special characters</li>
                                    <li>Has no white space characters</li>
                                    <li>Has not been used before</li>
                                </ul>
                            </div>
                            <label for="name" class="form-label">Your Name</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="First" aria-label="first" name="fname">
                                <input type="text" class="form-control" placeholder="Last" aria-label="last" name="lname">
                            </div>
                            <label for="dates" class="form-label">Date of birth</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="MM" aria-label="mm" name="mm">
                                <input type="text" class="form-control" placeholder="DD" aria-label="dd" name="dd">
                                <input type="text" class="form-control" placeholder="YYYY" aria-label="yyyy" name="yyyy">
                            </div>
                            <label for="gender" class="form-label">Sex</label>
                            <div class="input-group mb-3">
                                <label for="Male">Male</label>
                                <input type="radio" class="" aria-label="gender" name="gender" id="Male" value="Male">
                                <label for="Female">Female</label>
                                <input type="radio" class="" aria-label="dd" name="gender" id="Female" value="Female">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="read" name="terms">
                                <label class="form-check-label" for="read">I have read and accept Zocdoc's <a href="">Terms of Use</a> and <a href="">Privacy Policy.</a></label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="HIPAA" name="hippa">
                                <label class="form-check-label" for="HIPAA">I have read and accept Zocdoc's <a href=""> HIPAA Authorization.</a></label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="logged" name="logged">
                                <label class="form-check-label" for="logged">Keep me logged in</label>
                            </div>
                            <input type="submit" class="btn btn-warning form-control" value="Save and continue" name="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php include 'footer.php' ?>