<?php include 'header2.php'; 

    if (isset($_POST['join'])) {
                                                   
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        $specialist = $_POST['specialist'];
        $language = $_POST['language'];
        $office = $_POST['office'];
        $education = $_POST['education'];
        $practice = $_POST['practice'];
        $training = $_POST['training'];
        $affiliation = $_POST['affiliation'];
        $organization = $_POST['organizations'];
        $npi = $_POST['npi'];
        date_default_timezone_set("Asia/Dhaka");
        $dates = date("d-m-Y");

       $status = $all_class->docReg($fname,$lname,$email,$pass,$gender,$specialist,$language,$office,$education,$practice,$training,$affiliation,$organization,$npi,$dates);


       if ($status !== false) {
    echo'<div class="alert alert-success" role="alert">
        Account Create Successful!
    </div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
        Failed to Create Account!
    </div>
    ';
}

    }









?>



<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto">
                <div class="doc-form">
                    <form method="post">
                        <h2 class="text-center pb-3">Sign Up As A Doctor</h2>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="First Name" name="fname">
                            <input type="text" class="form-control" placeholder="Last Name" name="lname">
                        </div>
                    	<input type="email" name="email" class="form-control mt-3" placeholder="Email">
                    	<div class="form-check">
                        <input type="password" name="pass" class="form-control mt-3" placeholder="Password">
                        <div class="form-check">
                    		<h6 class="pt-2">Gender</h6>
  							<input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
  							<label class="form-check-label" for="gender">
   	 						Male
  							</label>
						</div>
						<div class="form-check pb-3">
							<input class="form-check-input" type="radio" name="gender" id="gender2" value="Female">
  							<label class="form-check-label" for="gender2">
    						Female
  							</label>
						</div>
                        <select class="form-select" name="specialist">
                            <option selected disabled>Medical Specialist</option>
                            <option value="Primary Care">Primary Care</option>
                            <option value="Dentist">Dentist</option>
                            <option value="OBGYN">OBGYN</option>
                            <option value="Dermatology">Dermatology</option>
                            <option value="Psychiatrist">Psychiatrist</option>
                            <option value="Mental Health Therapist">Mental Health Therapist</option>
                            <option value="Eye Doctor">Eye Doctor</option>
                            <option value="Holistic Professionals">Holistic Professionals</option>
                        </select>
                        <input type="text" name="language" class="form-control mt-3" placeholder="Languages Spoken">
                        <input type="text" name="office" class="form-control mt-3" placeholder="Office Location">
                        <input type="text" name="education" class="form-control mt-3" placeholder="Education">
                        <input type="text" name="practice" class="form-control mt-3" placeholder="Practice name">
                        <input type="text" name="training" class="form-control mt-3" placeholder="Traning">
                        <input type="text" name="affiliation" class="form-control mt-3" placeholder="Hospital Affiliations">
                        <input type="text" name="organizations" class="form-control mt-3" placeholder="Race and ethnicity organizations">
                        <input type="text" name="npi" class="form-control mt-3" placeholder="NPI number">
                        <input type="submit" value="JOIN" class="form-control mt-3 btn btn-warning" name="join">
                    </form>
                </div>
            </div>
		</div>
	</div>
</section>

<?php include 'footer.php' ?>