<!-- redirect the user based on mentor and mentee credentials linked with db -->
<?php

//error_reporting(0);
include './config.php';
//get mentor table 
$query = 'SELECT * FROM mentor_table';
$result = mysqli_query($conn, $query);
$mentor_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
//get mentee table
$query = 'SELECT * FROM mentee_table';
$result = mysqli_query($conn, $query);
$mentee_list =  mysqli_fetch_all($result, MYSQLI_ASSOC);

$email =  $_POST["email"] ?? null; //receiving name field value in $name variable  
$password = $_POST["password"] ?? null; //receiving password field value in $password variable  

echo $email;
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO recieve (recieved)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  //echo "Row is inserted";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// status creation


function return_details($mentee_list,$mentor_list,$email,$password)
{
    foreach ($mentee_list as $mentee) {

        if ($mentee["mentee_mail"] == $email) {
            if ($mentee["mentee_pass"] == $password) {

               // return $mentee;
                $url = "Location: ../mentee_homepage/index.html";
               header($url);
               break;
            } else {
                //return null;
                echo "Password is wrong";
            }
        }
    }


    foreach ($mentor_list as $mentor) {

        if ($mentor["mentor_mail"] == $email) {
            if ($mentor["mentor_pass"] == $password) {
               // return $mentor;
                $url = "Location: ../Lets-dream-Mentor-dashboard/index.php";
                header($url);
                break;
            } else {
               // return null;
                echo "Password is wrong";
            }
        }
    }

    
}
 return_details($mentee_list,$mentor_list,$email,$password);
