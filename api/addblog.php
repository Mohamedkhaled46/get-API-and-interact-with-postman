<?php

include('../conn.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){


    $title=$_POST['title'];
    $display=$_POST['display'];
    $cateogry=$_POST['cateogry'];
    $imgnamee=$_FILES['img']['name'];
    $imgloc= $_FILES ['img']['tmp_name'];


    $r = rand(); 

    $finalName = "$r$imgnamee";

    $newloc="../images/$finalName";
    $finalLoc = "images/$finalName";

    move_uploaded_file($imgloc,$newloc);

$q="INSERT INTO plug(title,display,cateogry,img) VALUES ('$title','$display','$cateogry','$finalLoc')";
$add =$conn->query($q);

if($add){
    $message = ["MSG" => "Added DONE"]  ;
    echo json_encode($message);


}

    //  $message = ["MSG" => "DONE" , 'Request' => "POST"]  ;
    // $name = $_POST['name'];

    // $message['name'] = $name;


}
else{
    $message = ["MSG" => "Failed"];
    echo json_encode($message);
}