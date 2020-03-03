<?php
require 'db_config.php';


$num_rec_per_page = 5;


if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };


$start_from = ($page-1) * $num_rec_per_page;


<?php


<?php


  require 'db_config.php';


  $id  = $_POST["id"];
  $post = $_POST;


  $sql = "UPDATE items SET title = '".$post['title']."'
    ,description = '".$post['description']."' 
    WHERE id = '".$id."'";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM items WHERE id = '".$id."'"; 


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


  echo json_encode($data);


?>