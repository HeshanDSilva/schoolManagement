<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolmanage";

//Getting form data
$ID = $_POST['lecID'];
$name = $_POST['lecName'];
$date = $_POST['dateJoined'];
$salary = $_POST['lecSalary'];
$pw = $_POST['lecPassword'];
$radioVal = $_POST["flexRadioDefault"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($radioVal == 'Add'){
    $sql = "INSERT INTO lecturers (ID, lname, date_join, salary, password) VALUES ('{$ID}', '{$name}', '{$date}', '{$salary}', '{$pw}')";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Lecturer Successfully Added");';
        echo 'window.location.replace("lectureres_view.php");';
        echo '</script>';
      } else {
        echo '<script language="javascript">';
        echo 'alert("Opz.... Something went wrong..Try again");';
        echo 'window.location.replace("lectureres_view.php");';
        echo '</script>';
      }
    
} else if($radioVal == 'Update'){
  $sql = "SELECT * from lecturers WHERE ID='{$ID}'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

    $sql = "UPDATE lecturers SET lname='{$name}', date_join='{$date}', salary='{$salary}', password='{$pw}' WHERE ID='{$ID}'";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Lecturer Successfully Updated");';
        echo 'window.location.replace("lectureres_view.php");';
        echo '</script>';
      } else {
        echo '<script language="javascript">';
        echo 'alert("Opz.. Something went wrong..Try again");';
        echo 'window.location.replace("lectureres_view.php");';
        echo '</script>';
      } 

  } else {
    echo '<script language="javascript">';
    echo 'alert("Opz.. Lecturer not found...Try Again..");';
    echo 'window.location.replace("lectureres_view.php");';
    echo '</script>';
  }

} else{

  $sql = "SELECT * from lecturers WHERE ID='{$ID}'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $sql = "DELETE FROM lecturers WHERE ID='{$ID}'";
    if ($conn->query($sql) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("Lecturer Successfully Deleted");';
      echo 'window.location.replace("lectureres_view.php");';
      echo '</script>';
    } else {
      echo '<script language="javascript">';
      echo 'alert("Opz.... Something went wrong..Try again");';
      echo 'window.location.replace("lectureres_view.php");';
      echo '</script>';
    }
  } else {
    echo '<script language="javascript">';
    echo 'alert("Opz.. Lecturer not found...Try Again..");';
    echo 'window.location.replace("lectureres_view.php");';
    echo '</script>';
  }
}

$conn->close();

?>