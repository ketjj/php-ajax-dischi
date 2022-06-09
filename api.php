<?php
include 'db.php';

$result=[];

$genre = $_GET['genere'];

if(empty($genre)){
  $result = $albums;
}else{
  foreach($albums as $album){
    if($album['genre'] == $genre){
      $result[] = $album;
    }
  }
}



header('Content-Type:application/json');
echo json_encode($result);
?>