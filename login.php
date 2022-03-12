<?
include("config.php");
session_start();

if(isset($_GET['uname'])){//Notice: Undefined index: uname
if($_SESSION['uname']){
}//
    header("location:index.php");
}else{

if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM user WHERE uname='$username' AND password='$password'";

    $sqlQ = mysqli_query($db,$sql);
    if($sqlR=mysqli_num_rows($sqlQ) > 0){
        // $row = mysqli_fetch_array($sqlQ);
        // $_SESSION['email'] = $row['email']; //pass user data, get by  $_SESSION['email'] in any page
        // unset($_SESSION['email']);
        $_SESSION['uname'] = $username; //or $row['uname'];
        header("location:index.php");
        die;
    }
}
}
?>
<form action="" method="POST">
    <input type="text" name="uname" placeholder="User Name">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="submit">
</form>