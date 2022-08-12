<?php
 include '../conn.php';

 $q =  "select * from plug";
 $result =$conn->query($q);

 $blogs = $result->fetch_all(MYSQLI_ASSOC);

 echo json_encode($blogs);


//  var_dump($result);

//  foreach($result as $s){
//     echo "<pre>"  . json_encode($s) . "</pre>";
//  }




//  $output=[];

//  while($item=$a->fetch_assoc()){

//     $output[]=$item;
//  }

// echo json_encode($output);


// $data=["name"=>"mohamed","website"=>"http://localhost/2t/index.php"];
// $jsond=json_encode($data);
// print_r($jsond);


// $data= file_get_contents("http://localhost/2t/index.php");
//  echo $data;
?>