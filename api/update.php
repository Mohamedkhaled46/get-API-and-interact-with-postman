<?php 
include '../conn.php';

$id=$_POST['id'];
$title=$_POST['title'];


$qu="UPDATE  plug set title='$title' where id=$id";
$res3=$conn->query($qu);

if($res3){
    $message3= ["MSG3" => "updated DONE"]  ;
    echo json_encode($message3);


}
?>