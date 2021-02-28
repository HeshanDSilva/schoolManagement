<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Lecturer Management Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
body {
	color: #fff;
	background-image: url('img_school.jpg');
  background-size: cover;
	font-family: 'Roboto', sans-serif;
	font-family: 'Roboto', sans-serif;
  background-attachment: fixed;
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
	width: 100%;
}
.signup-form form {
	color: #999;
	border-radius: 10px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
  height:100%;
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

.text-center {
  text-align: center;
}

table {
  background-color: #fff ;
  color: black;
  border: none;
  cursor: pointer;
  border-radius: 10px;
}

.table_container {
  background-color: #fff ;
  color: black;
  border: none;
  cursor: pointer;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  border-radius: 10px;
  height:635px;
  padding:30px
}

.table_container h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}

.table_container hr  {
	margin: 0 -30px 20px;
}

</style>
</head>
<body>
  <div class="w-100 p-4">
    <div class="row">
      <div class="col-md-4">
        <div class="signup-form">
          <form action="http://localhost/HTML+CSS+PHP/lectureres.php" method="post">
              <h2>Lecturer Management</h2>
              <hr>
              <div class="form-group">
                      <input type="text" class="form-control" id="lecID" name="lecID" placeholder="Lecturer ID" required>
              </div>
              <div class="form-group">
                      <input type="text" class="form-control" id="lecName" name="lecName" placeholder="Lecturer Name" required>
              </div>
              <div class="form-group">
                  <input type="date" class="form-control" id="dateJoined" name="dateJoined" placeholder="Date Joined" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" id="lecSalary" name="lecSalary" placeholder="Lecturer Salary" required>
                  <br>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" id="lecPassword" name="lecPassword" placeholder="Password" required>
                  <br>
              </div>

              <div class="form-group text-center">
                  <div class="row">
                    <div class="col-sm">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" value="Add" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            Add
                          </label>
                        </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" value="Delete">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Delete
                          </label>
                        </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" value="Update">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Update
                          </label>
                        </div>
                    </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="row">
                      <div class="col"><button type="submit" class="btn btn-primary btn-lg">Proceed</button></div>
                  </div>
              </div>
          </form>
        </div>
      </div>

      <div class="col-md-8">
        <div class="table_container">
          <h2>Available Lecturers</h2>
          <hr>
          <?php
            $con = new mysqli("127.0.0.1","root","","schoolmanage");
            // Check connection
            if ($con->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $result = $con->query("SELECT * FROM lecturers");

            echo "
            <table style='width:100%'>
            <tr>
            <th class='text-center'>Lecturer ID</th>
            <th class='text-center'>Lecturer Name</th>
            <th class='text-center'>Date Joined</th>
            <th class='text-center'>Lecturer Salary</th>
            <th class='text-center'>Password</th>
            </tr>";

            while($row = $result->fetch_assoc())
            {
            echo "<tr>";
            echo "<td class='text-center'>" . $row['ID'] . "</td>";
            echo "<td class='text-center'>" . $row['lname'] . "</td>";
            echo "<td class='text-center'>" . $row['date_join'] . "</td>";
            echo "<td class='text-center'>" . $row['salary'] . "</td>";
            echo "<td class='text-center'>" . $row['password'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";

            $con->close();
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>