<?php
$dname = "root";
$dip = "localhost";
$pw= "apmsetup";
$dbname = "login";

$con = mysqli_connect($dip,$dname,$pw,$dbname);

if(mysqli_connect_errno($con)){
    echo "Fail : ".myssqli_connect_error();
} else {
    // echo "로그인"."<br>";
}

// $res = mysqli_query($con,"select * from login");
// $result = array();
// while($row = mysqli_fetch_array($res)){
// 	$arrayTmp = array(
// 		"id" => $row['id'],
// 		"pw" => $row['pw']
// 	);
// 	array_push($result, $arrayTmp);
// }
// //print_r($result);
// echo "id : ".$result[0]['id']."<br>";
// echo "pw : ".$result[0]['pw']."<br>";

//session_start();
mysqli_set_charset($con,"utf8");

//mysqli_cliose();


?>

