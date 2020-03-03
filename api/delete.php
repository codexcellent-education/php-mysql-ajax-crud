<?php
require 'db_config.php';


$num_rec_per_page = 5;


if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };


$start_from = ($page-1) * $num_rec_per_page;


<?php


<?php


<?php


 require 'db_config.php';


 $id  = $_POST["id"];


 $sql = "DELETE FROM items WHERE id = '".$id."'";


 $result = $mysqli->query($sql);


 echo json_encode([$id]);


?>