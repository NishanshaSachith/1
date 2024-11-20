<!-- db.php -->
 <?php
     //establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "end";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Something went wrong". mysqli_connect_error());
    }