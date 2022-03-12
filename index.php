<?
session_start();

if($_SESSION['uname']){
    echo "Welcome ". $_SESSION['uname']."<br>";
    // echo $_SESSION['email'];
}else{
    header("location:login.php");
}
?>

<a href="logout.php">Log Out</a>