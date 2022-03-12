<?
ini_set('display_errors',FALSE); //remove php Warning
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$db = mysqli_connect($servername,$username,$password,$dbname);

if(!$db){
    die("Connection Failed: ".mysqli_connect_error());
}

?>