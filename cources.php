<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolmanage";

//Getting form data
$ID = $_POST['CourseID'];
$name = $_POST['CourseName'];
$duration = $_POST['CourseDuration'];
$fee = $_POST['CourseFee'];
$radioVal = $_POST["flexRadioDefault"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($radioVal == 'Add'){
    $sql = "INSERT INTO courses (ID, cname, duration, fee) VALUES ('{$ID}', '{$name}', '{$duration}', '{$fee}')";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Course Successfully Added");';
        echo 'window.location.replace("courses_view.php");';
        echo '</script>';
      } else {
        echo '<script language="javascript">';
        echo 'alert("Opz.... Something went wrong..Try again");';
        echo 'window.location.replace("courses_view.php");';
        echo '</script>';
      }
    
} else if($radioVal == 'Update'){
  $sql = "SELECT * from courses WHERE ID='{$ID}'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

    $sql = "UPDATE courses SET cname='{$name}', duration='{$duration}', fee='{$fee}' WHERE ID='{$ID}'";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Course Successfully Updated");';
        echo 'window.location.replace("courses_view.php");';
        echo '</script>';
      } else {
        echo '<script language="javascript">';
        echo 'alert("Opz.. Something went wrong..Try again");';
        echo 'window.location.replace("courses_view.php");';
        echo '</script>';
      } 

  } else {
    echo '<script language="javascript">';
    echo 'alert("Opz.. Course not found...Try Again..");';
    echo 'window.location.replace("courses_view.php");';
    echo '</script>';
  }

} else{

  $sql = "SELECT * from courses WHERE ID='{$ID}'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $sql = "DELETE FROM courses WHERE ID='{$ID}'";
    if ($conn->query($sql) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("Course Successfully Deleted");';
      echo 'window.location.replace("courses_view.php");';
      echo '</script>';
    } else {
      echo '<script language="javascript">';
      echo 'alert("Opz.... Something went wrong..Try again");';
      echo 'window.location.replace("courses_view.php");';
      echo '</script>';
    }
  } else {
    echo '<script language="javascript">';
    echo 'alert("Opz.. Course not found...Try Again..");';
    echo 'window.location.replace("courses_view.php");';
    echo '</script>';
  }
}

$conn->close();

?>