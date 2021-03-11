<?php
//$email = $_POST['email'];
//$password = $_POST['password'];

$conlog = new mysqli("localhost", "root", "", "auth_reg");
if ($conlog->connect_error) {
    die("connection failed : " . $conlog->connect_error);
} else {
    $stmtlog = $conlog->prepare("insert into auth_table_log(email,password)values(?,?);");

    $stmtlog->bind_param("ss", $_POST['email'], $_POST['password']);
    $stmtlog->execute();
    //echo "registered successfully";
    $stmtlog->close();
    $conlog->close();
}
if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    //session_start();
    header("location:afterlogin.php");
}


//header("location :prac2.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5 pt-3 pb-3 img-fluid" style="background-color:ghostwhite;">
        <form class="was-validated" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <svg class="mt-3 mx-auto d-block" width=100 height="100" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.0152 0.479126C29.7593 0.479124 22.6665 2.63073 16.6335 6.66185C10.6005 10.693 5.89831 16.4226 3.12162 23.1261C0.344931 29.8296 -0.38157 37.206 1.03397 44.3224C2.44952 51.4388 5.94348 57.9756 11.0741 63.1063C16.2048 68.2369 22.7417 71.7309 29.8581 73.1465C36.9745 74.562 44.3508 73.8355 51.0544 71.0588C57.7579 68.2822 63.4875 63.58 67.5186 57.547C71.5497 51.514 73.7013 44.4211 73.7013 37.1653C73.6729 27.4442 69.7986 18.1295 62.9248 11.2557C56.051 4.38185 46.7362 0.507584 37.0152 0.479126ZM37.0152 11.485C39.1919 11.485 41.3198 12.1304 43.1297 13.3398C44.9396 14.5491 46.3503 16.268 47.1833 18.2791C48.0163 20.2901 48.2342 22.503 47.8095 24.6379C47.3849 26.7729 46.3367 28.7339 44.7975 30.2731C43.2583 31.8123 41.2973 32.8605 39.1623 33.2852C37.0274 33.7098 34.8145 33.4919 32.8034 32.6589C30.7924 31.8259 29.0735 30.4152 27.8642 28.6053C26.6548 26.7954 26.0094 24.6675 26.0094 22.4908C26.0191 19.5749 27.1817 16.7811 29.2436 14.7193C31.3055 12.6574 34.0992 11.4947 37.0152 11.485ZM37.0152 64.4682C32.6675 64.4484 28.3902 63.3682 24.5545 61.3212C20.7187 59.2742 17.4403 56.3224 15.0035 52.7216C15.1799 45.3844 29.6779 41.3454 37.0152 41.3454C44.3524 41.3454 58.8505 45.3844 59.0269 52.7216C56.5874 56.3197 53.3083 59.2694 49.4732 61.3161C45.638 63.3627 41.3622 64.4446 37.0152 64.4683V64.4682Z" fill="#fde50b" />
            </svg>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">&#128231;</span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required >
                </div>
                <div class="valid-feedback">valid email</div>
                <div class="invalid-feedback">invalid email</div>
            </div>
            <div class="form-group">
                <label for="pwd">password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">&#128274;</span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                </div>
                <div class="valid-feedback">valid password</div>
                <div class="invalid-feedback">invalid password</div>
                <span style="color:green">valid</span>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" required>By signing up, I agree to have read and
                    accepted the terms of use, cookie and privacy policy of skill gallery
                    <div class="valid-feedback">terms & conditions are agreed</div>
                    <div class="invalid-feedback">agree to continue</div>
                </label>
            </div>
            <p>new user ? <a href="signup2.php">click here</a></p>
            <div>
                <button class="btn btn-success mx-auto d-block" style=" background-image: linear-gradient(to right,#fde50b,#15dcf7f6);
    ">Login</button>
            </div>
        </form>
    </div>
</body>

</html>