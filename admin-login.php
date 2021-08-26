<?php include 'header2.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $status = $all_class->admin($email,$pass);
}

?>

<section class="form-area w-25 m-auto pt-5 pb-5">
        <h4>Log in with email</h4>
        <form method="post">
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email address" name="email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit" class="btn border border-primary form-control" value="Login" name="login">
        </form>
    </section>




<?php include 'footer.php' ?>