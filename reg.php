 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ignite";
$fname = $_POST['fname'];    
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$usname =$_POST['usname'];
$emailid =$_POST['emailid'];
$psd =$_POST['psd'];



// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup (fname,mname,lname,usname,emailid,psd) VALUES ('$fname','$mname','$lname','$usname','$emailid','$psd')";

if ($conn->query($sql) === TRUE) {
     echo "<script>
                alert('YOUR REGISTRATION IS COMPLETED..., LOGIN to Continue....');
                window.location.href='LOGIN.html';
                </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

Example (MySQLi Procedural)