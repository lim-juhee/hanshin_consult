<?php
include'./dbconnect.php';
?>
<?php
$num = $_GET['num'];

$res = mysqli_query($con,"select * from student where s_number = $num");
$result = array();
while($row = mysqli_fetch_array($res)){
 $arrayTmp = array(
   "s_number" => $row['s_number']
 );
 array_push($result, $arrayTmp);
}
// print_r($result);
// echo "id : ".$result[0]['id']."<br>";
$cnt = count($result);

echo $cnt;
if($cnt == 0){
  echo "<script> alert('학번이 존재하지 않습니다.'); </script>";
  echo "<script> window.history.back(); </script>";
} else {
  echo "<script> location.href='./main.html'; </script>";
}

?>
