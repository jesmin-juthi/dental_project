<?php include 'header2.php' ?>

<?php 


	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$specialist = $_POST['specialist'];
		$phone = $_POST['phone'];
		$zip = $_POST['zip'];
		$email = $_POST['email'];
		$pname = $_POST['pname'];
		$npi = $_POST['npi'];
		date_default_timezone_set("Asia/Dhaka");
    	$dates = date("d-m-Y");
	

 $status = $all_class->joined($fname, $lname, $specialist, $phone, $zip, $email, $pname,$npi,$dates);

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





    <section class="patients pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="patients-content">
                        <h1>Reach more new patients</h1>
                        <p>Zocdoc helps providers reach more new patients for in-person visits, video visits or both.</p>
                        <img src="images/doc.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="patients-form">
                        <form action="" method="post">
                            <h2>Request a free demo</h2>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="First Name" name="fname">
                                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                            </div>
                            <select class="form-select" aria-label="Default select example" name="specialist">
                                <option selected>Primary Specialist</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input type="tel" name="phone" class="form-control mt-3" placeholder="Direct phone number">
                            <input type="text" name="zip" class="form-control mt-3" placeholder="Zip Code">
                            <input type="email" name="email" class="form-control mt-3" placeholder="Email">
                            <input type="text" name="pname" class="form-control mt-3" placeholder="Practice name (optional)">
                            <input type="text" name="npi" class="form-control mt-3" placeholder="NPI number (optional)">
                            <input type="submit" value="Submit" class="form-control mt-3 btn btn-danger" name="submit">
                            <p>Are you a patient? Find care <a href="#">here.</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new providers section start -->
    <section class="providers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="pro-title">What is Zocdoc?</h1>
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <div class="pro-content">
                        <h1>Website and app where patients find new providers</h1>
                        <p>Millions of patients use Zocdoc to find a new provider by selecting their insurance, visit reason and location.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/What_Are_You_Looking_For___29A9R.png" alt="" class="img-fluid rounded">
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <img src="images/What_Are_You_Looking_For___29A9R.png" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="pro-content">
                        <h1>Website and app where patients find new providers</h1>
                        <p>Millions of patients use Zocdoc to find a new provider by selecting their insurance, visit reason and location.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <div class="pro-content">
                        <h1>Website and app where patients find new providers</h1>
                        <p>Millions of patients use Zocdoc to find a new provider by selecting their insurance, visit reason and location.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/What_Are_You_Looking_For___29A9R.png" alt="" class="img-fluid rounded">
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <img src="images/What_Are_You_Looking_For___29A9R.png" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="pro-content">
                        <h1>Website and app where patients find new providers</h1>
                        <p>Millions of patients use Zocdoc to find a new provider by selecting their insurance, visit reason and location.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new providers section end -->
    <!-- providers bottom section start -->
    <section class="providers-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Why providers love Zocdoc</h1>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6">
                    <div class="providers-bottom-card text-center">
                        <img src="images/fill_last_minute_openings___1g9As.svg" alt="" class="img-fluid">
                        <h3>Reach new patients</h3>
                        <p>Millions of patients visit our website and app every month to search for a local provider.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="providers-bottom-card text-center">
                        <img src="images/fill_last_minute_openings___1g9As.svg" alt="" class="img-fluid">
                        <h3>Reach new patients</h3>
                        <p>Millions of patients visit our website and app every month to search for a local provider.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="providers-bottom-card text-center">
                        <img src="images/fill_last_minute_openings___1g9As.svg" alt="" class="img-fluid">
                        <h3>Reach new patients</h3>
                        <p>Millions of patients visit our website and app every month to search for a local provider.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="providers-bottom-card text-center">
                        <img src="images/fill_last_minute_openings___1g9As.svg" alt="" class="img-fluid">
                        <h3>Reach new patients</h3>
                        <p>Millions of patients visit our website and app every month to search for a local provider.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- providers bottom section end -->
    <!-- thrive section start -->
    <section class="thrive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Providers thrive with Zocdoc</h1>
                </div>
            </div>
            <div class="row">
                <div class="row pt-5 mt-3">
                    <div class="col-md-3">
                        <div class="thrive-card text-center">
                            <img src="images/dr_jamie_bassel___3RNDV.svg" alt="" class="img-fluid">
                            <h3>Dr. Jamie Bassel, DC</h3>
                            <h5>Chiropractor</h5>
                            <h5>New York, NY</h5>
                            <p>"It has been the one platform that I can measure the return on my investment with confidence. It has made a significant difference in improving access to new patients."</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thrive-card text-center">
                            <img src="images/dr_jamie_bassel___3RNDV.svg" alt="" class="img-fluid">
                            <h3>Dr. Jamie Bassel, DC</h3>
                            <h5>Chiropractor</h5>
                            <h5>New York, NY</h5>
                            <p>"It has been the one platform that I can measure the return on my investment with confidence. It has made a significant difference in improving access to new patients."</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thrive-card text-center">
                            <img src="images/dr_jamie_bassel___3RNDV.svg" alt="" class="img-fluid">
                            <h3>Dr. Jamie Bassel, DC</h3>
                            <h5>Chiropractor</h5>
                            <h5>New York, NY</h5>
                            <p>"It has been the one platform that I can measure the return on my investment with confidence. It has made a significant difference in improving access to new patients."</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thrive-card text-center">
                            <img src="images/dr_jamie_bassel___3RNDV.svg" alt="" class="img-fluid">
                            <h3>Dr. Jamie Bassel, DC</h3>
                            <h5>Chiropractor</h5>
                            <h5>New York, NY</h5>
                            <p>"It has been the one platform that I can measure the return on my investment with confidence. It has made a significant difference in improving access to new patients."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- thrive section end -->
<?php include 'footer.php' ?>