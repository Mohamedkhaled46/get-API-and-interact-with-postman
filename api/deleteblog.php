<?php 
include '../conn.php';

$id=$_GET['id'];

$d="DELETE from plug where id=$id";
$res2=$conn->query($d);

if($res2){
    $message2= ["MSG2" => "deleted DONE"]  ;
    echo json_encode($message2);


}
?>