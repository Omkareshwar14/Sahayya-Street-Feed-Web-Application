<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vendors";


/*$sname = $_POST["sname"];
$oname = $_POST["oname"];
$cname = $_POST["cname"];
$iname = $_POST["iname"];
$niname = $_POST["niname"];
$pname = $_POST["pname"];
$phname = $_POST["phname"];
$doname = $_POST["doname"]; */



$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submitt'])){

    $sname = $_POST['sname'];
    $oname = $_POST['oname'];
    $cname = $_POST['cname'];
    $iname = $_POST['iname'];
    $niname = $_POST['niname'];
    $pname = $_POST['pname'];
    $phname = $_POST['phname'];
    $doname = $_POST['doname'];
  
    $res = mysqli_query($conn, "INSERT into data1 values('', '$sname', '$oname', '$cname', '$iname', '$niname', '$pname', '$phname', '$doname') ");
    if($res){
      header("location: category.php");
     
    }                     
    else{
     echo "Failed";
     
    }
  }
/*else{
    $stmt = $conn->prepare("insert into data1(sname, oname, cname, iname, niname, pname, phname, doname)values(?, ?, ?, ?, ?, ?, ?, ?) ");
    $stmt->blind_param("ssssiiii", $sname, $oname, $cname, $iname, $niname, $pname, $phname, $doname);
    $stmt->execute();
    echo "Registration Successfully..";
    $stmt->close();
    $stmt->close();

}*/

/*$user = 'root';
$pass = '';
$db = 'vendors';

$con = new mysqli('localhost', $user , $pass, $db) or die("Not onnect");

echo "Great !!!!!!!";*/


/*if($conn->connect_error){
    die('Connection Failed  : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into data1(sname, oname, cname, iname, niname, pname, phname, doname)values(?, ?, ?, ?, ?, ?, ?, ?) ");
    $stmt->blind_param("ssssiiii", $sname, $oname, $cname, $iname, $niname, $pname, $phname, $doname);
    $stmt->execute();
    echo "Registration Successfully..";
    $stmt->close();
    $stmt->close();

}*/








?>
