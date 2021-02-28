<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "schoolmanage";

//Getting form data
$name = $_POST['uname'];
$pw = $_POST['psw'];
$radioVal = $_POST["flexRadioDefault"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Keep a varible to check whether login success or not.
$isValidUser = false;

if($radioVal == "Admin"){
    $sql = "SELECT * FROM admin";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["ID"]. " - Name: " . $row["uname"]. " " . $row["password"]. "<br>";
            if($row["uname"] == $name and $row["password"] == $pw){
                $isValidUser = true;
            }
        }
    }
} else if($radioVal == "Student"){
    echo "Student login here";
} else {
    $sql = "SELECT * FROM lecturers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["ID"]. " - Name: " . $row["lname"]. " " . $row["password"]. "<br>";
            if($row["ID"] == $name and $row["password"] == $pw){
                $isValidUser = true;
            }
        }
    }
}

//redirect user to the corresponding page
if($isValidUser == true){
    if($radioVal == "Admin"){
        header('Location: admin.php?name='.$name);
        exit;
    }
    if($radioVal == "Student"){
        header('Location: student.html');
        exit;
    } 
    if($radioVal == "Lecturer") {
        header('Location: lecturer_dashboard.php?name='.$name);
        exit;
    }
} else {
    echo '<script language="javascript">';
    echo 'alert("User data not found or Invalid login credentials");';
    echo 'history.go(-1);location.reload();';
    echo '</script>';
}

$conn->close();

?>