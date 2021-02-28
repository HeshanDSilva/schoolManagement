<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Course Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
body {
	color: #fff;
	background-image: url('img_school.jpg');
    background-size: cover;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 51px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {
	border-radius: 10px;
}
.signup-form {
	width: 500px;
	margin: 100px auto;
    opacity: 0.8;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 2px 2px 2px rgba(0.3, 0.3, 0.3, 0.3);
	padding: 30px;
    position: absolute;
    left: 18%;
    top: 25%;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
}

a:hover, a:active {
  background-color: red;
}

</style>
</head>
<body>

<div class="signup-form">
    <form>
        <h2>Welcome <?php echo $_GET['name']; ?></h2>
        <hr>
        <div class="form-group">
            <div class="row text-center">
                    <div class="col">
                        <a href="students.php" class="btn btn-success" style="text-decoration: none;color: white;width: 100%;">Manage Students</a>
                    </div>
                    <div class="col">
                    <a href="courses_view.php" class="btn btn-success" style="text-decoration: none;color: white;width: 100%;">Manege Courses</a>
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col">
                        <a href="lectureres_view.php" class="btn btn-success" style="text-decoration: none;color: white;width: 100%;">Manage Lecturers</a>
                    </div>
                    <div class="col">
                        <a href="salaries.php" class="btn btn-success" style="text-decoration: none;color: white;width: 100%;">Manage Salaries</a>
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col">
                        <a href="payments.php" class="btn btn-success" style="text-decoration: none;color: white;width: 100%;">Manage Payments</a>
                    </div>
            </div>

        </div>
    </form>
</div>
</body>
</html>