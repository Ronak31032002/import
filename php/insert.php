<html>
<body>
<?php
 header('Location:aftermain.html');
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"signup");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
$sql="INSERT INTO signupform (fname,uname,phoneno,addmail2,pass) VALUES ('$_POST[fname]','$_POST[uname]','$_POST[phoneno]','$_POST[addmail2]','$_POST[pass]')";

 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
   
session_start();
$conn = new mysqli('localhost','root','');
    mysqli_select_db($conn,"signup");
    $uname = $_POST['uname'];
    $password = $_POST['pass'];
    $s = "select * from signupform where uname = '$uname' && pass = '$password'";
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['uname'] = $uname;
        header('Location:home.php');
    }
    else {
        header('Location:/MY SITE/main.html');
    }
?> 

</body>
</html>