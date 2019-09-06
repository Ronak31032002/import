<html>
<body>
<?php 
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