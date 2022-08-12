<?php
 include 'conn.php';
    $title=$_POST['title'];
    $display=$_POST['display'];
    $cateogry=$_POST['cateogry'];
    $imgnamee=$_FILES['img']['name'];
$imgloc= $_FILES ['img']['tmp_name'];
$newloc="images/$imgnamee";

move_uploaded_file($imgloc,$newloc);

$q="INSERT INTO plug(title,display,cateogry,img) VALUES ('$title','$display','$cateogry','$newloc')";
$add =$conn->query($q);

if($add){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<thead>
    <th></th>
    <th></th>
    <th></th>
</thead>
<tbody>
    <td></td>
    <td></td>
    <td></td>
</tbody>

    </table>
    
</body>
</html>